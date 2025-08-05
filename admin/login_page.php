<?php
if (isset($_SESSION['full_name'])) {
  header('location: index.php');
}

if (isset($_POST['login'])) {
  include("db_conn.php");
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $password = mysqli_real_escape_string($connection,md5($_POST['password']));

  $query = "SELECT id,full_name,email,phone,password,member_info FROM admin_info WHERE (email='$email' OR phone='$email' OR account_no='$email') AND password='$password'";
  $result = mysqli_query($connection,$query) or die("Query Faild");

  if (mysqli_num_rows($result) >0) {
    while ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['id'] = $row['id'];
      $_SESSION['full_name'] = $row['full_name'];
      $_SESSION['phone'] = $row['phone'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['member_info'] = $row['member_info'];
      $_SESSION['name'] = $row['name'];

      header('location: index.php');
    }
  }else {
    header('location:login.php?error');
  }
}
?>
