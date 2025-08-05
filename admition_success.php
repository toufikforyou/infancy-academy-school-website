<?php

session_start();
include("db_conn.php");
if (isset($_POST['found_student'])) {
  $mobile = mysqli_real_escape_string($connection,$_POST['mobail_number']);

  $query_show = "SELECT * FROM infancystudent WHERE mobail_number='$mobile'";
  $result_show = mysqli_query($connection,$query_show) or die("Query Show Error");
  $count_show = mysqli_num_rows($result_show);
    if ($count_show) {
      $row = mysqli_fetch_assoc($result_show);
      $_SESSION['id'] = $row['id'];
      $_SESSION['mobail_number'] = $row['mobail_number'];
      header("location: registration_sucsessful.php");
  }else {
    header("location: index.php?error=$mobile");
  }
}else {
  header("location: index.php");
}








?>
