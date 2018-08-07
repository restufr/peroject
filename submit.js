function login(){
var username = $('#username').val();
var password = $('#password').val();
if(username=='') {
   $('#result').html('Username kosong.');
}else if(password=='') {
   $('#result').html('Password kosong.');
}else{
   $('#result').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/login.php',
     data: {username: username,password: password},
     success: function(data) {
          $('#result').html(data);
     },
	 error: function(){
	$('#result').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function proses(){
var nama = $('#nama').val();
var username = $('#username').val();
var password = $('#password').val();
var durasi = $('#durasi').val();
if(nama=='') {
   $('#hasil').html('Error : Nama pelanggan masih kosong.');
}else if(username=='') {
   $('#hasil').html('Error : HDSN masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/proses.php',
     data: {username: username,password: password,nama: nama,durasi: durasi},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function proses1(){
var nama = $('#nama').val();
var username = $('#username').val();
var password = $('#password').val();
var durasi = $('#durasi').val();
if(nama=='') {
   $('#hasil').html('Error : Nama pelanggan masih kosong.');
}else if(username=='') {
   $('#hasil').html('Error : HDSN masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/proses1.php',
     data: {username: username,password: password,nama: nama,durasi: durasi},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function perpanjang(){
var username = $('#username').val();
var durasi = $('#durasi').val();
if(username=='') {
   $('#hasil').html('Error : HDSN masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/perpanjang.php',
     data: {username: username,durasi: durasi},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function perpanjang1(){
var username = $('#username').val();
var durasi = $('#durasi').val();
if(username=='') {
   $('#hasil').html('Error : HDSN masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/perpanjang1.php',
     data: {username: username,durasi: durasi},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function tools(){
var hdsn = $('#hdsn').val();
var hdsn2 = $('#hdsn2').val();
var tipe = $('#tipe').val();
if(hdsn=='') {
   $('#hasil').html('Error : Serial Number masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/tools.php',
     data: {hdsn: hdsn,hdsn2: hdsn2,tipe: tipe},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function tools1(){
var hdsn = $('#hdsn').val();
var hdsn2 = $('#hdsn2').val();
var tipe = $('#tipe').val();
if(hdsn=='') {
   $('#hasil').html('Error : Serial Number masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/tools1.php',
     data: {hdsn: hdsn,hdsn2: hdsn2,tipe: tipe},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function generate(){
var jumlah = $('#jumlah').val();
if(jumlah=='') {
   $('#hasil').html('Error : Code Voucher masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/buat.php',
     data: {jumlah: jumlah},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function user(){
var nama = $('#nama').val();
var username = $('#username').val();
var password = $('#password').val();
var level = $('#level').val();
var saldo = $('#saldo').val();
var uplink = $('#uplink').val();
if(username=='') {
   $('#hasil').html('Error : Username masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/tambahuser.php',
     data: {nama: nama,username: username,password: password,level: level,saldo: saldo,uplink: uplink},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function topup(){
var c1 = $('#c1').val();
var c2 = $('#c2').val();
var c3 = $('#c3').val();
var c4 = $('#c4').val();
var c5 = $('#c5').val();
if(c1=='') {
   $('#hasil').html('Error : Code 1 masih kosong.');
} else if(c2=='') {
   $('#hasil').html('Error : Code 2 masih kosong.');
} else if(c3=='') {
   $('#hasil').html('Error : Code 3 masih kosong.');
} else if(c4=='') {
   $('#hasil').html('Error : Code 4 masih kosong.');
} else if(c5=='') {
   $('#hasil').html('Error : Code 5 masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/topup.php',
     data: {c1: c1,c2: c2,c3: c3,c4: c4,c5: c5},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function update(){
var nama = $('#nama').val();
var username = $('#username').val();
var password = $('#password').val();
var level = $('#level').val();
var saldo = $('#saldo').val();
var uplink = $('#uplink').val();
if(username=='') {
   $('#hasil').html('Error : Username masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/update.php',
     data: {nama: nama,username: username,password: password,level: level,saldo: saldo,uplink: uplink},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}
function upgrade(){
var nama = $('#nama').val();
var username = $('#username').val();
var password = $('#password').val();
var level = $('#level').val();
var saldo = $('#saldo').val();
var uplink = $('#uplink').val();
if(username=='') {
   $('#hasil').html('Error : Username masih kosong.');
}else{
   $('#hasil').html('Sedang diproses...');
   $.ajax({
     type: "POST",
     url:'proses/upgrade.php',
     data: {nama: nama,username: username,password: password,level: level,saldo: saldo,uplink: uplink},
     success: function(data) {
          $('#hasil').html(data);
     },
	 error: function(){
	$('#hasil').html('Terjadi error, silahkan coba lagi.');
	}
   });
}
}