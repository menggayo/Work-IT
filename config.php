<?php
$db_host    = 'localhost';
$db_user    = 'root';
$db_pass    = '';
$db_name    = 'jobfinder';
$db_port    = '3307';
$koneksi    = mysqli_connect($db_host, $db_user, $db_pass, $db_name , $db_port);
if (!$koneksi) {
    die("Koneksi Gagal");
}
?>