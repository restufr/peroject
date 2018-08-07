<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/'</script>");
} else{
}?>
<?php
require("koneksi.php");
$user = $_SESSION['username']; 
$query = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$name = $hasil['nama'];
$reseller = $_SESSION['username'];
$date=date('Y-m-d', time()+60*60*7);
if(!$nama || !$username) {
  echo "Error : Masih Ada Data Yang Kosong";
 } else { 
$cektanggal = mysql_query("SELECT * FROM history WHERE username = '$username'");
$cekjumlah = mysql_num_rows($cektanggal);
$cekhasil = mysql_fetch_array($cektanggal);
$tanggalsebelum = $cekhasil['expired'];
if ($_POST["durasi"] == '3') {
$fee='15000';
$durasi = '3';
$newdate = strtotime ( '+3 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+3 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='7') {
$fee='25000';
$durasi = '7';
$newdate = strtotime ( '+7 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+7 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='14') {
$fee='35000';
$durasi = '14';
$newdate = strtotime ( '+14 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+14 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='30') {
$fee='45000';
$durasi = '30';
$newdate = strtotime ( '+30 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+30 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
}else{
$fee = 'a';
}

if($hasil['saldo'] < $fee) {
echo 'Error : Saldo tidak mencukupi';
}else if($cekjumlah !== 0) {
echo 'Error : HDSN telah terdaftar.';
} else {
$sisa = $hasil['saldo']-$fee;
$simpan = mysql_query("INSERT INTO history VALUES('$username','$password','$nama','$durasi Hari','Not Aktif','Register','$user','$newdate','$name')");
$simpan = mysql_query("UPDATE anggota SET saldo = saldo-$fee WHERE username = '$user'");
if($simpan) {
echo 'Register Data Succes
===================
Reseller : '.$hasil['nama'].'
Nama : '.$nama.'
HDSN : '.$username.'
Password : '.$password.'
Durasi : '. $durasi.' Hari
Expired : '.$newdate.'
Saldo Sebelum : '.number_format($hasil['saldo'],0,',','.').'
Saldo Sesudah : '.number_format($sisa,0,',','.').'
===================';
} else {
echo 'ERROR';
}
}
}
?>