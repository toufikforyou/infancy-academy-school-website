<?php
session_start();
if ($_SESSION['member_info'] == 'Admin') {
include("db_conn.php");
$id = $_REQUEST['id'];
echo $img = $_REQUEST['img'];
$query = "DELETE FROM post_info WHERE id = '$id'";
$result = mysqli_query($connection,$query);
if ($result) {
  unlink("../post_img/$img");
  header('location:post_page.php?sucsess1');
}else {
  header('location:post_page.php?error1');
}
}else {
  header('location:post_page.php?error2');
}

?>
