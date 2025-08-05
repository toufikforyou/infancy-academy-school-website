<?php
session_start();
  if (isset($_SESSION['member_info'])) {
    $role = $_SESSION['member_info'];
    $name = $_SESSION['full_name'];
  }
if (isset($_POST['public'])) {
  include("db_conn.php");
  $title = mysqli_real_escape_string($connection,$_POST['title']);
  $option = mysqli_real_escape_string($connection,$_POST['opsion']);
  $post = mysqli_real_escape_string($connection,$_POST['post']);

  $profile_name = $_FILES['post_img']['name'];

  if ($title) {
    if (!empty($profile_name)) {
    $profile_tmpName = $_FILES['post_img']['tmp_name'];
    $profile_size = $_FILES['post_img']['size'];
    $location = "../post_img/";
    if ($profile_size < 2000000) {
    $img_change_name = "TOUFIK".rand(0,999999).".jpg";
    move_uploaded_file($profile_tmpName,$location."$img_change_name");
  }else {
    header('location:post_page.php?error');
  }
    }
  $query = "INSERT INTO post_info (post_title,post_catagori,post,name,role,image) VALUE('$title','$option','$post','$name','$role','$img_change_name')";
  $result = mysqli_query($connection,$query);

if ($result >0) {
  header('location:post_page.php?sucsess');
}else {
  header('location:post_page.php?error');
}
}else {
  header('location:post_website.php?error');
}
}
?>
