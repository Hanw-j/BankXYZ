<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body style="background-color: #e3f2fd;">
<nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <h1 style="color:white">Tambah Data</h1>
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
    <div class="card" style="width: 25rem; border-color:black; background-color:#f1f6f9">
    <div class="card-body">
    <form action="ActionTambah.php" method="POST">
        <table>
            <br>
            <tr>
                <td>Nama</td>
                <td></td>
                <td><input type="text" name="NAMA" placeholder="Hans Teddy Wijaya" required></td>
            </tr>
            <tr>
                <td>Nomor Rekening</td>
                <td></td>
                <td><input type="text" name="NO_REK" placeholder="08080808" required></td>
            </tr>
            <tr>
                <td>Saldo</td>
                <td></td>
                <td><input types="number" name="SALDO" placeholder="1000000" required></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                    <select name="JENIS">
                        <option value="Pribadi">Pribadi</option>
                        <option value="Organisasi">Organisasi</option>
                    </select>
                </td>
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
</body>
</html>