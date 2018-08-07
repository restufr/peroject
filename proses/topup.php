<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/test~/'</script>");
} else{
}
require "koneksi.php";
$user = $_SESSION['username'];
$cekuser2 = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
$hasil2 = mysql_fetch_array($cekuser2);
$date=date('Y-m-d', time()+60*60*7);
$tanggal = $date;
  $kode1 = $_POST['c1'];
  $kode2 = $_POST['c2'];

$kode0 = $kode1.'-'.$kode2;
$cekuser = mysql_query("SELECT * FROM generator WHERE kode = '$kode0'");
$hasil = mysql_fetch_array($cekuser);
$jumlah = $hasil['nominal'];
$as = "Rp.".number_format((double)$jumlah,0,',','.');
if($hasil['status'] == 'tidak') {
echo "Error : Voucher sudah digunakan";
}else if(mysql_num_rows($cekuser) == 0) {
 echo "Error : Kode tidak ada (".$kode0.")";
}else{
 $simpan = mysql_query("UPDATE anggota SET saldo = saldo+$jumlah WHERE username = '$user'");
 $simpan = mysql_query("UPDATE generator SET status= 'tidak' WHERE kode = '$kode0'");
 if($simpan) { ?>
Isi Saldo Succes
===================
Code : <?php echo $kode0; ?>

Sebelum : <?php echo "Rp.".number_format((double)$hasil2['saldo'],0,',','.'); ?>

Sesudah :<?php echo "Rp.".number_format((double)$hasil2['saldo']+$jumlah,0,',','.'); ?>

Isi : <?php echo "Rp.".number_format((double)$jumlah,0,',','.'); ?>

===================
<? } else {
echo "ERROR";
}
}
?>