<?php
session_start();
if ($_SESSION['member_info']) {
if (isset($_POST['register'])) {
	include("db_conn.php");
 		$fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
 		$email = mysqli_real_escape_string($connection,$_POST['email']);
 		$number = mysqli_real_escape_string($connection,$_POST['number']);
 		$gander = mysqli_real_escape_string($connection,$_POST['gander']);
 		$country = mysqli_real_escape_string($connection,$_POST['country']);
 		$divition = mysqli_real_escape_string($connection,$_POST['divition']);
 		$district = mysqli_real_escape_string($connection,$_POST['district']);
 		$upzila = mysqli_real_escape_string($connection,$_POST['upzila']);
 		$union = mysqli_real_escape_string($connection,$_POST['union']);
 		$village = mysqli_real_escape_string($connection,$_POST['village']);
 		$post_code = mysqli_real_escape_string($connection,$_POST['post_code']);
 		$password = mysqli_real_escape_string($connection,md5($_POST['password']));
 		$cfmpassword = mysqli_real_escape_string($connection,md5($_POST['cfmpassword']));

$profile_name = $_FILES['profile']['name'];

$account_no = rand(0,999999);
if ($password==$cfmpassword) {

$query = "SELECT phone FROM user_info WHERE phone='$number'";
$result = mysqli_query($connection,$query) or die("Select Query faild");
$count = mysqli_num_rows($result);
	if ($count > 0) {
		header("location: add_user.php?error");
	}else {
		//profile
				if (!empty($profile_name)) {
				$profile_tmpName = $_FILES['profile']['tmp_name'];
				$profile_size = $_FILES['profile']['size'];
				$location = "../image/";
				//for img size
				if ($profile_size < 2000000) {
				$img_change_name = "TOUFIK".rand(0,999999).".jpg";
				move_uploaded_file($profile_tmpName,$location."$img_change_name");
			}else {
				$img_change_name = "admin_image.jpg";
			}
				}else {
					$img_change_name = "admin_image.jpg";
				}
		//profile
		$query1 = "INSERT INTO user_info (full_name,email,phone,gender,country,division,district,upzila,union_name,village,account_no,post_code,password,profile) VALUE ('$fullname','$email','$number','$gander','$country','$divition','$district','$upzila','$union','$village',$account_no,'$post_code','$password','$img_change_name')";
		$result1 = mysqli_query($connection,$query1) or die("Insert Query faild");
		if ($result1) {
			header("location:user_registration.php?sucsess");
		}
	}
}else {
	header("location: add_user.php?error1");
}
}
}else {
  header('location:user_registration.php?error');
}
 ?>
