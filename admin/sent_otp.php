<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location: login.php');
}
if (isset($_POST['next'])) {
  include("db_conn.php");
  $number = mysqli_real_escape_string($connection,$_POST['number']);
  $query = "SELECT * FROM admin_info WHERE phone= '$number'";
  $result = mysqli_query($connection,$query);
  $count = mysqli_num_rows($result);
  if ($count >0) {
    while ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['name'] = $row['full_name'];
      $_SESSION['account_no'] = $row['account_no'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['otp'] = rand(1111,9999);
$name = $_SESSION['name'];
$account_no = $_SESSION['account_no'];
$otp = $_SESSION['otp'];

$to = "$number";
$token = "85ac7574f7e69c8ec09cff33175a75e0";
$message = "Hi $name.Your TF'S CLUB account no: $account_no. Forgoten OTP is $otp. Don't share OTP. BY WEB DEVELOPER TOUFIK HASAN.";

$url = "http://api.greenweb.com.bd/api.php?json";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

header('location: otp.php');
    }
  }else {
    header('location: forgotpassword.php?error');
  }
}
?>
