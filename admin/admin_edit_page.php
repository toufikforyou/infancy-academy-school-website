<?php
session_start();
if (isset($_POST['update'])) {
	include("db_conn.php");
$id =	mysqli_real_escape_string($connection,$_POST['id']);
$fullname =	mysqli_real_escape_string($connection,$_POST['fullname']);
$email =	mysqli_real_escape_string($connection,$_POST['email']);
$number =	mysqli_real_escape_string($connection,$_POST['number']);
$gander =	mysqli_real_escape_string($connection,$_POST['gander']);
$country =	mysqli_real_escape_string($connection,$_POST['country']);
$divition =	mysqli_real_escape_string($connection,$_POST['divition']);
$district =	mysqli_real_escape_string($connection,$_POST['district']);
$upzila =	mysqli_real_escape_string($connection,$_POST['upzila']);
$union =	mysqli_real_escape_string($connection,$_POST['union']);
$village =	mysqli_real_escape_string($connection,$_POST['village']);
$post_code =	mysqli_real_escape_string($connection,$_POST['post_code']);
	$profile_name = $_FILES['profile']['name'];
$name = $_SESSION['full_name'];
$query = "SELECT phone FROM admin_info WHERE phone='$number'";
$result = mysqli_query($connection,$query) or die("Select Query faild");
$count = mysqli_num_rows($result);
	if ($count > 0) {
		//profile
		if (!empty($profile_name)) {
		$profile_tmpName = $_FILES['profile']['tmp_name'];
		$profile_size = $_FILES['profile']['size'];
		$location = "image/";
		//for img size
		if ($profile_size < 2000000) {
		$img_change_name = "TOUFIK".rand(0,999999).".jpg";
		move_uploaded_file($profile_tmpName,$location."$img_change_name");
		}else {
			$query3 = "SELECT profile FROM admin_info WHERE id='$id'";
			$result3 = mysqli_query($connection,$query3) or die("Img Query Not Action");
			$count = mysqli_num_rows($result3);
			$row = mysqli_fetch_assoc($result3);
		$img_change_name = $row['profile'];
		}
		}else {
			$query3 = "SELECT profile FROM admin_info WHERE id='$id'";
			$result3 = mysqli_query($connection,$query3) or die("Img Query Not Action");
			$count = mysqli_num_rows($result3);
			$row = mysqli_fetch_assoc($result3);
		$img_change_name = $row['profile'];
		}
		//profile

		$query1 = "UPDATE admin_info SET full_name='$fullname',email='$email',phone='$number',gender='$gander',country='$country',division='$divition',district='$district',upzila='$upzila',union_name='$union',village='$village',post_code='$post_code',name='$name',profile='$img_change_name' WHERE id='$id'";
		$result1 = mysqli_query($connection,$query1) or die("Select Query faild");

		if ($result1) {
			header('location: admin_profile.php?sucsess2');
		}
}else {
header('location: admin_edit_account.php?error2');
}
}
?>
