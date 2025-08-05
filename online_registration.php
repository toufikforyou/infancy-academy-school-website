<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
  </head>
  <body onload="myFunsion()">
    <div id="lodding"></div>
<header id="frist_section">
      <div class="container">
        <div class="header_top">
          <nav class="navbar navbar-expand-lg pca-navbar">
            <div class="logo">
              <a href="index.php">
              <img src="ias_image/logo.png" alt="Infancy Logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">প্রথম পাতা</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="new_student.php">অনলাইন ভর্তি</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="online_result.php">অনলাইন রেজাল্ট</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">নোটিশ বোর্ড</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown">শিক্ষার্থীর তথ্য</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item dropdown-hover" href="#">শিক্ষার্থীর তালিকা</a>
                    <a class="dropdown-item dropdown-hover" href="student_registration.php">শিক্ষার্থী রেজিষ্টেশন</a>
                    <a class="dropdown-item dropdown-hover" href="student_login.php">শিক্ষার্থী লগইন</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown">শিক্ষকের তথ্য</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item dropdown-hover" href="#">শিক্ষকের তালিকা</a>
                    <a class="dropdown-item dropdown-hover" href="teacher_registration.php">শিক্ষক রেজিষ্টেশন</a>
                    <a class="dropdown-item dropdown-hover" href="teacher_login.php">শিক্ষক লগইন</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_academy.php">যোগাযোগ</a>
              </li>
            </ul>
          </div>
          </nav>
        </div>
    </div>
</header>
<section id="online_result_section">
  <div class="container">
    <div class="online_result card-header shadow-lg p-3 mb-5 bg-white rounded">
      <div class="online_result_header">
        <h3>ইনফ্যান্সি একাডেমি স্কুলের নতুন শিক্ষার্থী ভর্তি ফরম</h3>
        <span>যে যে শ্রেনিতে ভর্তি হতে পারবে, প্লে/নার্সারী/প্রথম/দ্বিতীয়/তৃতীয়/চতুর্থ/পঞ্চম</span>
      </div>
      <hr>
      <div class="found_result_header">
        <span id="input-small">আপনার ছেলে-মেয়ের সঠিক তথ্য দিয়ে এই ফর্মটি সাবমিট করুন। লক্ষনীয় ১০ মিনিটের বেশি সময় লাগানো যাবে না।</span>
        <hr>
