<?php
    include 'Koneksi.php';

    $Norek_Pengirim = $_POST['Norek_Pengirim'];
    $Norek_Penerima = $_POST['Norek_Penerima'];
    $Nominal = $_POST['Nominal'];
    
    
    $sqlCekRekPengirim = "SELECT SALDO FROM rekening WHERE NO_REK='$Norek_Pengirim'";
    $HasilCekRekPengirim= mysqli_query($Koneksi, $sqlCekRekPengirim);
    
    if (mysqli_num_rows($HasilCekRekPengirim) == 0) {
        echo "Rekening asal $Norek_Pengirim tidak ditemukan.";
    } else {
        $rowCekRekPengirim = mysqli_fetch_array($HasilCekRekPengirim);
        $saldoPengirim = $rowCekRekPengirim["SALDO"];
        
        $sqlCekRekPenerima= "SELECT SALDO FROM rekening WHERE NO_REK='$Norek_Penerima'";
        $HasilCekRekPenerima = mysqli_query($Koneksi, $sqlCekRekPenerima);

        if (mysqli_num_rows($HasilCekRekPenerima) == 0) {
            echo "Rekening tujuan $Norek_Penerima tidak ditemukan.";
        } else {
            $rowCekRekPenerima = mysqli_fetch_array($HasilCekRekPenerima);
            $saldoPenerima = $rowCekRekPenerima['SALDO'];
            
            if ($saldoPengirim >= $Nominal) {
                mysqli_begin_transaction($Koneksi);
                $sql_kurangi_saldo_pengirim = "UPDATE rekening SET SALDO=SALDO-$Nominal WHERE NO_REK='$Norek_Pengirim'";
                mysqli_query($Koneksi, $sql_kurangi_saldo_pengirim);
                $sql_tambah_saldo_penerima= "UPDATE rekening SET SALDO=SALDO+$Nominal WHERE NO_REK='$Norek_Penerima'";
                mysqli_query($Koneksi, $sql_tambah_saldo_penerima);
                mysqli_commit($Koneksi);
                mysqli_close($Koneksi);
                header ("location: data.php");
            } else {
                echo "Saldo rekening $Norek_Pengirim tidak mencukupi.";
            }
        }
    }
?>
