<?php
session_start();
if ($_SESSION['member_info'] == 'Admin') {
include("db_conn.php");
$id = $_REQUEST['id'];
$img = $_REQUEST['img'];
$query = "DELETE FROM admin_info WHERE id = '$id'";
$result = mysqli_query($connection,$query);
if ($result) {
  unlink("image/$img");
  header('location:admin_registration.php?sucsess1');
}else {
  header('location:admin_registration.php?error');
}
}else {
  header('location:admin_registration.php?error');
}

?>
