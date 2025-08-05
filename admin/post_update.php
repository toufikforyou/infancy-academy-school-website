<?php
session_start();
  if (isset($_SESSION['member_info'])) {
    $role = $_SESSION['member_info'];
    $name = $_SESSION['full_name'];
  }
 $id = $_REQUEST['id'];
 $img = $_REQUEST['img'];
if (isset($_POST['public'])) {
  include("db_conn.php");
  $title = mysqli_real_escape_string($connection,$_POST['title']);
  $option = mysqli_real_escape_string($connection,$_POST['opsion']);
  $post = mysqli_real_escape_string($connection,$_POST['post']);
$profile_name = $_FILES['post_img']['name'];

if ($title) {
  if (!empty($profile_name)) {
      unlink("../post_img/$img");
  $profile_tmpName = $_FILES['post_img']['tmp_name'];
  $profile_size = $_FILES['post_img']['size'];
  $location = "../post_img/";
  if ($profile_size < 2000000) {
  $img_change_name = "TOUFIK".rand(0,999999).".jpg";
  move_uploaded_file($profile_tmpName,$location."$img_change_name");
}else {
  $query3 = "SELECT image FROM post_info WHERE id='$id'";
  $result3 = mysqli_query($connection,$query3) or die("Img Query Not Action");
  $count = mysqli_num_rows($result3);
  $row = mysqli_fetch_assoc($result3);
  $img_change_name = $row['image'];
}
  }else {
    $query3 = "SELECT image FROM post_info WHERE id='$id'";
    $result3 = mysqli_query($connection,$query3) or die("Img Query Not Action");
    $count = mysqli_num_rows($result3);
    $row = mysqli_fetch_assoc($result3);
    $img_change_name = $row['image'];
  }
  $query = "UPDATE post_info SET post_title='$title',post_catagori='$option',post='$post',role='$role',name='$name',image='$img_change_name' WHERE id='$id'";
  $result = mysqli_query($connection,$query) or die("Select Query faild");

  if ($result) {
    header('location:post_page.php?sucsess2');
  }else {
    header('location:post_page.php?error3');
  }

}else {
    header('location:post_website.php?error');
}
}
?>
