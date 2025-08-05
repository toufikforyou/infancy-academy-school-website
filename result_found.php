<?php
session_start();
  include("db_conn.php");
if (isset($_POST['result_search'])) {
  $exam = mysqli_real_escape_string($connection,$_POST['exam']);
  $class = mysqli_real_escape_string($connection,$_POST['class']);
  $year = mysqli_real_escape_string($connection,$_POST['year']);
  $rollnum = mysqli_real_escape_string($connection,$_POST['roll_number']);

    $query = "SELECT id,student_id,student_roll,class,mobail_number FROM infancystudent WHERE ((student_roll='$rollnum' OR student_id='$rollnum') AND class='$class')";
    $result = mysqli_query($connection,$query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['class'] = $row['class'];
        $student_id = $_SESSION['student_id'] = $row['student_id'];
        $student_roll = $_SESSION['student_roll'] = $row['student_roll'];
      }

    }else {
      header("location: online_result.php?error");
    }
  if ($year==2017) {
    $query1 = "SELECT id,exam,year,student_id FROM result2017 WHERE (exam='$exam' AND year='$year' AND student_id='$student_id')";
    $result1 = mysqli_query($connection,$query1) or die("Query Error of Result");
    $count1 = mysqli_num_rows($result1);
    if ($count1 > 0) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $_SESSION['exam'] = $row1['exam'];
        $_SESSION['year'] = $row1['year'];
      }
        header("location: result.php");
    }else {
      header("location: online_result.php?error");
    }
  }elseif ($year==2018) {
    $query1 = "SELECT id,exam,year,student_id FROM result2018 WHERE (exam='$exam' AND year='$year' AND student_id='$student_id')";
    $result1 = mysqli_query($connection,$query1) or die("Query Error of Result");
    $count1 = mysqli_num_rows($result1);
    if ($count1 > 0) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $_SESSION['exam'] = $row1['exam'];
        $_SESSION['year'] = $row1['year'];
      }
        header("location: result.php");
    }else {
      header("location: online_result.php?error");
    }
  }elseif ($year==2019) {
    $query1 = "SELECT id,exam,year,student_id FROM result2019 WHERE (exam='$exam' AND year='$year' AND student_id='$student_id')";
    $result1 = mysqli_query($connection,$query1) or die("Query Error of Result");
    $count1 = mysqli_num_rows($result1);
    if ($count1 > 0) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $_SESSION['exam'] = $row1['exam'];
        $_SESSION['year'] = $row1['year'];
      }
        header("location: result.php");
    }else {
      header("location: online_result.php?error");
    }
  }elseif ($year==2020) {
    $query1 = "SELECT id,exam,year,student_id FROM result WHERE (exam='$exam' AND year='$year' AND student_id='$student_id')";
    $result1 = mysqli_query($connection,$query1) or die("Query Error of Result");
    $count1 = mysqli_num_rows($result1);
    if ($count1 > 0) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $_SESSION['exam'] = $row1['exam'];
        $_SESSION['year'] = $row1['year'];
      }
        header("location: result.php");
    }else {
      header("location: online_result.php?error");
    }
  }elseif ($year==2021) {
    $query1 = "SELECT id,exam,year,student_id FROM result2021 WHERE (exam='$exam' AND year='$year' AND student_id='$student_id')";
    $result1 = mysqli_query($connection,$query1) or die("Query Error of Result");
    $count1 = mysqli_num_rows($result1);
    if ($count1 > 0) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $_SESSION['exam'] = $row1['exam'];
        $_SESSION['year'] = $row1['year'];
      }
        header("location: result.php");
    }else {
      header("location: online_result.php?error");
    }
  }else {
    header("location: online_result.php?error");
  }
}
?>