<?php
if (isset($_REQUEST['error'])) { ?>
  <div class="error">
        <span style="color: red !important;" id="input-small"><?php echo "এই মোবাইল দিয়ে একজন শিক্ষার্থী রেজিষ্টেশন করেছে। অন্য ভাবে চেষ্টা করুন।"; ?></span>
  </div>
<?php } ?>
      <div class="found_result">
        <form action="new_student_registration.php" method="post" enctype='multipart/form-data'>
          <div class="form-group">
            <input name="student_bangla" id="input-reg" type="full_name" class="form-control" placeholder="ছাত্র-ছাত্রীর পুরো নাম বাংলায় লিখুন" required>
            <small id="input-small" class="form-text text-muted">লক্ষনীয়ঃ জন্ম নিবন্ধন অনুসারে ছাত্র-ছাত্রীর পুরো নাম বাংলায় লিখুন</small>
          </div>
          <div class="form-group">
            <input name="student_english" style="text-transform :uppercase;" id="input-reg" type="full_name" class="form-control" placeholder="ছাত্র-ছাত্রীর পুরো নাম ইংরেজিতে লিখুন" required>
            <small id="input-small" class="form-text text-muted">লক্ষনীয়ঃ জন্ম নিবন্ধন অনুসারে ছাত্র-ছাত্রীর পুরো নাম ইংরেজিতে লিখুন</small>
          </div>
          <div style="margin-left: 30px;margin-bottom: 10px;">
          <div class="form-check form-check-inline">
            <input name="gander" checked class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ছেলে">
            <label class="form-check-label" for="inlineRadio1">ছেলে</label>
          </div>
          <div class="form-check form-check-inline">
            <input name="gander" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="মেয়ে">
            <label class="form-check-label" for="inlineRadio2">মেয়ে</label>
          </div>
          <div class="form-check form-check-inline">
            <input name="gander" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="অন্যন্য">
            <label class="form-check-label" for="inlineRadio3">অন্যন্য</label>
          </div>
        </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="father_name_bangla" id="input-reg" type="father_name" class="form-control" placeholder="পিতার নাম বাংলাতে" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: পিতার আইডি কার্ড অনুসারে</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="mother_name_bangla" id="input-reg" type="mother_name" class="form-control" placeholder="মাতার নাম বাংলাতে" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: মাতার আইডি কার্ড অনুসারে</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="father_name_english" id="input-reg" type="father_name" style="text-transform :uppercase;" class="form-control" placeholder="পিতার নাম ইংরেজিতে" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: পিতার আইডি কার্ড অনুসারে</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="mother_name_english" id="input-reg" type="mother_name" style="text-transform :uppercase;" class="form-control" placeholder="মাতার নাম ইংরেজিতে" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: মাতার আইডি কার্ড অনুসারে</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" name="divition" id="divisions" onchange="division_list();" required>
               	 	<option id="input-reg" disabled selected>Select Division</option>
               	 	<option id="input-reg" value="Barishal">Barishal</option>
               	 	<option id="input-reg" value="Chattogram">Chattogram</option>
               	 	<option id="input-reg" value="Dhaka">Dhaka</option>
               	 	<option id="input-reg" value="Khulna">Khulna</option>
               	 	<option id="input-reg" value="Mymensingh">Mymensingh</option>
               	 	<option id="input-reg" value="Rajshahi">Rajshahi</option>
               	 	<option id="input-reg" value="Rangpur">Rangpur</option>
               	 	<option id="input-reg" value="Sylhet">Sylhet</option>
               	 </select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর বিভাগ নির্বচন করুন</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" name="zilla" id="distr" onchange="zilaList();" required></select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর জেলা নির্বচন করুন</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" name="upzilla" id="polic_sta" onchange="upzilaList();" required></select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর উপজেলা নির্বচন করুন</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <select class="form-control" name="union" id="union_list" onchange="unionList();" required></select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর ইউনিয়ন নির্বচন করুন</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" name="village_db" id="village_list" onchange="village_List()" required></select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর গ্রাম নির্বচন করুন</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" id="villageInput" style="visibility: hidden;">
                <input style="text-transform: uppercase;" name="village_name" id="input-reg" type="village" class="form-control" placeholder="গ্রামের নাম">
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: গ্রামের নাম ইংরেজিতে লিখুন</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="post_code" id="input-reg" type="number" class="form-control" placeholder="পোষ্ট কোড" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর পিতা মাতার আইডি কার্ড অনুসারে পোষ্ট কোড</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="mobail" id="input-reg" type="number" class="form-control" placeholder="অভিভাবকের মোবাইল নাম্বার" required>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর অভিভাবকের মোবাইল নাম্বার</small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <label id="input-reg">ছাত্র-ছাত্রীর জন্ম তারিখ</label>
                <input name="date_birth" id="input-reg" type="date" class="form-control" id="inputBirthDay">
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: ছাত্র-ছাত্রীর জন্ম নিবন্ধন অনুসারে জন্ম তারিখ</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="input-reg">যে শ্রেণিতে ভর্তি হতে ইচ্ছুক</label>
                <select style="text-transform: uppercase;" name="class" id="input-reg" class="form-control" required>
               	 	<option disabled selected>শ্রেণি বাছাই করুন</option>
               	 	<option value="PLAY">প্লে</option>
               	 	<option value="NERSARY">নার্সারী</option>
               	 	<option value="ONE">প্রথম</option>
               	 	<option value="TWO">দ্বিতীয়</option>
               	 	<option value="THREE">তৃতীয়</option>
               	 	<option value="FOUR">চতুর্থ</option>
               	 	<option value="FIVE">পঞ্চম</option>
               	 </select>
                <small id="input-small" class="form-text text-muted">লক্ষনীয়: যে শ্রেণিতে ভর্তি হতে চাও</small>
              </div>
            </div>
            <div class="col-md-6">
              <input name="image" class="form-control" type="file" id="formFile">
              <small id="input-small" class="form-text text-muted">ছাত্র/ছাত্রীর ছবি বাছুন</small>
            </div>
          </div>
            <button name="registration" type="submit" class="btn btn-primary form-control select_option rocket_icon"><i class="fas fa-paper-plane result_icon"></i> সাবমিট করুন</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</section>
