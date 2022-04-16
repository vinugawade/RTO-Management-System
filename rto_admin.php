<?php
include("./include/header.php");
?>
<style>
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	align: center;
}

button {
    background-color: #041793;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 24px 12px 24px;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body>
<div class="content">
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="title">Admin Menu</h3>
					<div class="container-fluid py-3">
						<a class="pull-left" href="./admin_login.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
						<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
					</div>
					<div class="student-grids">
						<div class="col-md-10 student-grid">
						<ul>
						<li><a href="./get_llr_info.php"><h4>View LL entry table</h4></a></li>
						<br>
						<li><a href="./admin_get_reg_info.php"><h4>View Registration entry table</h4></a></li>
						<br>
						<li><a href="./admin_get_dl_info.php"><h4>View DL entry table</h4></a></li>
						<br>
						<li><a href="./add_inspector.php"><h4>Add Inspector</h4></a></li>
						<br>
						<li><a href="./remove_inspector.php"><h4>Remove Inspector</h4></a></li>
						<br>
						<li><a href="./get_license_info.php"><h4>View License Holders</h4></a></li>
						<br>
						<li><a href="./get_license_expiry.php"><h4>License Expiry Details</h4></a></li>
						<br>
						<li><a href="./get_registration_info.php"><h4>View Registration Details</h4></a></li>
						<br>
						<li><a href="./get_registration_expiry.php"><h4>Registration Expiry Details</h4></a></li>
						<br>
						<li><a href="./view_complaints.php"><h4>View Complaints</h4></a></li>
						<br>
						<li><a href="./update_database.php"><h4>Update database</h4></a></li>
						<br>
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--student-->
</div>
</body>
<?php
include("./include/footer.php");
?>
</html>
