<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>Admin Or Moderator Add Form</title>
		<!-- This link title bar icon or image in html tags -->
		<link href="image/admin_image.jpg" rel="icon" type="image/png"/>
		<!-- This link fontwasam css in html tags -->
		<link rel="stylesheet" href="css/all.css" type="text/css"/>
		<!-- This link bootstrap css in html tags -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- This link bootstrap css in html tags -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
		<!-- This link admin style css in html tags -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
    <style rel="stylesheet" type="text/css" media="screen">
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background: #e5e5e5;
    }

    .input_form {
        background: #3c9032c7;
        width: 550px;
        margin: 0 auto;
        border: 1px solid;
        padding: 30px;
        border-radius: 7px;
        margin-top: 12px;
        margin-bottom: 5px;
				transition: 1s;
    }
    .submit{
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
      font-weight: 400;
    }
    .submit:hover{
      background-color: #0069d9;
      border-color: #0062cc;
    }
    .admin_photo {
        text-align: center;
        margin-bottom: 40px;
    }
    .admin_photo img {
        width: 100px;
        border-radius: 50%;
    }
    .admin_name {
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700;
        color: #363be6ee;
        letter-spacing: 1px;
        text-align: center;
        margin-bottom: 25px;
    }
.top_ber{
  background: rgba(100, 221, 225, 0.9);
}
.logo img{
  padding-left: 10px;
  width: 150px;
  height: inherit;
}
#footer{
  background: black;
}
.copyright{
  color: white;
  text-align: center;
  padding: 10px;
  text-transform: uppercase;
}
.error {
	text-transform: uppercase;
    background: #bb8f8fc9;
    padding: 5px;
    border-radius: 5px;
    color: red;
    margin-bottom: 20px;
    text-align: center;
		font-weight: 600;
}
.form-check {
    float: left;
    padding: 0px 20px;
}
hr {
	margin-top: 0rem;
    margin-bottom: 2rem;
    border-top: 4px solid rgba(255,255,255,.5);
}
a.btn.btn-primary.btn_style1 {
    color: red;
    background: darkseagreen;
    text-transform: uppercase;
}
.btn-primary {
  margin-top: 8px;
    color: #520aff;
    background-color: #00a1ff;
    border-color: #b4ff00;
    font-weight: 700;
    text-transform: uppercase;
}
    </style>
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
	</head>
<?php include "dashbord.php"; ?>
			<!-- This section is dashboard control in html tags -->
			<section id="dashboard_digain">
				<div class="dashboard_name">
					<span><i style="margin-right: 10px;" class="fas fa-user-cog"></i>Add Admin Member form</span>
				</div>

        <div class="input_form">
        <div class="admin">
          <div class="admin_photo">
            <img src="image/admin_image.jpg" alt="Admin Photo">
          </div>
          <div class="admin_name">
            <span>Admin Or Moderator form</span>
          </div>
        </div>
<?php if (isset($_REQUEST['error'])) {?>
         <div class="error">
           <span>
        <?php echo "Your Number Registered"; ?>
           </span>
         </div>
				 <?php } ?>
