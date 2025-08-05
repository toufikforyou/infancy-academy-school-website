<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>Admin Change Password</title>
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
		<style rel="stylesheet" type="text/css" media="screen">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background: #e5e5e5;
		}

		.input_form {
			margin: 0 auto;
			padding: 30px;
		}
		.submit{
			color: #fff;
			background-color: #007bff;
			border-color: #007bff;
			font-weight: 400;
		}
		.submit:hover{
			background-color: #0069d9;
			border-color: #0062cc;
		}
		.admin_photo {
				text-align: center;
				margin-bottom: 40px;
		}
		.admin_photo img {
				width: 100px;
				border-radius: 50%;
		}
		.admin_name {
				text-transform: uppercase;
				font-size: 20px;
				font-weight: 700;
				color: #e5ee;
				letter-spacing: 1px;
				text-align: center;
				margin-bottom: 30px;
		}.form-group span{
			color: red;
		}
		span.sucsess {
		background: green;
		padding: 8.5px;
		border-radius: 5px;
}
span.error {
		background: #1fffcb;
		padding: 8.5px;
		border-radius: 5px;
		font-weight: 900;
		color: red;
}
</style>
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
	</head>
<?php include "dashbord.php"; ?>
			<!-- This section is dashboard control in html tags -->
			<section id="dashboard_digain">
				<div class="dashboard_name">
					<span><i style="margin-right: 10px;" class="fas fa-cog fa-spin"></i>Change Password</span>
				</div>
				<!-- This div is dashboard item vew in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>Admin Change Password</span>
						<?php if (isset($_REQUEST['sucsess'])) { ?>
						<span class="sucsess"><?php echo "Password has been Change"; ?></span>
					<?php	} ?>
					<?php if (isset($_REQUEST['error'])) { ?>
					<span class="error"><?php echo "Old Password Are Not Match"; ?></span>
				<?php	} ?>
					<?php if (isset($_REQUEST['error1'])) { ?>
					<span class="error"><?php echo "Confirm Password Are Not Match"; ?></span>
				<?php	} ?>
					</div>
					<!-- This div is user visit & registration & logIn member in html tags -->
					<div class="input_form">
					<div class="admin">
					  <div class="admin_photo">
<?php
$id = $_SESSION['id'];
include("db_conn.php");
$query = "SELECT profile FROM admin_info WHERE id='$id'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
if ($count >0) {
	$row = mysqli_fetch_assoc($result);
 ?>
					    <img style="height:110px;" title="<?php echo $_SESSION['full_name']; ?>" src="image/<?php echo $row['profile']; ?>" alt="<?php echo $_SESSION['full_name']; ?>">
					  </div>
<?php } ?>
					  <div class="admin_name">
					    <span>admin Change Password</span>
					  </div>
						<hr>
					</div>
					  <form action="password_change.php" method="post">
					      <div class="form-group">
					        <label for="exampleInputEmail1"><span>*</span>Old Password</label>
					        <input name="old_password" type="password" class="form-control" placeholder="Old Password" required>
					      </div>
					      <div class="form-group">
					        <label for="exampleInputPassword1"><span>*</span>New Password</label>
					        <input name="new_password" type="password" class="form-control" placeholder="New Password" required>
					      </div>
					      <div class="form-group">
					        <label for="exampleInputPassword1"><span>*</span>Confirm Password</label>
					        <input name="cfn_password" type="password" class="form-control" placeholder="Confirm Password" required>
					      </div>
					      <div class="form-group">
					        <input name="change_password" type="submit" class="form-control submit" value="Change Password">
					      </div>
					    </form>
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
		<script type="text/javascript" src="js/all.js"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- This script tags is jQuery javascript file link in html tags -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- This script tags is funsion javascript file link in html tags -->
		<script type="text/javascript" src="js/funsion.js"></script>

		<!-- This script tags is jQuery javascript file link in html tags -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>
