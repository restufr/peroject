<?php
session_start();
if ( !isset($_SESSION['username']) ) {
    header('location:login.php'); 
}
else { 
    $usr = $_SESSION['username']; 
}
require_once('koneksi.php');
$date=date('Y-m-d', time()+60*60*7);
$query = mysql_query("SELECT * FROM anggota WHERE username = '$usr'");
$hasil = mysql_fetch_array($query);
$anggota = mysql_query("SELECT * FROM anggota");
$username = $_POST['username'];
$password = $_POST['password'];
$pangkat = $_POST['level'];
$nama = $_POST['nama'];
$cekuser = mysql_query("SELECT * FROM history WHERE HWID = '$username'");
if(!$username ) {
echo'<script>alert("Masih Ada Data Yang Kosong..!!"); </script>';
} else {
$simpan = mysql_query("UPDATE history SET status = 'Aktif' WHERE hwid = '$username'");
echo '<script type="text/javascript">
             alert("Update Status History Transaksi Sukses!\n=========================\nHDSN : ' . $username . '\nStatus : Aktif \n========================="); </script>';
}
?>