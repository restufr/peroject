<?php
session_start();
if(!isset($_SESSION['username'])) {
die("<script>window.location = '/'</script>");
} else{ 
}?>
<?php
if (isset($_SESSION['username'])) { ?>
<h4>Add New User </h4>
<p><label for='nama'><span>Nama</span></label><input class='input-field' type='text' id='nama' style='width: 170px; color: red;'></p>
<p><label for='Username'><span>Username</span></label><input class='input-field' type='text' id='username' style='width: 170px; color: red;'></p>
<p><label for='password'><span>Password</span></label><input class='input-field' type='password' id='password' style='width: 170px; color: red;'></p>
<p><label for='durasi'><span>Level </span></label><select id='level' class='select-field' style='width: 170px; color: red;'>
<option value='Agen'>Agen</option>
</select></p>
<p><label for='saldo'><span>Saldo</span></label><input class='input-field' type='text' id='saldo' style='width: 170px; color: red;'></p>

<p><label for='submit'><span></span></label><p><input type='submit' name='submit' class='button btn btn-warning btn-large' value='Submit' onclick="user();"/></p>
<?php } ?>