<?php if (isset($_REQUEST['id'])) { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>Edit Admin Account</title>
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
		<style media="screen">
		.admin_img img {
width: 150px;
border-radius: 50%;
}
.admin_profile{
background: darkcyan;
}
.admin_img {

text-align: center;
padding: 20px;
}
tr {
color: #ffffffb3;
}
.admin_details {
padding: 10px;
}
th:first-child {
width: 170px;
}
.form-check {
    float: left;
    padding: 0px 20px;
}
		</style>
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
	</head>
<?php include "dashbord.php"; ?>
			<!-- This section is dashboard control in html tags -->
			<section id="dashboard_digain">
				<div class="dashboard_name">
					<span><i style="margin-right: 10px;" class="fas fa-pen"></i>Edit Account</span>
				</div>
				<!-- This div is dashboard item vew in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>Edit Admin Account</span>
					</div>
					<!-- This div is user visit & registration & logIn member in html tags -->
		<?php
			$id = $_REQUEST['id'];
			include("db_conn.php");
			$query = "SELECT * FROM user_info WHERE id = '$id'";
			$result = mysqli_query($connection,$query) or die("Query Faild");
			$count = mysqli_num_rows($result);
			if ($count > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
		?>

<div class="admin_profile">
	<div class="admin_img">
		<img style="height:150px;" title="<?php echo $row['full_name']; ?>" src="../image/<?php echo $row['profile']; ?>" alt="<?php echo $row['full_name']; ?>">
	</div>
	<hr>
	<div class="admin_details">
		<form action="user_edit_page.php" method="post" enctype="multipart/form-data">
			<div class="form-group click_box">
				<input value="<?php echo $row['id']; ?>" name="id" type="hidden" class="form-control abbr" required>
			</div>
			<div class="form-group click_box">
				<input value="<?php echo $row['profile']; ?>" name="img" type="hidden" class="form-control abbr" required>
			</div>
			<div class="form-group click_box">
				<label for="exampleInputFristName">Full Name</label>
				<input name="fullname" value="<?php echo $row['full_name']; ?>" title="Enter Your Full Name" placeholder="Enter Your Full Name" type="fullname" class="form-control abbr" required>
			</div>
			<div class="form-group click_box">
				<label for="exampleInputEmail1">Email address</label>
				<input name="email" value="<?php echo $row['email']; ?>" title="Enter Your Email Account" placeholder="Enter Your Email address" type="email" class="form-control abbr">
			</div>
			<div class="form-group click_box">
				<label for="exampleInputMobail">Mobail No</label>
				<input name="number" value="0<?php echo $row['phone']; ?>" title="Number Not Change" placeholder="Enter Your Mobail Number" type="number" class="form-control abbr" readonly>
			</div>
			<label style="float:left;margin-right: 10px;" for="exampleInputMobail">Gander</label>
			<div class="form-check">
				<input name="gander" class="form-check-input" type="radio" id="gridRadios1" value="Male" checked>
				<label class="form-check-label" for="gridRadios1">
					Male
				</label>
			</div>
			<div class="form-check">
				<input name="gander" class="form-check-input" type="radio" id="gridRadios2" value="Female">
				<label class="form-check-label" for="gridRadios2">
					Female
				</label>
			</div>
			<div class="form-check">
				<input name="gander" class="form-check-input" type="radio" id="gridRadios3" value="Other">
				<label class="form-check-label" for="gridRadios2">
					Other
				</label>
			</div>
		<br>
		<br>
		<div class="form-group">
		<label for="divisions">Select Country</label>
		<select class="form-control" name="country">
		 <option value="Bangladesh">Bangladesh</option>
		</select>
		</div>
		<div class="form-group">
		<label for="divisions">Select Division</label>
		<select class="form-control" name="divition" id="divisions" onchange="division_list();" required>
		 <option disabled selected>Select Division</option>
		 <option value="Barishal">Barishal</option>
		 <option value="Chattogram">Chattogram</option>
		 <option value="Dhaka">Dhaka</option>
		 <option value="Khulna">Khulna</option>
		 <option value="Mymensingh">Mymensingh</option>
		 <option value="Rajshahi">Rajshahi</option>
		 <option value="Rangpur">Rangpur</option>
		 <option value="Sylhet">Sylhet</option>
		</select>
		</div>
		<div class="form-group">
			<label for="distr">Select District</label>
			<select class="form-control" name="district" id="distr" onchange="zilaList();" required></select>
		</div>
		<div class="form-group">
			<label for="polic_sta">Select Upzila</label>
			<select class="form-control" name="upzila" id="polic_sta" onchange="upzilaList();" required></select>
		</div>
		<div class="form-group">
			<label for="union_list">Select Union</label>
			<select class="form-control" name="union" id="union_list" onchange="unionList();"></select>
		</div>
		<div class="form-group">
			<label for="village_list">Select Village</label>
			<select class="form-control" name="village" id="village_list" required></select>
		</div>
		<div class="form-group">
					<label for="inputZip">Post Code</label>
					<input name="post_code" value="<?php echo $row['post_code']; ?>" type="text" class="form-control" id="inputZip" required>
		</div>
		<div class="form-group">
		<label for="admin">Select Option</label>
		<select name="admin" class="form-control" required>
		 <option value="BASIC">BASIC MEMBER</option>
		 <option value="PREMIUM">PREMIUM MEMBER</option>
		</select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlFile1">Profile Image</label>
		 <input name="profile" type="file" class="form-control" id="exampleFormControlFile1">
	 </div>
		<button name="update" title="REGISTER" type="submit" class="btn btn-primary form-control" required>UPDATE</button>
		</form>
<?php
	}
}
 ?>
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
<script src="js/country.js" type="text/javascript"></script>
		<!-- This script tags is jQuery javascript file link in html tags -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>
<?php }else {
	header('location: user_registration.php');
}?>
