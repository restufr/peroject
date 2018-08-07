<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/test~/'</script>");
} else{
}?>
<?php
require("koneksi.php");
$user = $_SESSION['username']; 
$query = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$username = $_POST['username'];
$reseller = $_SESSION['username'];
$date=date('Y-m-d', time()+60*60*7);
if(!$username) {
  echo "Error : Masih Ada Data Yang Kosong";
 } else { 
$cektanggal = mysql_query("SELECT * FROM history WHERE hwid = '$username'");
$cekjumlah = mysql_num_rows($cektanggal);
$cekhasil = mysql_fetch_array($cektanggal);
$tanggalsebelum = $cekhasil['expired'];
if ($_POST["durasi"] == 3) {
$fee='15000';
$durasi = '3';
$perpan = strtotime ( '+3 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]==7) {
$fee='25000';
$durasi = '7';
$perpan = strtotime ( '+7 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]==14) {
$fee='35000';
$durasi = '14';
$perpan = strtotime ( '+14 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]==30) {
$fee='45000';
$durasi = '30';
$perpan = strtotime ( '+30 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
}else{
$fee = 'a';
}

if($hasil['saldo'] < $fee) {
echo 'Error : Saldo tidak mencukupi';
}else if($cekjumlah == 0) {
echo 'Error : HDSN belum terdaftar.';
} else {
$sisa = $hasil['saldo']-$fee;
$simpan = mysql_query("UPDATE anggota SET saldo = saldo-$fee WHERE username = '$user'");
$simpan = mysql_query("UPDATE history SET durasi = '$durasi Hari' WHERE hwid = '$username'");
$simpan = mysql_query("UPDATE history SET status = 'Not Aktif' WHERE hwid = '$username'");
$simpan = mysql_query("UPDATE history SET expired = '$perpan2' WHERE hwid = '$username'");
$simpan = mysql_query("UPDATE history SET tipe = 'Perpanjang' WHERE hwid = '$username'");
if($simpan) {
echo 'Perpanjang Data Succes
===================
Reseller : '.$hasil['nama'].'
Nama : '.$cekhasil['nama'].'
HDSN : '.$username.'
Ditambah : '. $durasi.' Hari
Sebelum : '.$cekhasil['expired'].'
Sesudah : '.$perpan2.'
Saldo Sebelum : '.number_format($hasil['saldo'],0,',','.').'
Saldo Sesudah : '.number_format($sisa,0,',','.').'
===================';
} else {
echo 'ERROR';
}
}
}
?>