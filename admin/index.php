<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>Admin Control Dashboard</title>
		<!-- This link title bar icon or image in html tags -->
		<link href="image/admin_image.jpg" rel="icon" type="image/png"/>
		<!-- This link fontwasam css in html tags -->
		<link rel="stylesheet" href="css/all.css" type="text/css"/>
		<!-- This link bootstrap css in html tags -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- This link bootstrap css in html tags -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
		<!-- This link admin style css in html tags -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
	</head>
	<?php include "dashbord.php"; ?>
			<!-- This section is dashboard control in html tags -->
			<section id="dashboard_digain">
				<div class="dashboard_name">
					<span><i style="margin-right: 10px;" class="fas fa-house-damage"></i>Dashboard</span>
				</div>
				<!-- This Div is bandwidth used & none used % show in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>Bandwidth Admin Host</span>
					</div>
					<div style="padding: 30px 20px;">
						<h6 style="margin-bottom: 15px; margin-top: 15px;">Bandwidth Space</h6>
							<!-- This div is bandwidth none used % show in html tags -->
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
							</div>
						<h6 style="margin-bottom: 15px; margin-top: 15px;">Bandwidth Used </h6>
							<!-- This div is bandwidth used % show in html tags -->
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
							</div>
					</div>
				</div>
				<!-- This div is dashboard item vew in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>Website Overview</span>
					</div>
					<!-- This div is user visit & registration & logIn member in html tags -->
					<div class="user_website">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<!-- This div user number show in html tags -->
								<div class="box_user">
									<i style="margin-right: 7px; font-size: 30px;" class="fas fa-signal"></i>
									<span style="font-size: 30px;"><?php
$query = "SELECT id FROM admin_info ORDER BY id";
$result = mysqli_query($connection,$query) OR DIE ("QUERY ERROR");
$count = mysqli_num_rows($result);
echo $count;
?></span>
									<p>Users</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<!-- This div page number show in html tags -->
								<div class="box_user">
									<i style="margin-right: 7px; font-size: 30px;" class="fas fa-wifi"></i>
									<span style="font-size: 30px;">12</span>
									<p>Pages</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<!-- This div registration membar number show in html tags -->
								<div class="box_user">
									<i style="margin-right: 7px; font-size: 30px;" class="fab fa-pagelines"></i>
									<span style="font-size: 30px;">550</span>
									<p>register</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<!-- This div user visitor number show in html tags -->
								<div class="box_user">
									<i style="margin-right: 7px; font-size: 30px;" class="fas fa-broadcast-tower"></i>
									<span style="font-size: 30px;">1024</span>
									<p>visitor</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
		</section>
		<footer id="footer">
			<div class="copyright">
				<span>2020 CopyRight section</span>
			</div>
		</footer>


		<!-- This script tags is fontwasam javascript file link in html tags -->
		<script src="js/all.js"></script>
		<!-- This script tags is jQuery javascript file link in html tags -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<script src="js/funsion.js"></script>
	</body>
</html>
