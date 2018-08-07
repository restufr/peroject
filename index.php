<?php
session_start();
if(!isset($_SESSION['username'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Login Agen XHack</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="ﾅ「kasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="css/style.min.css" rel="stylesheet" />
	<link href="css/style-responsive.min.css" rel="stylesheet" />
	<link href="css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="img/PB.ico" />
	<!-- end: Favicon and Touch Icons -->	
		
<div id="info">
<marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="5">SELAMAT DATANG DI TOOLS AGEN XHACK</marquee>
</div> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<center><h2 id="result">Login Agen XHack</h2>
						<fieldset>
							
							<input class="input-large span12" id="username" type="text" placeholder="Username" />

							<input class="input-large span12" id="password" type="password" placeholder="Password" />

							<div class="clearfix"></div>
							
							<div class="clearfix"></div>
							
							<button type="submit" class="btn btn-primary span12" onclick='login();'>Login</button>
						</fieldset>	
	
				</div>
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="js/jquery.ui.touch-punch.js"></script>	
		<script src="js/modernizr.js"></script>	
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.cookie.js"></script>	
		<script src='js/fullcalendar.min.js'></script>	
		<script src='js/jquery.dataTables.min.js'></script>
		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.flot.time.js"></script>
		
		<script src="js/jquery.chosen.min.js"></script>	
		<script src="js/jquery.uniform.min.js"></script>		
		<script src="js/jquery.cleditor.min.js"></script>	
		<script src="js/jquery.noty.js"></script>	
		<script src="js/jquery.elfinder.min.js"></script>	
		<script src="js/jquery.raty.min.js"></script>	
		<script src="js/jquery.iphone.toggle.js"></script>	
		<script src="js/jquery.uploadify-3.1.min.js"></script>	
		<script src="js/jquery.gritter.min.js"></script>	
		<script src="js/jquery.imagesloaded.js"></script>	
		<script src="js/jquery.masonry.min.js"></script>	
		<script src="js/jquery.knob.modified.js"></script>	
		<script src="js/jquery.sparkline.min.js"></script>	
		<script src="js/counter.min.js"></script>	
		<script src="js/raphael.2.1.0.min.js"></script>
	<script src="js/justgage.1.0.1.min.js"></script>	
		<script src="js/jquery.autosize.min.js"></script>	
		<script src="js/retina.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/wizard.min.js"></script>
		<script src="js/core.min.js"></script>	
		<script src="js/charts.min.js"></script>	
		<script src="js/custom.min.js"></script>
		<script src="jsnya.js"></script>
		<script src="submit.js"></script>

	<!-- end: JavaScript-->
	
</body>
</html>
<? }else { 
$user = $_SESSION['username']; 
require("koneksi.php");

$query = mysql_query("SELECT * FROM anggota WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$jumlah = mysql_num_rows($query);
?>
<?php 
require("koneksi.php");
$date=date('Y-m-d', time()+60*60*7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Agen Tools XHack</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="Åukasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="css/style.min.css" rel="stylesheet" />
	<link href="css/style-responsive.min.css" rel="stylesheet" />
	<link href="css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="img/PB.ico" />
	<!-- end: Favicon and Touch Icons -->	
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>		
				<div class="row-fluid">
				<a class="brand span2" href="http://xhack-vip-cheat.tk/test~/"><span>Agen XHack</span></a>
				</div>		
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></div>
								<div class="user">
									<span class="hello">Selamat Datang...!!</span>
									<span class="name"><?php echo $hasil['nama']; ?></span>
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									
								</li>
								<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				
				<div class="row-fluid actions">
													
					<input type="text" class="search span12" placeholder="..." />
				
				</div>	
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="http://xhack-vip-cheat.tk/test~"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-collapse"></i><span class="hidden-tablet"> PointBlank</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="#" id="daftar"><i class="icon-star"></i><span class="hidden-tablet"> Register Data</span></a></li>
								<li><a class="submenu" href="#" id="perpanjang"><i class="icon-star"></i><span class="hidden-tablet"> Perpanjang Data</span></a></li>
								<li><a class="submenu" href="#" id="tools"><i class="icon-gear"></i><span class="hidden-tablet"> Edit Data</span></a></li>
				                               
							</ul>	
						</li>	

						<li>
							<a class="dropmenu" href="#"><i class="icon-collapse"></i><span class="hidden-tablet"><?php echo $hasil['pangkat']; ?> Panel</span> <span class="label">2</span></a>

<?php 
if ($hasil['pangkat'] == "Admin") { ?>
							<ul>
								<li><a class="submenu" href="#" id="user"><i class="icon-star"></i><span class="hidden-tablet"> Add New User</span></a></li>
								<li><a class="submenu" href="#" id="history"><i class="icon-star"></i><span class="hidden-tablet"> History Transaksi</span></a></li>
								<li><a class="submenu" href="#" id="update"><i class="icon-star"></i><span class="hidden-tablet"> Update Status</span></a></li>
								<li><a class="submenu" href="#" id="upgrade"><i class="icon-star"></i><span class="hidden-tablet"> Upgrade Level</span></a></li>
               							<li><a class="submenu" href="#" id="generate"><i class="icon-money"></i><span class="hidden-tablet"> Generate Voucher Saldo</span></a></li>
								<li><a class="submenu" href="#" id="topup"><i class="icon-money"></i><span class="hidden-tablet"> Isi Saldo</span></a></li>
							</ul>
<? } else if ($hasil['pangkat'] == "Agen") { ?>
							<ul>
								<li><a class="submenu" href="#" id="topup"><i class="icon-money"></i><span class="hidden-tablet"> Isi Saldo</span></a></li>
								<li><a class="submenu" href="#" id="history"><i class="icon-gear"></i><span class="hidden-tablet"> History Transaksi</span></a></li>
				                               
							</ul>
<? }
?>	
						</li>						
<li><a href="harga" target="_blank"><i class="icon-usd"></i><span class="hidden-tablet">Daftar Harga</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<div class="row-fluid">
				
				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
                                         <i class="icon-user red"></i>	
					<span class="title">Nama</span>
					<span class="value"><?php echo $hasil['nama']; ?></span>
				</div>
				
				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
					<i class="icon-star blue"></i>	
					<span class="title">Level</span>
					<span class="value"><?php echo $hasil['pangkat']; ?></span>
				</div>
				
				<div class="span3 smallstat box mobileHalf noMargin" ontablet="span6" ondesktop="span3">
					<i class="icon-money green"></i>
					<span class="title">Saldo</span>
					<span class="value"><?php echo $hasil['saldo']; ?></span>
				</div>
				
				<div class="span3 smallstat mobileHalf box" ontablet="span6" ondesktop="span3">
					<i class="icon-check yellow"></i>
					<span class="title">Uplink</span>
					<span class="value"><?php echo $hasil['uplink']; ?></span>
							</ul>	
						</li>
					</ul>
				</div>
			</div>				
<div class="maincontent">
            <div class="maincontentinner">
                       <div class="alert alert-success">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              
                              <p style="margin: 8px 0"><div id="lol">Hallo, <b><?php echo $hasil['nama']; ?></b><br>
Selamat datang kembali di Agen Tools XHack!</b><br>
Tools ini berguna untuk menambahkan data user member!<br>
Kami Mohon bantuan anda agar melapor jika mendapatkan bug dari Agen Tools ini<br>
Demi kenyamanan bersama.<br>
</div><br>
Terima Kasih</p>
                        </div><!--alert-->
			</div>
			<div class="row-fluid">
				
				<div class="box span9" ontablet="span12" ondesktop="span8">
					<div class="box-header">
						<h2><i class="icon-check"></i>Beranda</h2>
					</div>
                                         <div class="box-content">
						<div id="fitur"><center><img src="img/logo817.png" ></center></div>
                                         </div>
				</div>	
				<div class="box span3 noMargin" ontablet="span12" ondesktop="span4">
					<div class="box-header">
						<h2><i class="icon-check"></i>Hasil Query : <script type="text/javascript">
// mulai...........  
var waktu=new Date()
var tahun=waktu.getFullYear() 
var hari=waktu.getDay()
var bulan=waktu.getMonth()
var tanggal=waktu.getDate()
if (tanggal < 7) {tanggal="0"+tanggal}
var hariarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu")
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")
document.write(hariarray[hari]+", "+tanggal+" "+bulanarray[bulan]+" "+tahun)
</script></h2>
					</div>
					<div class="box-content">
<textarea id="hasil" cols="100" rows="7" class="autosize form-control" name="message" style="resize: vertical; height: 500px;">
</textarea>		
					</div>
				</div>
		
			</div>
			
			
			</div>				
			
       
					
			</div>
			<!-- end: Content -->
				
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">Ã—</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2015 <a href="http://xhack-vip.com/" alt="Bootstrap Themes" target="_blank">XHack</a></span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="#" alt="Bootstrap Admin Templates" target="_blank">Redesign Restu Fauzi</a></span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="js/jquery.ui.touch-punch.js"></script>	
		<script src="js/modernizr.js"></script>	
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.cookie.js"></script>	
		<script src='js/fullcalendar.min.js'></script>	
		<script src='js/jquery.dataTables.min.js'></script>
		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.flot.time.js"></script>
		
		<script src="js/jquery.chosen.min.js"></script>	
		<script src="js/jquery.uniform.min.js"></script>		
		<script src="js/jquery.cleditor.min.js"></script>	
		<script src="js/jquery.noty.js"></script>	
		<script src="js/jquery.elfinder.min.js"></script>	
		<script src="js/jquery.raty.min.js"></script>	
		<script src="js/jquery.iphone.toggle.js"></script>	
		<script src="js/jquery.uploadify-3.1.min.js"></script>	
		<script src="js/jquery.gritter.min.js"></script>	
		<script src="js/jquery.imagesloaded.js"></script>	
		<script src="js/jquery.masonry.min.js"></script>	
		<script src="js/jquery.knob.modified.js"></script>	
		<script src="js/jquery.sparkline.min.js"></script>	
		<script src="js/counter.min.js"></script>	
		<script src="js/raphael.2.1.0.min.js"></script>
	<script src="js/justgage.1.0.1.min.js"></script>	
		<script src="js/jquery.autosize.min.js"></script>	
		<script src="js/retina.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/wizard.min.js"></script>
		<script src="js/core.min.js"></script>	
		<script src="js/charts.min.js"></script>	
		<script src="js/custom.min.js"></script>
		<script src="jsnya.js"></script>
		<script src="submit.js"></script>
		<script src="loads.js"></script>
	<!-- end: JavaScript-->
</body>
</html>
<? } 
?>