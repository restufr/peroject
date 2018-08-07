<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/simpliq/'</script>");
} else{
}?>
<?php
function acak($panjang)
{
	$karakter= '1234567890AQWVXCO';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
require("koneksi.php");
$user = $_SESSION['username']; 
$query = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$code1= XH;
$code2= acak(5);
$kode0 = $code1.'-'.$code2;
$jumlah=$_POST['jumlah'];
$reseller = $_SESSION['username'];
$date=date('Y-m-d', time()+60*60*7);
if(!$jumlah) {
  echo "Error : Masih Ada Data Yang Kosong";
 } else { 
if($hasil['saldo'] < $jumlah) {
echo 'Error : Saldo tidak mencukupi';
} else {
$sisa = $hasil['saldo']-$jumlah;
$save = mysql_query("INSERT INTO generator VALUES('$jumlah','$kode0','aktif')");
 $simpan = mysql_query("UPDATE anggota SET saldo =saldo-$jumlah WHERE username = '$user'");
if($simpan) {
echo 'Generate Code Voucher Succes
===================
Agen : '.$user.'
Code Voucher : '.$kode0.'
Jumlah Saldo: '.$jumlah.'
Saldo Sebelum : '.number_format($hasil['saldo'],0,',','.').'
Saldo Sesudah : '.number_format($sisa,0,',','.').'
===================';
} else {
echo 'ERROR';
}
}
}
?>