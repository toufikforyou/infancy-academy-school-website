<?php
if (isset($_REQUEST['id'])) {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>User Profail</title>
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
					<span><i style="margin-right: 10px;" class="fas fa-user-plus"></i>User Profail</span>
				</div>
				<!-- This div is dashboard item vew in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>User Profail Details</span>
					</div>
<?php
$id = $_REQUEST['id'];
include("db_conn.php");
$query = "SELECT * FROM user_info WHERE id = '$id'";
$result = mysqli_query($connection,$query) or die("Query Faild");
$count = mysqli_num_rows($result);
if ($count > 0) {
$row = mysqli_fetch_assoc($result) ?>

<div class="admin_profile">
	<div class="admin_img">
		<img style="height:150px;" title="<?php echo $row['full_name']; ?>" src="../image/<?php echo $row['profile']; ?>" alt="<?php echo $row['full_name']; ?>">
	</div>
	<hr>
	<div class="admin_details">
		<table class="table table-bordered">
  <thead>
    <tr>
      <th>Account Name</th>
      <th style="color: #80c70f; font-weight: 600; text-transform: uppercase;" scope="col"><?php echo $row['full_name']; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Gender</th>
      <td><?php echo $row['gender']; ?></td>
    </tr>
    <tr>
      <th>Account ID</th>
      <td style="color: #80c70f; font-weight: 600; text-transform: uppercase;"><?php echo $row['account_no']; ?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><a style="color: #2329ce; text-decoration: none;" href="mailto: <?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
    </tr>
    <tr>
      <th>Phone</th>
      <td><a style="color: white; font-weight: 500; text-decoration: none;" href="tel: +880<?php echo $row['phone']; ?>">+880<?php echo $row['phone']; ?></a></td>
    </tr>
		<tr>
      <th>Country</th>
      <td><?php echo $row['country']; ?></td>
    </tr>
		<tr>
      <th>Division</th>
      <td><?php echo $row['division']; ?></td>
    </tr>
		<tr>
      <th>District</th>
      <td><?php echo $row['district']; ?></td>
    </tr>
		<tr>
      <th>Upzila</th>
      <td><?php echo $row['upzila']; ?></td>
    </tr>
		<tr>
      <th>Village</th>
      <td><?php echo $row['village']; ?></td>
    </tr>
		<tr>
      <th>Post_Code</th>
      <td><?php echo $row['post_code']; ?></td>
    </tr>
		<tr>
      <th>Account Status</th>
      <td style="color: #80c70f; font-weight: 600; text-transform: uppercase;"><?php echo $row['account_info']; ?></td>
    </tr>
		<tr>
      <th>Member Info</th>
      <td style="color: #80c70f; font-weight: 600; text-transform: uppercase;"><?php echo $row['member_info']; ?></td>
    </tr>
  </tbody>
</table>
<?php } ?>


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
<?php
}else {
	header('location:user_registration.php');
}
?>
