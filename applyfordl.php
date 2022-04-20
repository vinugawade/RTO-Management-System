<?php
include("./include/header.php");
?>

<body>
	<!-- banner -->
	<!--content-->
	<div class="content">
		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">Driver's License Registration</h3>
				<div class="container-fluid">
					<a class="pull-left" href="./click_dl.php"><i class="glyphicon glyphicon-arrow-left"
							aria-hidden="true"></i><b>Back</b></a>
					<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt"
							aria-hidden="true"></i></a>
				</div>
				<div class="student-grids">
					<div class="col-md-6 student-grid">
						<h4>Enter Aadhaar No</h4>
						<form action="./dl.php" method="get">
							<br>
							<input type="text" class="form-control" placeholder="Aadhaar Number" name="aad" pattern="^\d{12}$"
								required>
							<br><br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-md-3 student-grid">
						<img src="./images/llr1.jpg" class="img-responsive">
					</div>
					<div class="col-md-3 student-grid">
						<img src="./images/llr2.jpg" class="img-responsive">
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
include("./include/footer.php");
?>

</html>