<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teacher LogIn</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
<style type="text/css">
@import url('https://fonts.maateen.me/bangla/font.css');
*{
	padding:0;
	margin:0;
}
    body{
    	background: rgba(0,60,250,.5);
      font-family: 'Bangla', sans-serif;
    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button{
      -webkit-appearance: none;
      margin: 0;
    }
    .logIn_form{
    	background: rgba(0,98,0,.7);
    	width: 700px;
    	border-radius:5px;
    	margin:auto;
    	border:2px solid #fff;
    	margin-top:60px;
    }
    .header{
    	text-align:center;
    	text-transform:uppercase;
    	margin-top:20px;
    	margin-bottom:30px;
    	font-size:20px;
    	color:white;
    	font-weight:500;
    	border-bottom:3px solid #f05925;
    }
    .input_style{
    	width:80%;
    	margin:auto;
    }
    .click_box{
    	color: white;
    	font-weight:500;
    }
    .btn_style{
    	width:100%;
    	margin:0 auto;
    	font-weight:500;
    	background: #f05925;
      margin-bottom: 10px;
    	text-transform:uppercase;
    }
    .btn_style1{
    	width:100%;
    	margin:0 auto;
    	font-weight:500;
      margin-bottom: 40px;
    	text-transform:uppercase;
    }
    .btn_style:hover{
    	background: green;
    }
@media screen and (max-width:700px) {
  .logIn_form{
    width: 500px;
    margin-top:40px;
  }
  .input_style{
    width: 90%;
  }
}
@media screen and (max-width:600px) {
  .logIn_form{
    width: 450px;
  }
  .input_style{
    width: 90%;
    margin-top:30px;
  }
}
@media screen and (max-width:500px) {
  .logIn_form{
    width: 350px;
    margin-top:25px;
  }
  .input_style{
    width: 90%;
  }
  .btn_style,.btn_style1{
    font-size: 12px;
  }
}
@media screen and (max-width:400px) {
  .logIn_form{
    width: 300px;
    margin-top:20px;
  }
  .input_style{
    width: 95%;
  }
  .btn_style,.btn_style1{
    font-size: 8px;
  }
  .header{
    font-size: 18px;
  }
}
@media screen and (max-width:350px) {
  .logIn_form{
    width: 230px;
    margin-top:15px;
  }
  .input_style{
    width: 95%;
  }
  .btn_style,.btn_style1{
    font-size: 8px;
  }
  .header{
    font-size: 18px;
  }
}
@media screen and (max-width:300px) {
  .logIn_form{
    width: 180px;
  }
  .input_style{
    width: 95%;
  }
  .btn_style,.btn_style1{
    font-size: 8px;
  }
  .header{
    font-size: 18px;
  }
}
    </style>
    </head>
<body>
      <div class="container">
      <div class="logIn_form">
      <div class="header">
      <span>শিক্ষক লগইন ফর্ম</span>
      </div>
      <div class="input_style">
      <form>
      <div class="form-group click_box">
        <label for="exampleInputEmail1">আইডি অথবা মোবাইল</label>
        <input placeholder="আইডি অথবা মোবাইল" type="number" class="form-control abbr" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group click_box">
        <label for="exampleInputPassword1">পাসওয়ার্ড</label>
        <input placeholder="পাসওয়ার্ড" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label click_box" for="exampleCheck1">আমাকে মনে রাখুন</label>
      </div>
      <button type="submit" class="btn btn-primary btn_style">লগইন করুন</button>
      <a href="teacher_registration.php" class="btn btn-success btn_style1">অ্যাকাউন্ট প্রয়োজন</a>
    </form>
      </div>
      </div>
      </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
    </html>
