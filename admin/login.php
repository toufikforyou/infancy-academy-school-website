<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin LogIn</title>
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
      width: 750px;
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
        color: #e5ee;
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
.succsess {
    background: green;
    padding: 5px;
    border-radius: 5px;
    color: white;
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
    padding: 30px;
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
  .succsess {
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
  .succsess {
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
<div class="admin">
  <div class="admin_photo">
    <img src="image/admin_image.jpg" alt="Admin Photo">
  </div>
  <div class="admin_name">
    <span>Admin LogIn Form</span>
  </div>
</div>
<?php if (isset($_REQUEST['error'])) { ?>

 <div class="error">
   <span><?php echo "Incorect Admin ID or Password"; ?></span>
 </div>
 <?php } ?>
<?php if (isset($_REQUEST['sucsess_otp'])) { ?>

 <div class="succsess">
   <span><?php echo "Password Reset Sucsessful"; ?></span>
 </div>
 <?php } ?>

 <hr>
<form action="login_page.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Admin ID/Phone/Email</label>
        <input name="email" type="text" class="form-control" placeholder="Admin Id" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <input name="login" type="submit" class="form-control submit" name="" value="Log In">
      </div>
      <div class="form-group">
        <a href="forgotpassword.php" class="forpassword" style="text-decoration: none; float: left;">Forgot password?</a>
        <a href="#" class="forpassword" style="text-decoration: none; float: right;">Need An Account</a>
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
