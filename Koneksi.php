<?php
    $Server = "localhost";
    $Username = "root";
    $Password = "";
    $Database = "ddl";

    $Koneksi = mysqli_connect($Server,$Username,$Password,$Database);


    if (!$Koneksi){
        die("Connection Failed : ". mysqli_connect_error());
        
    }

  
?>