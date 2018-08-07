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
$cekuser = mysql_query("SELECT * FROM anggota WHERE username = '$username'");
if(!$username ) {
echo'<script>alert("Masih Ada Data Yang Kosong..!!"); </script>';
} else {
$simpan = mysql_query("UPDATE anggota SET pangkat = 'Agen VIP' WHERE username = '$username'");
$simpan = mysql_query("UPDATE anggota SET saldo = saldo+10000 WHERE username = '$username'");
$simpan = mysql_query("UPDATE anggota SET saldo = saldo-20000 WHERE username = '$usr'");
echo '<script type="text/javascript">
             alert("Upgrade Level Sukses!\n=========================\nUsername : ' . $username . '\nUpgrade Level To : Agen VIP \n========================="); </script>';
}
?>