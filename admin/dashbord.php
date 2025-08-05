<?php
session_start();
  if (!isset($_SESSION['full_name'])) {
    header('location:login.php');
  }
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <!-- This html header tags of menu, notification, profile, dropdown menu and other style html tags -->
  <header id="header_section">
    <a href="index.php">
      <!-- This div & image logo html tags -->
      <div class="logo">
        <img src="logo/TF'S_CLUB.png" alt="TF'S_CLUB"/>
      </div>
    </a>
    <!-- This div ul li menu html tags oparator -->
    <div class="menu">
      <ul>
<?php if ($_SESSION['member_info'] == 'Admin') { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <!-- This html div bell or notification icon of html tags -->
            <div class="bell">
              <i style="color: white; font-size: 18px;" class="fas fa-bell"></i>
              <span class="badge">4</span>
            </div>
          </a>
          <!-- This notification div is dropdown div of html tags -->
          <div style="top: 0px;" class="dropdown-menu dropdown-content notification">
            <!-- This notification div is dropdown heading div of html tags -->
            <div class="note_heading">
              <span>notification's</span>
            </div>
            <!-- This div is notification item of html tags -->
            <div class="note_details">
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>Ar ami akhan theke notification dekhte parbo & sob kisu controls korbo ami bari theke.</span>
                </div>
                <p>10-NOV-2020 01:50 AM</p>
              </div>
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>amar sonar bangla ati akti notification. Ar ami akhan theke notification dekhte parbo & sob kisu controls korbo ami bari theke.</span>
                </div>
                <p>10-NOV-2020 01:50 AM</p>
              </div>
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>notification dekhte parbo & sob kisu controls korbo ami bari theke.</span>
                 </div>
                 <p>10-NOV-2020 01:50 AM</p>
              </div>
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>amar sonar bangla ati akti notification.</span>
                </div>
                <p>10-NOV-2020 01:50 AM</p>
              </div>
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>amar sonar bangla ati akti notification. Ar ami akhan theke notification dekhte parbo & sob kisu controls korbo ami bari theke.</span>
                </div>
                <p>10-NOV-2020 01:50 AM</p>
              </div>
              <!-- This div is notification one item of html tags -->
              <div class="note_item">
                <div class="note_item_dts">
                  <i id="bell_batun" style="color: #ff5722;" class="far fa-bell"></i>
                  <span>amar sonar bangla ati akti notification. Ar ami akhan theke notification dekhte parbo & sob kisu controls korbo ami bari theke.</span>
                </div>
                <p>10-NOV-2020 01:50 AM</p>
              </div>
            </div>
          </div>
        </li>
<?php } ?>
        <!-- This li tags admin area dropdown of html tags -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="admin_area">
              <div class="drop_icon">
  <?php
  $id = $_SESSION['id'];
  include("db_conn.php");
  $query = "SELECT profile FROM admin_info WHERE id='$id'";
  $result = mysqli_query($connection,$query);
  $count = mysqli_num_rows($result);
  if ($count >0) {
    $row = mysqli_fetch_assoc($result);
   ?>
                <div class="admin_image">
                  <img style="height: 32px;" title="<?php echo $_SESSION['full_name']; ?>" id="dropdown" src="image/<?php echo $row['profile']; ?>" alt="<?php echo $_SESSION['full_name']; ?>"/>
                </div>
                <span id="dropdown1"><?php echo $_SESSION['full_name']; ?></span>
                <i id="dropdown2" style="margin-left: 2px; color: #00cd3a; font-size: 16px;" class="fas fa-check-circle"></i>
                <i id="dropdown3" style="color: white; margin-left: 10px; font-size: 18px;" class="fas fa-angle-down"></i>
              </div>
            </div>
          </a>
          <!-- This div is admin area dropdown menu of html tags -->
          <div class="dropdown-menu dropdown-content setting">
            <ul>
              <!-- This div is dropdown menu one item of html tags -->
              <a href="admin_profile.php">
              <li class="abcd" id="divider">
                  <i style="color: black;" class="fas fa-user-plus"></i>
                  <span>My Profail</span>
              </li>
              </a>
              <!-- This div is dropdown menu one item of html tags -->
              <a href="admin_edit_account.php">
              <li class="abcd">
                  <i class="fas fa-pencil-alt"></i>
                  <span>Edit Account</span>
              </li>
              </a>
              <!-- This div is dropdown menu one item of html tags -->
              <a href="change_password.php">
              <li class="abcd">
                  <i class="fas fa-key"></i>
                  <span>Change Password</span>
              </li>
              </a>
              <!-- This div is dropdown menu one item of html tags -->
              <a href="log_out.php">
              <li class="abcd">
                  <i class="fas fa-power-off"></i>
                  <span>Log Out</span>
              </li>
              </a>
            </ul>
          </div>
        </li>
        <!-- This li tags is sidebar_menu of html tags -->
        <li>
          <div class="sidebar_battun">
            <a href="#">
              <i style="color: white;" class="fas fa-align-justify"></i>
            </a>
            </div>
        </li>
      </ul>
    </div>
    <!-- This div tags in menu background control of html tags -->
    <div class="menu_bg"></div>
  </header>
  <!-- This section is sidebar menu & dashboard all control in html tags -->
  <section id="sidebar_dashboard">
    <!-- This section is sidebar menu control in html tags -->
    <section id="sidebar_menu_section">

      <div class="dropdown sidebar_admin">
        <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <div class="admin_image_bar">
          <img id="dropdown" src="image/<?php echo $row['profile']; ?>" alt="Admin Photo"/>
        </div>
  <?php } ?>
        <div class="sidebar_admin_drop">
          <span id="dropdown1"><?php echo $_SESSION['full_name']; ?></span>
          <i id="dropdown2" style="margin-left: 2px; color: #00cd3a; font-size: 16px;" class="fas fa-check-circle"></i>
          <i id="dropdown3" style="color: white; margin-left: 10px; font-size: 18px;" class="fas fa-angle-down"></i>
        </div>
        </div>



        <div class="dropdown-menu dropdown-content setting1">
          <ul>
            <!-- This div is dropdown menu one item of html tags -->
            <a href="admin_profile.php">
            <li class="abcd">
                <i style="color: black;" class="fas fa-user-plus"></i>
                <span>My Profail</span>
            </li>
            </a>
            <!-- This div is dropdown menu one item of html tags -->
            <a href="admin_edit_account.php">
            <li class="abcd">
                <i class="fas fa-pencil-alt"></i>
                <span>Edit Account</span>
            </li>
            </a>
            <!-- This div is dropdown menu one item of html tags -->
            <a href="change_password.php">
            <li class="abcd">
                <i class="fas fa-key"></i>
                <span>Change Password</span>
            </li>
            </a>
            <!-- This div is dropdown menu one item of html tags -->
            <a href="log_out.php">
            <li class="abcd">
                <i class="fas fa-power-off"></i>
                <span>Log Out</span>
            </li>
            </a>
          </ul>
        </div>
      </div>
      <div class="sidebar_menu">
        <ul>
          <!-- This li is li item head of html tags -->
          <li style="background: #e74c3c; padding: 10px 20px; text-transform: uppercase; color: white;">Admin Panel</li>
            <!-- This li is li one item head of html tags -->
            <a href="index.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-house-damage"></i><span>dashboard</span></li></a>
            <a href="post_page.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fab fa-bluetooth"></i><span>Post Website</span></li></a>
            <a href="user_registration.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fab fa-buffer"></i><span>user registration</span></li></a>
            <a href="admin_registration.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fab fa-angular"></i><span>Admin Modarator</span></li></a>
