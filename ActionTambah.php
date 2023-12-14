<?php
    include 'Koneksi.php';

    $NAMA = $_POST['NAMA'];
    $NOREK = $_POST['NO_REK'];
    $SALDO = $_POST['SALDO'];
    $JENIS = $_POST['JENIS'];

    $query = "INSERT INTO rekening (NAMA, NO_REK, SALDO, JENIS) VALUES ('$NAMA', '$NOREK', '$SALDO', '$JENIS')";
    $result = mysqli_query($Koneksi,$query);

    header("Location:Data.php");
?>