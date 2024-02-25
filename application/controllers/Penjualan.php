<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level')==NULL) {
            redirect('auth');
        }
    }
	
	public function index() {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('y-m-d');
        $this->db->select('*');
        $this->db->from('penjualan a')->order_by('a.tanggal', 'DESC')->where('a.tanggal', $tanggal);
        $this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
        $user = $this->db->get()->result_array();
        
        $this->db->from('pelanggan')->order_by('nama', 'ASC');
        $pelanggan = $this->db->get()->result_array();
        $data = array (
            'judul_halaman' => 'Shusiko | Penjualan',
            'user'          => $user,
            'pelanggan'     => $pelanggan
        );
		$this->template->load('template','penjualan_index', $data);
	}

    public function transaksi($id_pelanggan) {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('Y-m');
        
        // Menghitung jumlah transaksi pada bulan yang sama
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m') =", $tanggal);
        $jumlah = $this->db->get()->num_rows();
        
        // Membuat nomor nota berdasarkan tanggal dan jumlah transaksi
        $nota = date('ymd').($jumlah + 1);
        $this->db->from('produk')->where('stok >', 0)->order_by('nama','ASC');
        $produk = $this->db->get()->result_array();

        $this->db->from('pelanggan')->where('id_pelanggan', $id_pelanggan);
        $namapelanggan = $this->db->get()->row()->nama;

        $this->db->from('detail_penjualan a');
        $this->db->join('produk b', 'a.id_produk=b.id_produk', 'left');
        $this->db->where('a.kode_penjualan', $nota);
        $detail = $this->db->get()->result_array();

        $this->db->from('temp a');
        $this->db->join('produk b', 'a.id_produk=b.id_produk', 'left');
        $this->db->where('a.id_user', $this->session->userdata('id_user'));
        $this->db->where('a.id_pelanggan', $id_pelanggan);
        $temp = $this->db->get()->result_array();
        $data = array (
            'judul_halaman' => 'Shusiko | Transaksi Penjualan',
            'nota'          => $nota,
            'produk'        => $produk,
            'id_pelanggan'  => $id_pelanggan,
            'namapelanggan' => $namapelanggan,
            'detail'        => $detail,
            'temp'          => $temp
        );
        $this->template->load('template','penjualan_transaksi', $data);

    }

    public function addtemp() {
            $this->db->from('produk')->where('id_produk', $this->input->post('id_produk'));
            $stok_lama = $this->db->get()->row()->stok;
        
            // Pengecekan pertama pada tabel 'temp'
            $this->db->from('temp');
            $this->db->where('id_produk', $this->input->post('id_produk'));
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
            $cek = $this->db->get()->result_array();
        
            if($stok_lama < $this->input->post('jumlah')){
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
             Produk yang dipilih tidak mencukupi !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else if (!empty($cek)) { // Menggunakan empty() untuk mengecek apakah $cek tidak kosong
            $this->session->set_flashdata('notifikasi', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Produk sudah dipilih !
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        
        } else {
            $data = array (
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'id_user' => $this->session->userdata('id_user'),
                'id_produk' => $this->input->post('id_produk'),
                'jumlah' => $this->input->post('jumlah')
            );
            $this->db->insert('temp', $data);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-primary alert-dismissible" role="alert">
             Produk berhasil ditambahkan ke keranjang !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect($_SERVER["HTTP_REFERER"]);

    }

    public function tambahkeranjang() {
        $this->db->from('detail_penjualan');
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->where('kode_penjualan', $this->input->post('kode_penjualan'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL) {
            $this->session->set_flashdata('notifikasi', '
        <div class="alert alert-danger alert-dismissible" role="alert">
         Produk sudah dipilih !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect($_SERVER["HTTP_REFERER"]);
        }

        $this->db->from('produk')->where('id_produk', $this->input->post('id_produk'));
        $harga = $this->db->get()->row()->harga;
        $this->db->from('produk')->where('id_produk', $this->input->post('id_produk'));
        $stok_lama = $this->db->get()->row()->stok;
        $stok_sekarang = $stok_lama - $this->input->post('jumlah');
        $sub_total = $this->input->post('jumlah')*$harga;
        $data = array (
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'id_produk' => $this->input->post('id_produk'),
            'jumlah' => $this->input->post('jumlah'),
            'sub_total' => $sub_total,
        );
        if($stok_lama>=$this->input->post('jumlah')){
            $this->db->insert('detail_penjualan', $data);
            $data2 = array('stok' => $stok_sekarang );
            $where = array ('id_produk' => $this->input->post('id_produk'));
            $this->db->update('produk', $data2, $where);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-primary alert-dismissible" role="alert">
             Produk berhasil ditambahkan ke keranjang !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
             Produk yang dipilih tidak mencukupi !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function hapus($id_detail, $id_produk) {
        $this->db->from('detail_penjualan')->where('id_detail', $id_detail);
        $jumlah = $this->db->get()->row()->jumlah;
        $this->db->from('produk')->where('id_produk', $id_produk);
        $stok_lama = $this->db->get()->row()->stok;
        $stok_sekarang = $jumlah+$stok_lama;
        $data2 = array('stok' => $stok_sekarang);
        $where = array('id_produk' => $id_produk);
        $this->db->update('produk', $data2, $where);
        $where = array('id_detail' => $id_detail);
        $this->db->delete('detail_penjualan', $where);
        $this->session->set_flashdata('notifikasi', '
        <div class="alert alert-danger alert-dismissible" role="alert">
         Produk telah dihapus dari keranjang !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect($_SERVER["HTTP_REFERER"]);
        }

        public function hapus_temp($id_temp) {
            $where = array('id_temp' => $id_temp);
            $this->db->delete('temp', $where);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
             Produk telah dihapus dari keranjang !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect($_SERVER["HTTP_REFERER"]);
            }

    public function bayar() {
        $data = array(
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'total_harga' => $this->input->post('total_harga'),
            'tanggal' => date('Y-m-d'),
        );
        $this->db->insert('penjualan', $data);
        $this->session->set_flashdata('notifikasi', '
        <div class="alert alert-primary alert-dismissible" role="alert">
        Penjualan Berhasil !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('penjualan/invoice/'. $this->input->post('kode_penjualan'));
    }

    public function bayarv2() {
        //bagian pembuatan nota
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('Y-m');
        
        // Menghitung jumlah transaksi pada bulan yang sama
        $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =", $tanggal);
        $jumlah = $this->db->get()->num_rows();
        
        // Membuat nomor nota berdasarkan tanggal dan jumlah transaksi
        $nota = date('ymd').($jumlah + 1);

        $this->db->from('temp a');
        $this->db->join('produk b', 'a.id_produk=b.id_produk', 'left');
        $this->db->where('a.id_user', $this->session->userdata('id_user'));
        $this->db->where('a.id_pelanggan', $this->input->post('id_pelanggan'));
        $temp = $this->db->get()->result_array();
        $total = 0;
        foreach($temp as $row) {
            if($row['stok'] < $row['jumlah']) {
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
             Produk yang dipilih tidak mencukupi !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect($_SERVER["HTTP_REFERER"]);
            
            }
            $total = $total+$row['jumlah']*$row['harga'];
            //input ke tabel detail penjualan
            $data = array (
                'kode_penjualan' => $nota,
                'id_produk' => $row['id_produk'],
                'jumlah' => $row['jumlah'],
                'sub_total' => $row['jumlah']*$row['harga'],
            );
            $this->db->insert('detail_penjualan', $data);
            //update tabel produk stoknya
            $data2 = array('stok' => $row['stok'] - $row['jumlah'] );
            $where = array ('id_produk' => $row['id_produk']);
            $this->db->update('produk', $data2, $where);
            //hapus dari tabel temp
            $where2 = array (
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'id_user'      => $this->session->userdata('id_user')
            );
            $this->db->delete('temp', $where2);
        }

        //bagian input ke tabel penjualan
        $data = array (
            'kode_penjualan' => $nota,
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'total_harga' => $total,
            'tanggal' => date('Y-m-d'),
        );
        $this->db->insert('penjualan', $data);
        $this->session->set_flashdata('notifikasi', '
        <div class="alert alert-primary alert-dismissible" role="alert">
        Penjualan Berhasil !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('penjualan/invoice/'. $nota);
    }

    public function invoice($kode_penjualan) {
        $this->db->select('*');
        $this->db->from('penjualan a')->order_by('a.tanggal', 'DESC')->where('a.kode_penjualan', $kode_penjualan);
        $this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
        $penjualan = $this->db->get()->row();

        $this->db->from('detail_penjualan a');
        $this->db->join('produk b', 'a.id_produk=b.id_produk', 'left');
        $this->db->where('a.kode_penjualan', $kode_penjualan);
        $detail = $this->db->get()->result_array();
        $data = array (
            'judul_halaman' => 'Shusiko | Transaksi Penjualan',
            'nota'          => $kode_penjualan,
            'penjualan'     => $penjualan,
            'detail'        => $detail,
        );
        $this->template->load('template','invoice', $data);
    }

    public function generate_pdf($kode_penjualan)
    {
        // Load library TCPDF
        $this->load->library('pdf');

        // Fetch data penjualan berdasarkan kode penjualan
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where('kode_penjualan', $kode_penjualan);
        $penjualan = $this->db->get()->row();

        // Fetch detail penjualan berdasarkan kode penjualan
        $this->db->select('*');
        $this->db->from('detail_penjualan');
        $this->db->join('produk', 'detail_penjualan.id_produk = produk.id_produk');
        $this->db->where('kode_penjualan', $kode_penjualan);
        $detail_penjualan = $this->db->get()->result_array();

        // Set up the PDF document
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Invoice ' . $kode_penjualan);
        $pdf->SetSubject('Invoice');
        $pdf->SetKeywords('TCPDF, PDF, invoice');

        // Add a page
        $pdf->AddPage();

        // Set content for the PDF
        $html = '<div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-opencart"></i>Shusiko<small class="pull-right"> Meliora-Innovations </small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
                from
                <address>
                    <strong> Shusiko </strong> <br>
						
                    Jl. Pangeran Jayakarta, DKI Jakarta<br>
                    Phone : 089611598067<br>
                    Email : ameliaramadanti405@gmail.com
                </address>
            </div>';

        $html .= '<div class="col-sm-4 invoice-col">
           <b>Nomor Nota #' . $penjualan->kode_penjualan . '</b><br>
        </div>';

        $html .= '<table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>';
        $total = 0;
        $no = 1;
        foreach ($detail_penjualan as $detail) {
            $html .= '<tr>
                <td>' . $no . '</td>
                <td>' . $detail['kode_produk'] . '</td>
                <td>' . $detail['nama'] . '</td>
                <td>' . $detail['jumlah'] . '</td>
                <td> Rp. ' . number_format($detail['harga']) . '</td>
                <td>Rp. ' . number_format($detail['sub_total']) . '</td>
            </tr>';
            $total += $detail['jumlah'] * $detail['harga'];
            $no++;
        }

        $html .= '<tr>
            <td colspan="5"><b>Total Harga</b></td>
            <td>Rp. ' . number_format($total) . '</td>
        </tr>';

        $html .= '</tbody></table>';

        // Print the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output the PDF
        $pdf->Output('invoice_' . $kode_penjualan . '.pdf', 'I');
    }

    public function cetak_invoice($kode_penjualan)
    {
        $this->generate_pdf($kode_penjualan);
    }
}