<!--dropdown menu-->
            <!-- <a class="dropdown_site"><li id="menu_hover" style="border-bottom: 0px;"><i style="margin-right: 10px;" class="fas fa-bacon"></i><span>Other Pages</span><i class="fas fa-angle-down down_icon"></i></li>
          <div class="dropdown_page">
            <ul>
              <a href="#"><li id="menu_hover" style="border-top:1px solid #b9798e;"><i style="margin-right: 10px;" class="fas fa-user-plus"></i><span>Frist Page</span></li></a>
              <a href="#"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-pen"></i><span>Secound page</span></li></a>
              <a href="#"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-cog fa-spin"></i><span>Third Page</span></li></a>
            </ul>
          </div>
          </a> -->
          <!-- This li is li item head of html tags -->
          <li class="fa-3x" style="background: #e74c3c;padding: 10px 20px; text-transform: uppercase; color: white;">Account setting</li>
            <!-- This li is li one item head of html tags -->
            <a href="admin_profile.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-user-plus"></i><span>My Profail</span></li></a>
            <a href="admin_edit_account.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-pen"></i><span>Edit Account</span></li></a>
            <a href="change_password.php"><li id="menu_hover"><i style="margin-right: 10px;" class="fas fa-cog fa-spin"></i><span>setting</span></li></a>
          <!-- This li is li item head of html tags -->
          <li style="background: #e74c3c; text-transform: uppercase; padding: 10px 20px; color: white;">Admin Cantact</li>
            <!-- This li is li one item head of html tags -->
            <a href="contact_myself.php"><li id="menu_hover"><i style="margin-right: 10px;" class="far fa-envelope"></i><span>Contact Myself</span></li></a>
          <!-- This li is li item head of html tags -->
          <li style="background: #e74c3c; padding: 10px 20px; text-transform: uppercase; color: white;">Host Social visit</li>
            <!-- This li is li one item head of html tags -->
            <a href="https://facebook.com/toufik080" target="_blank"><li id="menu_hover"><i id="facebook" style="margin-right: 10px;" class="fab fa-facebook"></i><span>fb Profail</span></li></a>
            <a href="https://www.facebook.com/freelancertoufik" target="_blank"><li id="menu_hover"><i id="facebook" style="margin-right: 10px;" class="fab fa-facebook"></i><span>facebook page</span></li></a>
            <a href="https://twitter.com/MDTOUFI44172678" target="_blank"><li id="menu_hover"><i id="twitter" style="margin-right: 10px;" class="fab fa-twitter"></i><span>Twitter</span></li></a>
            <a href="https://www.youtube.com/channel/UCwgsOOonW6m6nfNrlZOjOYQ" target="_blank"><li id="menu_hover"><i id="youtube" style="margin-right: 10px;" class="fab fa-youtube"></i><span>youtube</span></li></a>
            <a href="#"><li id="menu_hover"><i id="linkedin" style="margin-right: 10px;" class="fab fa-linkedin"></i><span>Linkedin</span></li></a>
        </ul>
      </div>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
// For Tb Er 1-10 Data Show
$(document).ready(function(){
  $(".dropdown_site").click(function(){
    $(".dropdown_page").toggle(500);
  });
});
</script>
