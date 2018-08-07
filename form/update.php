<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/'</script>");
} else{ 
}
include_once "koneksi.php";
$homo = mysql_query("SELECT * FROM history"); ?>
<?php
if (isset($_SESSION['username'])) { ?>
<table style='width:600px' border="5" bordercolor="white">
<tr bgcolor='red'><th>HWID</th>
  <th>Password Cheat</th>
  <th>Nama</th> 
  <th>Durasi</th> 
  <th>Status</th>
  <th>Expired</th>
  <th>Uplink</th>
</tr>
<?php
while($rjn = mysql_fetch_array($homo)) {
?>
<tr bgcolor='blue'>
  <th><?php echo $rjn['hwid']; ?></th>
  <th><?php echo $rjn['password']; ?></th>
  <th><?php echo $rjn['nama']; ?></th>
  <th><?php echo $rjn['durasi']; ?></th>
  <th><?php echo $rjn['status']; ?></th>
  <th><?php echo $rjn['expired']; ?></th>
  <th><?php echo $rjn['uplink']; ?></th>
</tr>
<? } ?>
</table>  
<br>
Update Status<br>
<p><label for='HDNS'><span>HDSN</span></label><input class='input-field' type='text' id='username' style='width: 170px; color: red;'></p>

<p><label for='submit'><span></span></label><p><input type='submit' name='submit' class='button btn btn-warning btn-large' value='Submit' onclick="update();"/></p>
<?php } ?>