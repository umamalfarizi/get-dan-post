<?php

if ( isset($_POST["submit"]) ) {
    $name = $_POST['name'];
    $jenisBarang = $_POST['jenisBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $keterangan = $_POST['keterangan'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="_style.css" />

    <title>Action PHP</title>
  </head>
  <body>
      <div id="profile">
          <div class="container">
              <div class="row d-flex justify-content-center">
                <div class="col col-8">
                    <h4>Nama Barang = <?=$name?></h4>
                    <h4>Jenis Barang = <?=$jenisBarang?></h4>
                    <h4>Jumlah Barang = <?=$jumlahBarang?></h4>
                    <h4>Harga Barang = <?=$hargaBarang?></h4>
                    <h4>Keterangan = <?=$keterangan?></h4>
                </div>
              </div>
          </div>
      </div>
  </body>
</html>
