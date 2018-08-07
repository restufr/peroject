<?php
include_once "enter.php";

$homo = mysql_query("SELECT * FROM history WHERE username = '$username'"); ?>
History Transaksi Anda<br>
<table style='width:600px' border="5" bordercolor="white">
<tr bgcolor='red'><th>HDSN</th>
  <th>Password Cheat</th>
  <th>Nama</th> 
  <th>Durasi</th> 
  <th>Status</th>
  <th>Expired</th>
</tr>
<?php
while($rjn=mysql_fetch_array($homo)) {
?>
<tr bgcolor='blue'>
  <th><?php echo $rjn['hwid']; ?></th>
  <th><?php echo $rjn['password']; ?></th>
  <th><?php echo $rjn['nama']; ?></th>
  <th><?php echo $rjn['durasi']; ?></th>
  <th><?php echo $rjn['status']; ?></th>
  <th><?php echo $rjn['expired']; ?></th>
</tr>
<? } ?>
</table> 