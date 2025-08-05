<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Infancy Academy School New Student Registration</title>
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
session_start();
include("db_conn.php");
if (!isset($_SESSION['id'])) {
  header("location: index.php");
}else {
  $mobile = $_SESSION['mobail_number'];

  $query = "SELECT * FROM infancystudent WHERE mobail_number='$mobile'";
  $result = mysqli_query($connection,$query);
  $count = mysqli_num_rows($result);
  while ($row = mysqli_fetch_assoc($result)) {
?>
<section id="found_result_section">
  <div class="container">
    <div class="col-md-12 text-right mb-3">
      <a href="home.php" class="btn btn-info">Home</a>
        <!-- <button type="button" class="btn btn-info" id="printbtn" onclick="window.print();">Print</button> -->
    </div>
    <div id="invoice">
    <div class="online_result card-header shadow-lg p-3 mb-5 bg-white rounded">
      <div style="padding: 5px 0px 25px;" class="online_result_header">
        <img width="80" style="margin-right: -80px;float:left; margin-left:10px;" src="ias_image/school_logo.png" alt="School Logo">
        <h3>ইনফ্যান্সি একাডেমি স্কুলের শিক্ষার্থী রেজিষ্টেশন</h3>
        <span>প্লে/নার্সারী/প্রথম/দ্বিতীয়/তৃতীয়/চতুর্থ/পঞ্চম</span>
      </div>
      <hr>
      <div class="found_result_header">
        <h4>শিক্ষার্থীর তথ্য</h4>
        <hr>
      <div class="found_result">
    <div class="table-responsive">
        <table style="text-transform: uppercase;" class="table table-bordered">
          <tr>
            <td>শিক্ষার্থীর নাম বাংলতে</td>
            <td colspan="2"><?php echo $row['student_bangla']; ?></td>
            <td rowspan="2"><center>
              <img src="student_images/<?php echo $row['student_photo']; ?>" alt="Student Image"></center>
            </td>
          </tr>
          <tr>
            <td>শিক্ষার্থীর নাম ইংরেজিতে</td>
            <td colspan="2"><?php echo $row['student_english']; ?></td>
          </tr>
          <tr>
            <td>রোল নম্বর</td>
            <td style="font-weight: bold; color: red;"><?php echo $row['student_roll']; ?></td>
            <td>স্টুডেন্ট আইডি</td>
            <td style="font-weight: bold; color: red; text-align: center;"><?php echo $row['student_id']; ?></td>
          </tr>
          <tr>
            <td>লিঙ্গ</td>
            <td><?php echo $row['gender']; ?></td>
            <td>শ্রেণি</td>
            <td><?php echo $row['class']; ?></td>
          </tr>
          <tr>
            <td>পিতার নাম</td>
            <td><?php echo $row['father_bangla']; ?></td>
            <td>মাতার নাম</td>
            <td><?php echo $row['mother_bangla']; ?></td>
          </tr>
          <tr>
            <td>পিতার নাম</td>
            <td><?php echo $row['father_english']; ?></td>
            <td>মাতার নাম</td>
            <td><?php echo $row['mother_english']; ?></td>
          </tr>
          <tr>
            <td>বিভাগ</td>
            <td><?php echo $row['divition']; ?></td>
            <td>জেলা</td>
            <td><?php echo $row['zilla']; ?></td>
          </tr>
          <tr>
            <td>উপজেলা</td>
            <td><?php echo $row['upzila']; ?></td>
            <td>ইউনিয়ন</td>
            <td><?php echo $row['union_name']; ?></td>
          </tr>
          <tr>
            <td>গ্রাম</td>
            <td><?php echo $row['village_db']; ?></td>
            <td>গ্রামের নাম</td>
            <td><?php echo $row['village_name']; ?></td>
          </tr>
          <tr>
            <td>জন্মের তারিখ</td>
            <td><span style="font-weight: bold; color: red;"><?php echo $row['death_birth']; ?></span> (জন্ম নিবন্ধন অনুযায়ী)</td>
            <td>মোবাইল নম্বর</td>
            <td style="font-weight: bold; color: red;">0<?php echo $row['mobail_number']; ?></td>
          </tr>
          <tr>
            <td>পোষ্ট কোড</td>
            <td><?php echo $row['post_code']; ?></td>
            <td></td>
            <td></td>
          </tr>
        </table>
        </div>
      </div>
      </div>
      <div class="condition_registration">
        <ul>
          <ol class="student_white">শিক্ষার্থীর স্বাক্ষর ও তারিখ</ol>
          <ol class="ovivabok_white">অভিভাবকের স্বাক্ষর ও তারিখ</ol>
          <ol class="school_sel">প্রধান শিক্ষকের স্বাক্ষর ও সীল</ol>
        </ul>
      </div>
      <div class="found_result_futter">
        <span>এই ফর্মটি স্বাক্ষর করে বিদ্যালয়ে জমা দিতে হবে। পরবর্তীতে শিক্ষক শিক্ষার্থীর শ্রেণি রোল ঠিক করবেন।</span>
      </div>
      <div class="online_result_futter">
        <small class="url"><a href="https://freelancertoufik.com/" target="_blank">Web Developer</a></small>
        <small class="by">Registration Publish By <a href="https://infancyacademyschool.com/">Infancy Academy School</a></small>
        <small class="page">Page: 1/1</small>
      </div>
    </div>
  </div>
</section>
<?php
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
