<body style="background-color: brown;">
<div class="col-lg-4 col-md-6">
                    <div class="mt-1 mb-3">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                            +Tambah Produk
                        </button>
                          <?=$this->session->flashdata('notifikasi'); ?>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="<?= base_url('produk/simpan')?>" method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label class="form-label">Nama Produk</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label class="form-label">Harga</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                                  </div>
                                  <div class="col mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" name="stok" class="form-control" placeholder="Stok" required>
                                  </div>
                                  <div class="row g-2">
                                  <div class="col mb-3">
                                    <label class="form-label">Kode Produk</label>
                                    <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" required>
                                  </div>
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" name="gambar_produk" class="form-control" required>
                                </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Tutup
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                <div class="card">
                <h5 class="card-header">Produk</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kode Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $no=1; foreach($user as $row){ ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['kode_produk'] ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td>Rp. <?= number_format($row['harga']) ?></td>
                        <td><img src="<?= $row['gambar_produk'] ?>" alt="Gambar Produk" style="max-width: 100px;"></td>
                        <td>
                        <a onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                        href="<?= base_url('produk/hapus/'.$row['id_produk'])?>" class="btn-sm btn-danger">Hapus</a>
                        <a href="<?= base_url('produk/edit/'.$row['id_produk'])?>" class="btn-sm btn-success">Edit</a>
                        </td>
                      </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
                      </body>