<?php if (isset($_REQUEST['error1'])) {?>
         <div class="error">
           <span><?php echo "Incorrect Confirm Password"; ?></span>
         </div>
<?php } ?>
         <hr>
	 <form action="register.php" method="post" enctype="multipart/form-data">
	   <div class="form-group click_box">
	     <label for="exampleInputFristName">Full Name</label>
	     <input name="fullname" title="Enter Your Full Name" placeholder="Enter Your Full Name" type="fullname" class="form-control abbr" required>
	   </div>
	   <div class="form-group click_box">
	     <label for="exampleInputEmail1">Email address</label>
	     <input name="email" title="Enter Your Email Account" placeholder="Enter Your Email address" type="email" class="form-control abbr">
	   </div>
	   <div class="form-group click_box">
	     <label for="exampleInputMobail">Mobail No</label>
	     <input name="number" title="Enter Your Mobail Number" placeholder="Enter Your Mobail Number" type="number" class="form-control abbr" required>
	   </div>
	   <label style="float:left;margin-right: 10px;" for="exampleInputMobail">Gander</label>
	   <div class="form-check">
	     <input name="gander" class="form-check-input" type="radio" id="gridRadios1" value="Male" checked>
	     <label class="form-check-label" for="gridRadios1">
	       Male
	     </label>
	   </div>
	   <div class="form-check">
	     <input name="gander" class="form-check-input" type="radio" id="gridRadios2" value="Female">
	     <label class="form-check-label" for="gridRadios2">
	       Female
	     </label>
	   </div>
	   <div class="form-check">
	     <input name="gander" class="form-check-input" type="radio" id="gridRadios3" value="Other">
	     <label class="form-check-label" for="gridRadios2">
	       Other
	     </label>
	   </div>
	 <br>
	 <br>
	 <div class="form-group">
	 <label for="divisions">Select Country</label>
	 <select class="form-control" name="country">
	 	<option value="Bangladesh">Bangladesh</option>
	 </select>
	 </div>
	 <div class="form-group">
	 <label for="divisions">Select Division</label>
	 <select class="form-control" name="divition" id="divisions" onchange="division_list();" required>
	 	<option disabled selected>Select Division</option>
	 	<option value="Barishal">Barishal</option>
	 	<option value="Chattogram">Chattogram</option>
	 	<option value="Dhaka">Dhaka</option>
	 	<option value="Khulna">Khulna</option>
	 	<option value="Mymensingh">Mymensingh</option>
	 	<option value="Rajshahi">Rajshahi</option>
	 	<option value="Rangpur">Rangpur</option>
	 	<option value="Sylhet">Sylhet</option>
	 </select>
	 </div>
	 <div class="form-group">
	   <label for="distr">Select District</label>
	   <select class="form-control" name="district" id="distr" onchange="zilaList();" required></select>
	 </div>
	 <div class="form-group">
	   <label for="polic_sta">Select Upzila</label>
	   <select class="form-control" name="upzila" id="polic_sta" onchange="upzilaList();" required></select>
	 </div>
	 <div class="form-group">
	   <label for="union_list">Select Union</label>
	   <select class="form-control" name="union" id="union_list" onchange="unionList();"></select>
	 </div>
	 <div class="form-group">
	   <label for="village_list">Select Village</label>
	   <select class="form-control" name="village" id="village_list" required></select>
	 </div>
	 <div class="form-group">
	       <label for="inputZip">Post Code</label>
	       <input name="post_code" type="number" class="form-control" id="inputZip" required>
	 </div>

	 <div class="form-group click_box">
	 	<label for="exampleInputPassword1">Password</label>
	 	<input name="password" title="Enter Your Password" placeholder="Password" type="password" class="form-control" required>
	 </div>
	 <div class="form-group click_box">
	 	<label for="exampleInputPassword2">Conform Password</label>
	 	<input name="cfmpassword" title="Enter Your Conform Password" placeholder="Conform Password" type="password" class="form-control" required>
	 </div>
	 <div class="form-group">
	 <label for="admin">Select Option</label>
	 <select name="admin" class="form-control" required>
	  <option value="Moderator">Moderator</option>
		<option value="Admin">Admin</option>
	 </select>
	 </div>
	 <div class="form-group">
    <label for="exampleFormControlFile1">Profile Image</label>
    <input name="profile" type="file" class="form-control" id="exampleFormControlFile1">
  </div>
	 <button name="register" title="REGISTER" type="submit" class="btn btn-primary form-control" required>Add Now</button>
	 </form>
			</section>
		<footer id="footer">
			<div class="copyright">
				<span>2020 CopyRight section</span>
			</div>
		</footer>


		<!-- This script tags is fontwasam javascript file link in html tags -->
		<script type="text/javascript" src="js/all.js"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- This script tags is jQuery javascript file link in html tags -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- This script tags is funsion javascript file link in html tags -->
		<script type="text/javascript" src="js/funsion.js"></script>
<script src="js/country.js" type="text/javascript"></script>
		<!-- This script tags is jQuery javascript file link in html tags -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>
