<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Transaksi Data</title>
</head>
<body style="background-color: #e3f2fd;">
<nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <h1 style="color:white">Transfer Dana</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Data.php" style="color:white">Home</a>
        </li>
</ul>
</div>
</div>
</nav>
<br>
<br>
<div class="nav justify-content-center">
<p style="text-align:center;">
    <?php
        include 'Koneksi.php';

        $ID = $_GET['ID'];
        $query = "SELECT * FROM rekening where ID='$ID'";
        $result = mysqli_query($Koneksi, $query);

        while($data = mysqli_fetch_array($result)):
    ?>
    <div class="nav justify-content-center">
    <div class="card" style="width: 25rem; border-color:black; background-color:#f1f6f9">
    <div class="card-body">
    <form action="ActionTransfer.php" method="POST">
        <table>
            <br>
            <tr>
                <td>Dari Rekening</td>
                <td>:</td>
                <input type="hidden" name="ID" value="<?= $data['ID']; ?>">
                <td><input type="text" name="Norek_Pengirim" value="<?= $data['NO_REK']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Ke Rekening</td>
                <td>:</td>
                <td><input type="text" name="Norek_Penerima" placeholder="0000000" required></td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td><input type="number" name="Nominal" placeholder="1000" required></td>
            </tr>
        </table>
        <br>
        <div class="nav justify-content-center">
        <input type="submit" value="Kirim" class="btn btn-outline-dark">
        </div>
    </form>
        </div>
        </div>
        </div>
    <?php 
    endwhile ?>
    </hp>
</body>
</html>