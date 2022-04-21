<?php
include("./include/header.php");
include("./include/connect.php");
?>
<style>
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
		<!--banner-bottom-->
		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">DL Status Update</h3>
				<div class="container-fluid">
					<a class="pull-left" href="./dl_inspector.php"><i class="glyphicon glyphicon-arrow-left"
							aria-hidden="true"></i><b>Back</b></a>
					<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt"
							aria-hidden="true"></i></a>
				</div>
				<div class="student-grids">
					<div class="col-md-6 student-grid">
						<h4>Enter Details of Citizen's DL Entry</h4>
						<form action="dl_updated.php" method="get">
							<br>
							<input type="text" class="form-control" placeholder="Aadhaar Number" name="aad" pattern="^\d{12}$"
								required>
							<br>
							<input type="number" class="form-control" placeholder="DL ID" name="dl_id">
							<br>
							<SELECT name="dl_status" class="form-control">
								<option value="0">Pending</option>
								<option value="1">Approve</option>
								<option value="-1">Reject</option>
							</select>
							<br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-md-6 student-grid">
						<img src="./images/rto2.png" class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--student-->
	</div>
	<!--content-->
</body>
<?php
include("./include/footer.php");;
?>

</html>