<footer class="page-footer font-small pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-4 pb-4">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4">
        <h4 class="text-uppercase mb-4 font-weight-300">ইনফ্যান্সি একাডেমি স্কুল</h4>
        <p style="text-align: justify;">
          ইনফ্যান্সি একাডেমি স্কুল ২০১৭ সালে প্রথম চালু হয়। আর তারই পরপেক্ষিতে ২০২১ সালে এই পতিষ্ঠানের একটি ওয়েবসাইট তৈরি করেন প্রধান শিক্ষক এই পতিষ্ঠানের। আর শিক্ষার্থীদের বেতন নিচের সকল পেমেন্ট মেথর্ড এর মাধ্যমে পরিশোধ করতে পাবে।<br/>ধন্যবাদ আমাদের সাথে থাকার জন্য।
        </p>
          <div class="pryment">
            <img style="border-radius: 5px;" src="ias_image/pryment.png" alt="Infancy Academy School">
          </div>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-4">
        <h6 class="text-uppercase mb-4 font-weight-500">ওয়েব ডিজাইন এবং ডেভেলপারের তথ্য</h6>
        <p>
          <a style="color: white; text-decoration: none;" href="https://freelancertoufik.com" target="_blank">ফ্রিলান্সার তৌফিক</a>
        </p>
        <p>
          <a style="color: white; text-decoration: none;" href="https://facebook.com/toufik080" target="_blank">ফেজবুকে তৌফিক</a>
        </p>
        <p>
          <a style="color: white; text-decoration: none;" href="https://facebook.com/freelancertoufik" target="_blank">তৌফিক প্রোফেশোনাল পেজ</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4">
        <h6 class="text-uppercase mb-4 font-weight-400">যোগাযোগ</h6>
        <p>
          <i class="fas fa-map-marker-alt mr-3"></i> পারুলকান্দি, কাজিপুর, সিরাজগঞ্জ।
        </p>
        <p>
          <i class="fas fa-envelope mr-3"></i><a style="color: white; text-decoration: none;" href="mailto: infancyacademyschool@gmail.com">infancyacademyschool@gmail.com</a>
        </p>
        <p>
          <i class="fas fa-phone mr-3"></i><a style="color: white; text-decoration: none;" href="tel: +8801722657152">০১৭২২-৬৫৭১৫২</a>
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.5815837204314!2d89.5606799143168!3d24.70690625748096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdbbc5ff17c3e7%3A0x8d447c49306b31e1!2sINFANCY%20ACADEMY%20SCHOOL%20PARULKANDI!5e0!3m2!1sen!2sbd!4v1607451710611!5m2!1sen!2sbd" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">
        <!--Copyright-->
        <p class="text-center text-md-left">© ২০২১ কপিরাইট:
          <a style="color: #44ff98; text-decoration: none;" href="https://infancyacademyschool.com" target="_blank">ইনফ্যান্সি একাডেমি স্কুল।।</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="https://facebook.com/infancyacademyschool" style="color: white; text-decoration: none; border: 1px solid; border-radius: 10px;" class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/infancyacademyschool" style="color: white; text-decoration: none; border: 1px solid; border-radius: 10px;" class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://youtube.com/infancyacademyschool" style="color: white; text-decoration: none; border: 1px solid; border-radius: 10px;" class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://linkedin.com/infancyacademyschool" style="color: white; text-decoration: none; border: 1px solid; border-radius: 10px;" class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script src="js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
