<?php
session_start();
if (!isset($_SESSION['sucsess'])) {
  header('location:otp.php');
}
  if (!isset($_SESSION['name'])) {
    header('location:otp.php');
  }else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Password Setup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  margin-top: 25px;
  background: black;
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
.forpassword{
      margin-top: -7px;
}
@media screen and (max-width: 768px) {
  .input_form{
    width: 600px;
  }
}
@media screen and (max-width: 700px) {
  .input_form{
    width: 580px;
  }
}
@media screen and (max-width: 650px) {
  .input_form{
    width: 500px;
  }
}
@media screen and (max-width: 600px) {
  .input_form{
    width: 480px;
  }
}
@media screen and (max-width: 550px) {
  .input_form{
    width: 450px;
  }
}
@media screen and (max-width: 500px) {
  .input_form{
    width: 400px;
  }
  .admin_photo img {
      width: 80px;
  }
}
@media screen and (max-width: 450px) {
  .input_form{
    width: 380px;
  }
  label {
    font-size: 12px;
  }
  .error {
    font-size: 12px;
  }

}
@media screen and (max-width: 400px) {
  .input_form{
    width: 350px;
    margin-bottom: 33px;
    padding-bottom: 57px;

  }
  .error {
    font-size: 12px;
  }
  a.forpassword {
    width: 100%;
    font-size: 8px;
    margin-top: 2px;
  }
  .admin_photo img {
      width: 50px;
  }
  .copyright{
    font-size: 16px;
  }
}
@media screen and (max-width: 350px) {
  .input_form{
    width: 250px;
    margin-bottom: 30px;
    padding-bottom: 120px;
    padding: 12px;
  }
  .error {
    font-size: 8px;
  }
  .admin_name{
    font-size: 12px;
  }
  .copyright{
    font-size: 12px;
  }
}
@media screen and (max-width: 350px){
  .input_form{
    width: 190px;
  }
  .admin_name{
    font-size: 10px;
  }
  a.forpassword {
    width: 50%;
    float: right;
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
   <span><?php echo "Incorect Confirm Password"; ?></span>
 </div>
  <hr>
 <?php } ?>


<?php
$id = $_SESSION['id'];

?>

<form action="password_setup.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confrim Password</label>
        <input name="cfmpassword" type="password" class="form-control" placeholder="Confrim Password" required>
      </div>
      <div class="form-group">
        <input name="setup" type="submit" class="form-control submit" name="" value="SET UP">
      </div>
      <div class="form-group">
        <a href="#" class="forpassword" style="text-decoration: none; float: right;;">Need An Account</a>
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
<?php } ?>
