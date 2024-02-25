<body style="background-color: brown;">
    <div class="card">
        <h5 class="card-header">Pilih Rentang Tanggal</h5>
        <div class="card-body">
            <form action="<?= base_url('laporan') ?>" method="get">
                <div class="row mb-3">
                    <div class="col">
                        <label for="tanggal_mulai" class="form-label">Mulai Tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                    </div>
                    <div class="col">
                        <label for="tanggal_selesai" class="form-label">Selesai Tanggal</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button onclick ="window.print()" class="btn btn-danger shadow float-right">Print <i class="fa fa-print"></i></button>
                    <!-- <a href="<?= base_url('penjualan/generate_pdf') ?><?= urlencode(json_encode($penjualan)) ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-pdf"></i> Cetak PDF</a> -->
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-3">
        <h5 class="card-header">Laporan Penjualan</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Tanggal</th>
                            <th>No. Nota</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <!-- <th>Jumlah Barang</th> -->
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $total = 0; // Inisialisasi total harga
                        foreach ($penjualan as $data) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama_pelanggan'] ?></td>
                                <td><?= $data['tanggal'] ?></td>
                                <td><?= $data['kode_penjualan'] ?></td>
                                <td><?= $data['kode_produk'] ?></td>
                                <td><?= $data['nama_produk'] ?></td>
                                <!-- <td><?= $data['jumlah'] ?></td> -->
                                <td>Rp. <?= number_format($data['total_harga']) ?></td>
                            </tr>
                            <?php
                            // Tambahkan total harga dari data penjualan saat ini ke total harga keseluruhan
                            $total += $data['total_harga'];
                        } ?>
                        <!-- <tr>
                            <td colspan="3">Total Harga</td>
                            <td>Rp. <?= number_format($total); ?></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
