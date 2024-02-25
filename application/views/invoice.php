<body style="background-color: brown;">
<section class="invoice">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-opencart"></i> Shusiko <small class="pull-right">Meliora-Innovations</smaill>
                    </h2>
                </div>
            </div>
            <div div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <addresss>
                        <strong>Shusiko</strong><br>
                        Jl. Pangeran Jayakarta, DKI Jakarta<br>
                        Phone : 089611598067<br>
                        Email : ameliaramadanti405@gmail.com</address>
                </div>
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?= $penjualan->nama; ?></strong> <br>
                        <?= $penjualan->alamat; ?> <br>
                        Contact Person : <?= $penjualan->telp; ?><br>
                    </addresss>
                </div>
                <div class="col-sm-4 invoice-col">
                    <b> Nomor Nota #<?= $nota ?></b><br>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table id="example2" class="table table-striped dataTable no-footer">
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
                            <tbody class="table-border-bottom-0">
                                <?php $total = 0;
                                $no = 1;
                                foreach ($detail as $row) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row['kode_produk'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['jumlah'] ?></td>
                                        <td>Rp. <?= number_format($row['harga']) ?></td>
                                        <td>Rp. <?= number_format($row['jumlah'] * $row['harga']) ?></td>
                                    </tr>
                                <?php $total = $total + $row['jumlah'] * $row['harga'];
                                    $no++;
                                } ?>
                                <tr>
                                    <td colspan=5>Total Harga</td>
                                    <td>Rp. <?= number_format($total); ?></td>
                                </tr>
                            </tbody>
                    </table>
                </div>

                <div class="row no-print">
                    <div class="col-xs-12">
                    <!-- <button onclick ="window.print()" class="btn btn-danger shadow float-right">Print <i class="fa fa-print"></i></button> -->
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="<?= base_url('penjualan/generate_pdf/' . $nota) ?>" class="btn btn-danger pull-right" target="_blank"><i class="fa fa-credit-card"></i> Cetak Nota PDF</a>
                        <button onclick ="window.print()" class="btn btn-danger shadow float-right">Print <i class="fa fa-print"></i></button>
                    </div>
            </div>
        </div>
    </div>
</section>
</body>