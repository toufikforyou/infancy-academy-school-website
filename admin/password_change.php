<?php
session_start();
$id = $_SESSION['id'];
if (isset($_POST['change_password'])) {
  include("db_conn.php");

$old_password = mysqli_real_escape_string($connection,md5($_POST['old_password']));
$new_password = mysqli_real_escape_string($connection,md5($_POST['new_password']));
$cfn_password = mysqli_real_escape_string($connection,md5($_POST['cfn_password']));

if ($new_password==$cfn_password) {
  //SELECT * FROM `admin_info` WHERE 1
  $query = "SELECT * FROM admin_info WHERE password='$old_password'";
  $result = mysqli_query($connection,$query) or die("Select Query faild");
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $query1 = "UPDATE admin_info SET password='$new_password' WHERE id='$id'";
    $result1 = mysqli_query($connection,$query1) or die("Insert Query faild");
    if ($result1) {
      header("location:change_password.php?sucsess");
    }


}else {
header("location:change_password.php?error");

}




}else {
  header("location:change_password.php?error1");
}
}
?>
