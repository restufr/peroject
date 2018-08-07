<?php
include "enter.php";
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
$bonus = $_POST['saldo'];
$uplink = $fet['nama'];

if ($level == SubReseller) {
$fee = 0;
} else if ($level == Agen) {
$fee = 30000;
}

$query = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
if($fet['saldo'] < $fee) {
echo 'Error : Saldo tidak mencukupi';
} else {
if(mysql_num_rows($query) <> 0) {
echo "ERROR : User sudah terdaftar";
} else {
if($fet['pangkat']!=="Admin" && $fet['pangkat']!=="Developers") {
echo "Tidak Ada Akses";
} else {
$simpan = mysql_query("INSERT INTO anggota(username, password, nama, saldo, pangkat, uplink) VALUES('$user','$pass','$nama','$bonus','$level','$uplink')");
$save = mysql_query("UPDATE anggota SET saldo =saldo-$fee WHERE username = '$username'");
if($save) { ?>
Register <?php echo $level; ?> Success
=========================
Nama : <?php echo $nama; ?>

Username : <?php echo $user; ?>

Password : ************
Saldo : <?php echo $bonus; ?>

Uplink: <?php echo $fet['nama']; ?>

=========================
<? } else { ?>
ERROR ... Failed
<?php }
}
}
}
?>