<?php
include "enter.php";
$hdsn = $_POST['hdsn'];
$hdsn2 = $_POST['hdsn2'];
$tipe = $_POST['tipe'];
$query = mysql_query("SELECT * FROM history WHERE hwid = '$hdsn'");
$mario = mysql_fetch_array($query);
$cekjumlah = mysql_num_rows($query);
if($tipe == 1) {
$tipe2 ="Hapus Data";
$save = mysql_query("DELETE FROM history WHERE hwid = '$hdsn'");
} else if($tipe == 2) {
$tipe2 ="Ganti Data";
$save = mysql_query("INSERT INTO gantidata VALUES ('','$hdsn','$hdsn2')");
$save = mysql_query("UPDATE history SET hwid = '$hdsn2' WHERE hwid = '$hdsn'");
}
if($save) { ?>
<?php echo $tipe2; ?> Succes
=========================
HDSN Lama : <?php echo $hdsn; ?>

HDSN Baru : <?php echo $hdsn2; ?>

UPLINK : <?php echo $username; ?>

=========================
<? } else { ?>
ERROR ... Failed
<?php }
?>