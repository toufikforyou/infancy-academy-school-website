<?php
session_start();
if (isset($_POST['search_again'])) {
   session_unset();
   session_destroy();
   header('location: online_result.php');
   die();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Infancy Academy School Found Result Page</title>
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <!-- <div id="lodding"></div> -->

  <?php
  if (!isset($_SESSION['student_id'])) {
    header("location: online_result.php");
  }else {
    include("db_conn.php");
    $student_id = $_SESSION['student_id'];
    $query = "SELECT * FROM infancystudent WHERE student_id='$student_id'";
    $result = mysqli_query($connection,$query);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
  ?>

<section id="found_result_section">
  <div class="container">
    <div class="col-md-12 text-right mb-3">
      <form style="float: right; padding-left: 10px;" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button name="search_again" class="btn btn-info">Search Again</button>
      </form>
      <button class="btn btn-success" id="download">Save</button>
        <!-- <button type="button" class="btn btn-info" id="printbtn" onclick="window.print();">Print</button> -->
    </div>
    <div id="invoice">
    <div class="online_result card-header shadow-lg p-3 mb-5 bg-white rounded">
      <div class="online_result_header">
        <h3>ইনফ্যান্সি একাডেমি স্কুলের শিক্ষার্থীর রেজাল্ট</h3>
        <span>প্লে/নার্সারী/প্রথম/দ্বিতীয়/তৃতীয়/চতুর্থ/পঞ্চম শ্রেণির রেজাল্ট দেখুন</span>
      </div>
      <hr>
      <div class="found_result_header">
        <h4>
<?php
if ($row['class']=='PLAY') {
  echo "প্লে";
}elseif ($row['class']=='NERSARY') {
  echo "নার্সারী";
}elseif ($row['class']=='ONE') {
  echo "প্রথম";
}elseif ($row['class']=='TWO') {
  echo "দ্বিতীয়";
}elseif ($row['class']=='THREE') {
  echo "তৃতীয়";
}elseif ($row['class']=='FOUR') {
  echo "চতুর্থ";
}elseif ($row['class']=='FIVE') {
  echo "পঞ্চম";
}else {
  echo "কোন";
}
?> শ্রেণির পরীক্ষার ফলাফল -
<?php
if ($_SESSION['year']=='2017') {
  echo "২০১৭";
}elseif ($_SESSION['year']=='2018') {
  echo "২০১৮";
}elseif ($_SESSION['year']=='2019') {
  echo "২০১৯";
}elseif ($_SESSION['year']=='2020') {
  echo "২০২০";
}elseif ($_SESSION['year']=='2021') {
  echo "২০২১";
}
?>
</h4>
        <h5 style="text-align: center;">
<?php
  if ($_SESSION['exam']=='Fast_exam') {
    echo "প্রথম সাময়িক";
  }elseif ($_SESSION['exam']=='Secound_exam') {
    echo "দ্বিতীয় সাময়িক";
  }elseif ($_SESSION['exam']=='Thard_exam') {
    echo "তৃতীয় সাময়িক";
  }elseif ($_SESSION['exam']=='Anual_exam') {
    echo "বার্ষিক";
  }
?> পরীক্ষা</h5>
        <hr>
      <div class="found_result">
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tr>
            <td>রোল নাম্বার</td>
            <td><?php echo $row['student_roll']; ?></td>
            <td>স্টুডেন্ট আইডি</td>
            <td style="color:red;font-weight:bold;"><?php echo $row['student_id']; ?></td>
          </tr>
          <tr>
            <td>শিক্ষার্থীর নাম</td>
            <td colspan="3"><?php echo $row['student_bangla']; ?></td>
          </tr>
          <tr>
            <td>পিতার নাম</td>
            <td colspan="3"><?php echo $row['father_bangla']; ?></td>
          </tr>
          <tr>
            <td>মাতার নাম</td>
            <td colspan="2"><?php echo $row['mother_bangla']; ?></td>
            <td colspan="1">0<?php echo $row['mobail_number']; ?></td>
          </tr>
          <tr>
            <td>বোর্ড</td>
            <td><?php echo $row['divition'];?></td>
            <td>জন্ম তারিখ</td>
            <td style="color:red;font-weight:bold;"><?php echo $row['death_birth'];?></td>
            <?php
            if (isset($_REQUEST['error'])) { ?>
            <td colspan="4">
              <div class="error">
                <span><?php echo "Result Not Found."; ?></span>
              </div>
            </td>
            <?php
            }
            ?>
          </tr>
  <?php
  }
$student_id = $_SESSION['student_id'];
  $query_mark = "SELECT * FROM result WHERE student_id='$student_id'";
  $result_mark = mysqli_query($connection,$query_mark);
  $count_mark = mysqli_num_rows($result_mark);
  if ($count_mark > 0) {
  while ($row = mysqli_fetch_assoc($result_mark)) {

    $bangla = $row['bangla_number'];
    $english = $row['english_number'];
    $math = $row['math_number'];
    $bgs = $row['bgs_number'];
    $islam = $row['islam_number'];
    $scince = $row['scince_number'];
    $total_marks = $bangla + $english + $math + $bgs + $islam + $scince;
if ($total_marks!==0) {
    //$total_gpa = $gpa5+$gpa4+$gp3_5+$gpa3+$gpa2+$gpa1+0.00;
    //$GPA_5 = $total_gpa/6;
   ?>
          <tr>
            <td>রেজাল্ট</td>
            <td style="color: green; font-weight: 600;" ><?php echo "Pass"; ?></td>
            <td>ভর্তির তারিখ</td>
            <td>
<?php
echo $row['date'];
?>
            </td>
          </tr>
        </table>
      </div>
        <h4>বিষয় অনুসারে গ্রেড / নম্বর</h4>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tr>
            <th scope="row">সিরিয়াল</td>
            <th>বিষয়</td>
            <th>নম্বর</td>
            <th>গ্রেড</td>
          </tr>
          <tr>
            <td scope="row">০১</td>
            <td><?php echo $row['bangla'];?></td>
            <td><?php echo $row['bangla_number'];?></td>
            <td>
  <?php
  $bangla_marks = $row['bangla_number'];
  if ($bangla_marks>=80) {
    echo "A+";
  }elseif ($bangla_marks>=70) {
    echo "A";
  }elseif ($bangla_marks>=60) {
    echo "A-";
  }elseif ($bangla_marks>=50) {
    echo "B";
  }elseif ($bangla_marks>=40) {
    echo "C";
  }elseif ($bangla_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>          </td>
          </tr>
          <tr>
            <td scope="row">০২</td>
            <td><?php echo $row['english'];?></td>
            <td><?php echo $row['english_number'];?></td>
            <td>
  <?php
  $english_marks = $row['english_number'];
  if ($english_marks>=80) {
    echo "A+";
  }elseif ($english_marks>=70) {
    echo "A";
  }elseif ($english_marks>=60) {
    echo "A-";
  }elseif ($english_marks>=50) {
    echo "B";
  }elseif ($english_marks>=40) {
    echo "C";
  }elseif ($english_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>
            </td>
          </tr>
          <tr>
            <td scope="row">০৩</td>
            <td><?php echo $row['math'];?></td>
            <td><?php echo $row['math_number'];?></td>
            <td>
  <?php
  $math_marks = $row['math_number'];
  if ($math_marks>=80) {
    echo "A+";
  }elseif ($math_marks>=70) {
    echo "A";
  }elseif ($math_marks>=60) {
    echo "A-";
  }elseif ($math_marks>=50) {
    echo "B";
  }elseif ($math_marks>=40) {
    echo "C";
  }elseif ($math_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>
            </td>
          </tr>
          <tr>
            <td scope="row">০৪</td>
            <td><?php echo $row['bgs'];?></td>
            <td><?php echo $row['bgs_number'];?></td>
            <td>
  <?php
  $bgs_marks = $row['bgs_number'];
  if ($bgs_marks>=80) {
    echo "A+";
  }elseif ($bgs_marks>=70) {
    echo "A";
  }elseif ($bgs_marks>=60) {
    echo "A-";
  }elseif ($bgs_marks>=50) {
    echo "B";
  }elseif ($bgs_marks>=40) {
    echo "C";
  }elseif ($bgs_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>
            </td>
          </tr>
          <tr>
            <td scope="row">০৫</td>
            <td><?php echo $row['islam'];?></td>
            <td><?php echo $row['islam_number'];?></td>
            <td>
  <?php
  $islam_marks = $row['islam_number'];
  if ($islam_marks>=80) {
    echo "A+";
  }elseif ($islam_marks>=70) {
    echo "A";
  }elseif ($islam_marks>=60) {
    echo "A-";
  }elseif ($islam_marks>=50) {
    echo "B";
  }elseif ($islam_marks>=40) {
    echo "C";
  }elseif ($islam_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>
            </td>
          </tr>
          <tr>
            <td scope="row">০৬</td>
            <td><?php echo $row['scince'];?></td>
            <td><?php echo $row['scince_number'];?></td>
            <td>
  <?php
  $science_marks = $row['scince_number'];
  if ($science_marks>=80) {
    echo "A+";
  }elseif ($science_marks>=70) {
    echo "A";
  }elseif ($science_marks>=60) {
    echo "A-";
  }elseif ($science_marks>=50) {
    echo "B";
  }elseif ($science_marks>=40) {
    echo "C";
  }elseif ($science_marks>=33) {
    echo "D";
  }else {
    $fail = "F";
    echo $fail;
  }
  ?>
            </td>
          </tr>
          <tr style="background: #93dada; color: green; font-weight: 600;">
            <td colspan="2">সর্বমোট নাম্বার</td>
            <td colspan="2"><?php echo $total_marks; ?></td>
          </tr>
        </table>
      </div>
      </div>
      </div>
      <div class="found_result_futter">
        <span>যেকোন সমস্যা হলে হেল্পলাইন ০১৭২২-৬৫৭১৫২ প্রধান শিক্ষক ইনফ্যান্সি একাডেমি স্কুল।</span>
      </div>
      <div class="online_result_futter">
        <small class="url"><a href="https://freelancertoufik.com/" target="_blank">Web Development</a></small>
        <small class="by">Result Publish By <a href="https://infancyacademyschool.com/">Infancy Academy School</a></small>
        <small class="page">Page: 1/1</small>
      </div>
    </div>
  </div>
</section>
<?php
}else {
  header("location: online_result.php?error1");
}
}
}
}
?>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script src="js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
