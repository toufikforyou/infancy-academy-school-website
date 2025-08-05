<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('location:otp.php');
}
  include("db_conn.php");
if (isset($_POST['setup'])) {
  $id = $_SESSION['id'];
  $password = mysqli_real_escape_string($connection,md5($_POST['password']));
  $cfmpassword = mysqli_real_escape_string($connection,md5($_POST['cfmpassword']));
if ($password==$cfmpassword) {
  $query = "SELECT password FROM admin_info WHERE id='$id'";
  $result = mysqli_query($connection,$query) or die("Select Query faild");
  $count = mysqli_num_rows($result);
  if ($count >0) {
    $query1 = "UPDATE admin_info SET password='$password' WHERE id='$id'";
    $result1 = mysqli_query($connection,$query1) or die("Insert Query faild");
    if ($result1) {
      header("location:login.php?sucsess_otp");
      session_unset();
      session_destroy();
      die();
    }else {
      echo "Amar Sonar Bangla";
    }
}
}else {
  header('location:password_set.php?error');
}

}else {
  session_unset();
  session_destroy();
  die();
  header("Location: login.php");
}
?>
