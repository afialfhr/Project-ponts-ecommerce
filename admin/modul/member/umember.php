<?php 
session_start();
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['password']))
{
	echo "<center><strong>Akses Terbatas. Silahkan Login Terlebih Dahulu!<strong></center><br>";
	echo "<center><strong><a href='../../login.php'>Login Disini...</a><strong></center><br>";
}
else
{
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Mutiara Botol - Admin</title>

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- DataTables -->
	<link rel="stylesheet" href="assets/DataTables/datatables.min.css">

	<!-- Bootstrap core CSS -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!--external css-->
	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css"/>

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<script src="lib/chart-master/Chart.js"></script>
</head>

<body>
	<h2>User Member</h2>

	<table class="table table-bordered" id="datatables">
		<thead>
			<tr bgcolor="theme">
				<th>ID Member</th>
				<th>Nama Member</th>
				<th>Username Member</th>
				<th>Password Member</th>
			</tr>
		</thead>

		<tbody>
			<?php $ambil=$koneksi->query("SELECT * FROM member"); ?>
			<?php while($member=$ambil->fetch_assoc()){ ?>
			<tr bgcolor="white">
				<td><strong><?php echo $member["idmember"]; ?></strong></td>
				<td><strong><?php echo $member["namamember"]; ?></strong></td>
				<td><strong><?php echo $member["username"]; ?></strong></td>
				<td><strong><?php echo $member["password"]; ?></strong></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>

<div>
	<a href="media.php?halaman=home" class="btn btn-theme" title="Kembali ke Home"><i class="fa fa-arrow-left"></i>
	</a>
</div>

<!-- <div align="right">
	<font color="red">
		*CRUD data dapat dilakukan pada Data-Member
	</font>
</div>
 -->
</body>
</html>
<?php } ?>