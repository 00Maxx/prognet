<?php
    $koneksi = mysqli_connect("192.168.4.4", "2205551039", "2205551039", "db_mahasiswa");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>