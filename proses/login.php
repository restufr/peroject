<?php
if($_POST['username']) {
session_start();
require("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM anggota WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username belum terdaftar.";
} else if($pass <> $hasil['password']) {
echo "Password tidak benar.";
} else {
$_SESSION['username'] = $hasil['username'];
echo "Sukses login.<script>window.location = '/simpliq/'</script>";
}
}
?>