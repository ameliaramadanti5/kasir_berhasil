<body style="background-color: brown;">
<div class="mt-2 mb-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" fdprocessedid="76lcm">
                          +Tambah Penjualan
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Penjualan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url('pelanggan/simpan')?>" method="post">
                <div class="row">
                <div class="modal-body">
                  <div class="row mb-3">
                      <div class="col">
                          <div class="input-group">
                              <input type="text" class="form-control" id="searchInput" placeholder="Cari nama pelanggan...">
                              <button class="btn btn-outline-secondary" type="button" id="searchButton">
                              <i class="bx bx-search fs-4 lh-0"></i>
                              </button>
                          </div>
                      </div>
                  </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0" id="tableBody">
                                <?php $no=1; foreach($pelanggan as $row) { ?>
                                <tr>
                                    <td><?= $no; ?>. </td>
                                    <td class="text-center"><?= $row['id_pelanggan'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['telp'] ?></td>
                                    <td>
                                        <a href="<?= base_url('penjualan/transaksi/'.$row['id_pelanggan'])?>" class="btn-sm btn-warning">Pilih</a>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

 <!-- untuk mengsearch nama pelanggan  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#searchInput').keyup(function(){
            var searchText = $(this).val().toLowerCase();
            $('#tableBody tr').each(function(){
                var found = false;
                $(this).find('td').each(function(){
                    var cellText = $(this).text().toLowerCase();
                    if (cellText.indexOf(searchText) !== -1) {
                        found = true;
                        return false;
                    }
                });
                if (found) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<div class="card">
                <h5 class="card-header">Penjualan Hari Ini</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Nota</th>
                        <th>Nominal</th>
                        <th>Pelanggan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $total=0; $no=1; foreach($user as $row) { ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['kode_penjualan'] ?></td>
                        <td>Rp. <?= number_format($row['total_harga']) ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>
                        <a href="<?= base_url('penjualan/invoice/'.$row['kode_penjualan']) ?>" 
                        class="btn-sm btn-warning">Cek</a>
                        </td>
                      </tr>
                      <?php $total=$total+$row['total_harga']; $no++; } ?>
                      <tr>
                        <td colspan=2>Total</td>
                        <td>Rp.<?= number_format($total);?></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
                        </div>
                        </body>