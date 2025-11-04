<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hasil Perhitungan</title>
    <script src="Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
    <link rel='stylesheet' type='text/css' href='cssmore/design.css'>
  </head>
  <body>
            <a class="btnback" href="Main.php">Kembali</a>
    <div class="container">
        <canvas id="piechart" width="100" height="100"></canvas>
    </div>

  </body>
</html>
<?php
    require_once "class1.php";
    $work = new Structure;
    $jml = $work->jumlah();
    $lbl = $work->label();
?>
<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: [<?php foreach($lbl as $su) { echo '"' . $su['label'] . '",';}?>],
            datasets: [
            {
              label: "Penjualan Barang",
              data: [<?php foreach ($jml as $si) { echo '"' . $si['jumlah'] . '",';}?>],
              backgroundColor: [
                '#6cc417',
                '#e42217'
              ]
            }
            ]
            };

  var myPieChart = new Chart(ctx, {
                  type: 'pie',
                  data: data,
                  options: {
                    responsive: true
                }
              });

</script>