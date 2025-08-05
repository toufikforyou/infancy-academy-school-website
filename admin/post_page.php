<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- This title show bar in html tags -->
		<title>Admin Public Post</title>
		<!-- This link table 10 show item in html tags -->
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<!-- This link title bar icon or image in html tags -->
		<link href="image/admin_image.jpg" rel="icon" type="image/png"/>
		<!-- This link fontwasam css in html tags -->
		<link rel="stylesheet" href="css/all.css" type="text/css"/>
		<!-- This link bootstrap css in html tags -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- This link admin style css in html tags -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<!-- This link responsive css in html tags -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
		<style media="screen">
		.table th,
		.table td {
			padding: 0.75rem;
			vertical-align: top;
		}
		div.dataTables_wrapper div.dataTables_length select {
    width: 70px;
		}
		.user_item {
    width: 95%;
		margin-top: -4px;
		}
		.form-control {
				padding: 0.375rem 0.75rem;
				border: 1px solid #ced4da;
				border-radius: 0.25rem;
				transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}
		.form-control:focus {
			color: #495057;
			background-color: #fff;
			border-color: #80bdff;

			box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
		}
		.breadcrumb-item.active {
			color: #6c757d;
		}
		tr.table-primary {
    font-size: 12px;
}
tr.odd,tr.even {
    font-size: 12px;
}
		.pagination {
			display: flex;
			padding-left: 0;
			list-style: none;
			border-radius: 0.25rem;
		}
		.page-link {
			position: relative;
			display: block;
			padding: 0.5rem 0.75rem;
			border: 1px solid #dee2e6;
		}
		.page-item.active .page-link {
			background-color: #007bff;
		}
		div#dataTable_length {
				float: left;
		}
		.table_style {
    padding: 20px 5px;
		}
		div#dataTable_info {
				float: left;
		}
		a.page-link {
		text-decoration: none;
		}
		tfoot {
				display: none;
		}
		.btn-primary,.btn-primary:hover {
    border-color: white;
		}
		.btn{
			padding: 2px 4px;
    font-size: 12px;
    margin-bottom: 3px;
		}
		.btn_delet{
			background: #ff0000a6;
		}
		.btn_delet:hover{
			background: red;
		}
		a.btn.btn-primary {
				float: right;
				margin-left: 5px;
		}
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
					<span><i style="margin-right: 10px;" class="fas fa-cog fa-spin"></i>Post to website</span>
				</div>
				<!-- This Div is bandwidth used & none used % show in html tags -->
				<div class="user_item">
					<div class="user_item_head">
						<span>POST WEBSITE LIST</span>
<?php
if (isset($_REQUEST['sucsess'])) { ?>
	<span class="sucsess"><?php echo "DATA INSERT SUCSESSFUL"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['sucsess1'])) { ?>
	<span class="sucsess"><?php echo "DATA DELETE SUCSESSFUL"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['sucsess2'])) { ?>
	<span class="sucsess"><?php echo "DATA UPDATE SUCSESSFUL"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['error'])) { ?>
	<span class="error"><?php echo "NO DATA INSERTED"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['error1'])) { ?>
	<span class="error"><?php echo "NO DATA DELETE"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['error2'])) { ?>
	<span class="error"><?php echo "Only Admin This Role Change"; ?></span>
<?php } ?>
<?php
if (isset($_REQUEST['error3'])) { ?>
	<span class="error"><?php echo "NOT UPDATE DATA"; ?></span>
<?php } ?>
						<a class="btn btn-primary" href="post_website.php" role="button">ADD POST</a>
					</div>
<div class="table_style">
<?php
include("db_conn.php");
$query = "SELECT * FROM post_info ORDER BY id DESC";
$result = mysqli_query($connection,$query) or die("Query Faild");
$count = mysqli_num_rows($result);
if ($count > 0) {
?>


	<table class="table-bordered table table-striped" id="dataTable" width="100%" cellspacing="0">
			<thead>
					<tr class="table-primary">
							<th style="width:16px;">SN</th>
							<th>Title</th>
							<th>role</th>
							<th>Date</th>
							<th>Action</th>
					</tr>
			</thead>
			<tbody>
<?php
$sirial = 0;
while ($row = mysqli_fetch_assoc($result)) {
$sirial++

?>

					<tr>
							<td title="<?php echo $row['id']; ?>"><?php echo $sirial; ?></td>
							<td title="<?php echo $row['post']; ?>"><?php echo $row['post_title']; ?></td>
							<td title="<?php echo $row['name']; ?>"><?php echo $row['role']; ?></td>
							<td title="<?php echo $row['date_time']; ?>"><?php echo $row['date']; ?></td>
							<td>
								<a onclick="return confirm('Are you sure this account delete?')" href="post_delate.php?id=<?php echo $row['id']; ?>&img=<?php echo $row['image']; ?>" class="btn btn-primary btn_delet">Delate</a>
								<a onclick="return confirm('Are you sure this account edit?')" href="post_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
							</td>
					</tr>
						<?php }} ?>
			</tbody>
	</table>
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
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- This script tags is funsion javascript file link in html tags -->
		<script type="text/javascript" src="js/funsion.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="tb_js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="tb_js/datatables-demo.js"></script>

		<!-- This script tags is proper javascript file link in html tags -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	</body>
</html>
