<?php
    include 'Koneksi.php';

    $ID = $_GET['ID'];
    $query = "DELETE FROM rekening WHERE ID='$ID'";
    $result = mysqli_query($Koneksi,$query);

    header("Location: data.php");
?>