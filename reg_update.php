<?php
include("./include/header.php");
?>
<!--css-->
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
		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">Vehicle Registration Status Update</h3>
				<div class="container-fluid">
					<a class="pull-left" href="./reg_inspector.php"><i class="glyphicon glyphicon-arrow-left"
							aria-hidden="true"></i><b>Back</b></a>
					<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt"
							aria-hidden="true"></i></a>
				</div>
				<div class="student-grids">
					<div class="col-md-6 student-grid">
						<h4>Enter Details of Registration Entry</h4>
						<form action="./reg_updated.php" method="get">
							<br><br>
							<input type="text" class="form-control" placeholder="Aadhaar Number" name="aad" pattern="^\d{12}$"
								required>
							<br>
							<input type="text" class="form-control" placeholder="Registration ID" name="r_id" required>
							<br>
							<SELECT name="reg_status" class="form-control" required>
								<option value="0">Pending</option>
								<option value="1">Approve</option>
								<option value="-1">Reject</option>
							</select>
							<br>
							<div class="row">
								<div class="col-lg-2" style="font-size: 24px;">MH07</div>
								<div class="col-lg-10">
								 <input type="text" class="form-control" placeholder="Assigned Vehicle Number" name="vno">
							</div>
							</div>
							<br>
							Note :- Fill In Vehicle No If Registration Is Approved<br>
							<br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-md-6 student-grid">
						<img src="./images/reg1.png" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
		<!--student-->
	</div>
	</form>
</body>
<?php
include("./include/footer.php");
?>

</html>