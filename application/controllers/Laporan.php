<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }

    public function index()
    {
        // Ambil tanggal mulai dan tanggal selesai dari parameter GET jika ada
        $tanggal_mulai = $this->input->get('tanggal_mulai');
        $tanggal_selesai = $this->input->get('tanggal_selesai');

        // Jika kedua tanggal tidak kosong, lakukan filter data berdasarkan rentang tanggal
        if (!empty($tanggal_mulai) && !empty($tanggal_selesai)) {
            // Query untuk mendapatkan data penjualan berdasarkan rentang tanggal
            $this->db->select('penjualan.*, pelanggan.nama AS nama_pelanggan, produk.nama AS nama_produk');
            $this->db->select('penjualan.*, pelanggan.nama AS nama_pelanggan, produk.kode_produk, produk.nama AS nama_produk');
            $this->db->from('penjualan');
            $this->db->join('pelanggan', 'penjualan.id_pelanggan = pelanggan.id_pelanggan', 'left');
            $this->db->join('detail_penjualan', 'penjualan.kode_penjualan = detail_penjualan.kode_penjualan', 'left');
            $this->db->join('produk', 'detail_penjualan.id_produk = produk.id_produk', 'left');
            $this->db->where('tanggal >=', $tanggal_mulai);
            $this->db->where('tanggal <=', $tanggal_selesai);
            // $this->db->group_by('penjualan.kode_penjualan'); 
            $penjualan = $this->db->get()->result_array();
        } else {
            // Jika salah satu atau kedua tanggal kosong, ambil semua data penjualan
            $this->db->select('penjualan.*, pelanggan.nama AS nama_pelanggan, produk.nama AS nama_produk');
            $this->db->select('penjualan.*, pelanggan.nama AS nama_pelanggan, produk.kode_produk, produk.nama AS nama_produk');
            $this->db->from('penjualan');
            $this->db->join('pelanggan', 'penjualan.id_pelanggan = pelanggan.id_pelanggan', 'left');
            $this->db->join('detail_penjualan', 'penjualan.kode_penjualan = detail_penjualan.kode_penjualan', 'left');
            $this->db->join('produk', 'detail_penjualan.id_produk = produk.id_produk', 'left');
            $penjualan = $this->db->get()->result_array();
        }

        // Data untuk dikirimkan ke view
        $data = array(
            'judul_halaman' => 'Shusiko | Laporan Penjualan',
            'penjualan' => $penjualan
        );

        // Load view dengan data yang diperlukan
        $this->template->load('template', 'laporan_penjualan', $data);
    }
    
}
