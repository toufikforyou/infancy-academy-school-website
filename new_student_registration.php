<?php
session_start();
include("db_conn.php");
if (isset($_POST['registration'])) {

  $stu_b = mysqli_real_escape_string($connection,$_POST['student_bangla']);
  $stu_e = mysqli_real_escape_string($connection,$_POST['student_english']);
  $gander = mysqli_real_escape_string($connection,$_POST['gander']);
  $f_b = mysqli_real_escape_string($connection,$_POST['father_name_bangla']);
  $f_e = mysqli_real_escape_string($connection,$_POST['father_name_english']);
  $m_b = mysqli_real_escape_string($connection,$_POST['mother_name_bangla']);
  $m_e = mysqli_real_escape_string($connection,$_POST['mother_name_english']);
  $divi = mysqli_real_escape_string($connection,$_POST['divition']);
  $zila = mysqli_real_escape_string($connection,$_POST['zilla']);
  $upzila = mysqli_real_escape_string($connection,$_POST['upzilla']);
  $union = mysqli_real_escape_string($connection,$_POST['union']);
  $vallage_db = mysqli_real_escape_string($connection,$_POST['village_db']);
  $vallage = mysqli_real_escape_string($connection,$_POST['village_name']);
  $post_code = mysqli_real_escape_string($connection,$_POST['post_code']);
  $mobile = mysqli_real_escape_string($connection,$_POST['mobail']);
  $date_of = mysqli_real_escape_string($connection,$_POST['date_birth']);
  $class = mysqli_real_escape_string($connection,$_POST['class']);

  $filename = $_FILES['image']['name'];

  $stu_id = rand(111111,999999);

$query_match = "SELECT mobail_number FROM new_student WHERE mobail_number='$mobile'";
$result_match = mysqli_query($connection,$query_match);
$count = mysqli_num_rows($result_match);
if (!$count) {
//for student_photo upload start php code
// Valid extension
$valid_ext = array('png','jpeg','jpg');

$photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
$phototest1 = strtolower($photoExt1);

$new_profle_pic = $mobile.'Student'.$stu_id.'.'.$phototest1;

// Location
$location = "student_images/".$new_profle_pic;

// file extension
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

// Check extension
if(in_array($file_extension,$valid_ext)){

     // Compress Image
     compressedImage($_FILES['image']['tmp_name'],$location,60);

 //Here i am enter the insert code in the step ........

 }else{
    $new_profle_pic = "Avater.png";
 }

// end upload php code
  $query="INSERT INTO new_student(student_bangla,student_english,gender,father_bangla,father_english,mother_bangla,mother_english,divition,zilla,upzila,union_name,village_db,village_name,post_code,mobail_number,death_birth,class,student_id,student_photo) VALUES('$stu_b','$stu_e','$gander','$f_b','$f_e','$m_b','$m_e','$divi','$zila','$upzila','$union','$vallage_db','$vallage','$post_code','$mobile','$date_of','$class','$stu_id','$new_profle_pic')";
  $result = mysqli_query($connection, $query) or die("Insert Query are'n match");
  if ($result) {
    $query_show = "SELECT * FROM new_student WHERE mobail_number='$mobile'";
    $result_show = mysqli_query($connection,$query_show) or die("Query Show Error");
    $count_show = mysqli_num_rows($result_show);
      if ($count_show) {
        $row = mysqli_fetch_assoc($result_show);
        $_SESSION['id'] = $row['id'];
        $_SESSION['mobail_number'] = $row['mobail_number'];
        header("location: registration.php");
    }
    $to = "$mobile";
    $token = "85ac7574f7e69c8ec09cff33175a75e0";
    $message = "Hello, $stu_e. Your 'INFANCY ACADEMY SCHOOL' registration sucssessful. Your student_id is $stu_id & class $class.";

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

  }
}else {
  header("location: online_registration.php?error=Registrared");
}





}
function compressedImage($source, $path, $quality) {

       $info = getimagesize($source);

       if ($info['mime'] == 'image/jpeg')
           $image = imagecreatefromjpeg($source);

       elseif ($info['mime'] == 'image/gif')
           $image = imagecreatefromgif($source);

       elseif ($info['mime'] == 'image/png')
           $image = imagecreatefrompng($source);

       imagejpeg($image, $path, $quality);

}
?>
