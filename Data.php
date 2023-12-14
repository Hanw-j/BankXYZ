<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #e3f2fd;">
    <div class="container">
      <br>
    <h1 class="text-center">Data Rekening</h1>
    <?php
        include 'Koneksi.php';

        $query = "SELECT * FROM rekening";
        $result = mysqli_query($Koneksi,$query);
    ?>
    <a href="Tambah.php" class="btn btn-primary mb-2">+Tambah Data</a>
<table class="table table-secondary table-striped table-hover">
  <thead>
    <tr style = "background-color : white">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">No.Rekening</th>
      <th scope="col">Saldo</th>
      <th scope="col">Jenis</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($data = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <th scope="row"><?php echo $data['ID'];?></th>
      <td><?php echo $data['NAMA'];?></td>
      <td><?php echo $data['NO_REK'];?></td>
      <td><?php echo $data['SALDO'];?></td>
      <td><?php echo $data['JENIS'];?></td>
      <td><a class="btn btn-success" href="Transfer.php?ID=<?php echo $data['ID'];?>" role = "button">Transfer</a></td>
      <td><a class="btn btn-danger" href="Hapus.php?ID=<?php echo $data['ID'];?>" role = "button">Hapus</a></td>
    </tr>
  </tbody>
  <?php
        endwhile;
  ?>
</table>
</div>
</body>
</html>