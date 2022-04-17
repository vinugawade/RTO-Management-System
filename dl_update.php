<?php
include("./include/header.php");
include("./include/connect.php");
?>
<style>
	input[type=text],
	input[type=password] {
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
					<div class="col-md-10 student-grid">
						<h4>Enter the details of citizen's DL entry</h4>
						<form action="dl_updated.php" method="get">
							<br><br>
							Aadhaar number: <input type="text" name="aad" pattern="^\d{12}$" required>
							<br>
							DL ID: <input type="text" name="dl_id">
							<br>
							DL Status:
							<SELECT name="dl_status" class="form-control">
								<option value="0">Pending</option>
								<option value="1">Approve</option>
								<option value="-1">Reject</option>
							</select>
							<br>
							SELECT DL Status<br><br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--student-->
	</div>
	</form>
	<!--content-->
</body>
<?php
include("./include/footer.php");;
?>

</html>