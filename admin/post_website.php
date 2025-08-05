<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<!-- This title show bar in html tags -->
		<title>POST PUBLIC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
		<style media="screen">
		span.sucsess {
		background: green;
		padding: 8.5px;
		border-radius: 5px;
		font-weight: 700;
}
		span.error {
		background: #3da562e0;
		padding: 8.5px;
		border-radius: 5px;
		font-weight: 700;
		color: red;
}
		</style>
	</head>
<?php include "dashbord.php"; ?>
			<!-- This section is dashboard control in html tags -->
			<section id="dashboard_digain">
				<div class="dashboard_name">
					<span><i style="margin-right: 10px;" class="fas fa-cog fa-spin"></i>Public Post</span>
				</div>
				<!-- This div is dashboard item vew in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span style="text-transform:uppercase;">Type Post Box</span>
<?php
if (isset($_REQUEST['error'])) { ?>
<span class="error"><?php echo "BLANK TITLE OR CHATAGORI"; ?></span>
<?php } ?>

					</div>
					<div style="padding: 10px;" class="container">
		<form action="post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
				    <label>Title</label>
				    <input name="title" title="TYPE TITLE" type="text" class="form-control" placeholder="Enter Your Post Title">
				  </div>
					<div class="form-group">
					<label for="divisions">Post Catagori</label>
					<select name="opsion" class="form-control" required>
					 <option disabled selected>Select Opsion</option>
					 <option value="RESENT POST">Resent Post</option>
					 <option value="TOP POST">Top Post</option>
					</select>
					</div>
					<div class="form-group">
			    <label for="exampleFormControlTextarea1">Input Your Post</label>
			    <textarea name="post" class="form-control" rows="7" placeholder="Enter Your Discription."></textarea>
			  	</div>
					<div class="form-group">
					 <label for="exampleFormControlFile1">Post Image</label>
					 <input name="post_img" type="file" class="form-control" id="exampleFormControlFile1">
				 </div>
					<button name="public" type="submit" class="form-control btn btn-primary">SUBMIT POST</button>
					</form>
				</div>
				</div>
			</section>
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

		<!-- This script tags is jQuery javascript file link in html tags -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<!-- This script tags is bootstrap javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>
