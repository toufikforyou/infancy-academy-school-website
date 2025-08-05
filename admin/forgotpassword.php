<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <link href="image/admin_image.jpg" rel="icon" type="image/png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style rel="stylesheet" type="text/css" media="screen">
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background: #e5e5e5;
    }

.input_form {
background: white;
width: 400px;
margin: 0 auto;
border: 1px solid;
padding: 30px;
border-radius: 7px;
margin-top: 12px;
margin-bottom: 5px;
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
  margin-top: 25px;
}
.copyright{
  color: white;
  text-align: center;
  padding: 10px;
  text-transform: uppercase;
  margin-top: 2%;
}
.error {
    background: #bb8f8fc9;
    padding: 5px;
    border-radius: 5px;
    color: red;
    margin-bottom: 20px;
    text-align: center;
}
.account{
      margin-top: -7px;
}
@media screen and (max-width:750px) {
  .input_form {
  width: 350px;
  }
  #footer{
    margin-top: 25px;
  }
}
@media screen and (max-width:650px) {
  .input_form {
  width: 350px;
  }
  #footer{
    margin-top: 25px;
  }
}
@media screen and (max-width:550px) {
  .input_form {
  width: 380px;
  }
  #footer{
    margin-top: 25px;
  }
  .error {
    font-size: 12px;
  }
}
@media screen and (max-width:400px) {
  .input_form {
  width: 300px;
  }
  #footer{
    margin-top: 25px;
  }
  .error {
    font-size: 12px;
  }
}
@media screen and (max-width:350px) {
  .input_form {
  width: 250px;
  }
  #footer{
    margin-top: 25px;
  }
  .error {
    font-size: 12px;
  }
}
@media screen and (max-width:350px){
  .input_form {
  width: 190px;
  padding: 13px;
  }
  .error {
    font-size: 8px;
  }
  .copyright{
    font-size: 8px;
  }
}
    </style>
  </head>
  <body>
<header class="top_ber">
  <div class="logo">
    <img src="logo/TF'S_CLUB.png" alt="TF'S CLUB">
  </div>
</header>

<div class="input_form">
<?php if (isset($_REQUEST['error'])) { ?>

 <div class="error">
   <span><?php echo "Your Number Not Registered"; ?></span>
 </div>
 <hr>
 <?php } ?>
 <?php
if (isset($_POST['next'])) {
  header('location: otp.php');
}
  ?>
<form action="sent_otp.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input name="number" type="number" class="form-control" placeholder="Phone Number" required>
      </div>
      <div class="form-group">
        <input name="next" type="submit" class="form-control submit" name="" value="Next">
      </div>
      <div class="form-group">
        <a href="#" class="account" style="text-decoration: none; float: right;;">Need An Account</a>
      </div>

    </form>
</div>
<footer id="footer">
  <div class="copyright">
    <span>2020 CopyRight section</span>
  </div>
</footer>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
