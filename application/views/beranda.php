<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart Example</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body style="background-color: brown;">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-1">PENJUALAN HARI INI</span>
          <h3 class="card-title mb-2">Rp. <?= number_format($hari_ini) ?></h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-1">PENJUALAN BULAN INI</span>
          <h3 class="card-title mb-2">Rp. <?= number_format($bulan_ini)?></h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-1">TRANSAKSI HARI INI</span>
          <h3 class="card-title mb-2"> <?= $transaksi ?></h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-1">PRODUK</span>
          <h3 class="card-title mb-2"><?= $produk ?></h3>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <?php
      $nama_now = date('M');
      $nama_1 = date('M', strtotime("-1 Months"));
      $nama_2 = date('M', strtotime("-2 Months"));
      $nama_3 = date('M', strtotime("-3 Months"));
      $nama_4 = date('M', strtotime("-4 Months"));
      $nama_5 = date('M', strtotime("-5 Months"));

      $tanggal = date('Y-m', strtotime("-1 Months"));
      $this->db->select('SUM(total_harga) as total');
      $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
      $bulan_1 = $this->db->get()->row()->total;

      $tanggal = date('Y-m', strtotime("-2 Months"));
      $this->db->select('SUM(total_harga) as total');
      $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
      $bulan_2 = $this->db->get()->row()->total;

      $tanggal = date('Y-m', strtotime("-3 Months"));
      $this->db->select('SUM(total_harga) as total');
      $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
      $bulan_3 = $this->db->get()->row()->total;

      $tanggal = date('Y-m', strtotime("-4 Months"));
      $this->db->select('SUM(total_harga) as total');
      $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
      $bulan_4 = $this->db->get()->row()->total;

      $tanggal = date('Y-m', strtotime("-5 Months"));
      $this->db->select('SUM(total_harga) as total');
      $this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') = '$tanggal'");
      $bulan_5 = $this->db->get()->row()->total;

      if($bulan_1==NULL){$bulan_1=0;}
      if($bulan_2==NULL){$bulan_2=0;}
      if($bulan_3==NULL){$bulan_3=0;}
      if($bulan_4==NULL){$bulan_4=0;}
      if($bulan_5==NULL){$bulan_5=0;}
      ?>
      <div class="card">
        <div class="card-body">
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          <script>
            const xValues = ["<?= $nama_5 ?>", "<?= $nama_4 ?>", "<?= $nama_3 ?>", "<?= $nama_2 ?>", "<?= $nama_1 ?>", "<?= $nama_now ?>"];
            const yValues = [<?= $bulan_5 ?>, <?= $bulan_4 ?>, <?= $bulan_3 ?>, <?= $bulan_2 ?>, <?= $bulan_1 ?>, <?= $bulan_ini ?>];
            const barColors = ["brown", "green","blue","orange","pink","red"];

            new Chart("myChart", {
              type: "bar",
              data: {
                labels: xValues,
                datasets: [{
                  backgroundColor: barColors,
                  data: yValues
                }]
              },
              options: {
                legend: { display: false },
                title: {
                  display: true,
                  text: "PENJUALAN 5 BULAN TERAKHIR"
                }
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
