<?php
include("./include/header.php");
?>

<body>
	<!--content-->
	<div class="content">
		<!--student-->
		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">Check Status of Your Vehicle Regestration</h3>
				<div class="student-grids">
					<div class="col-md-6 student-grid">
						<h4>Enter Aadhaar No</h4>
						<form action="reg_status_check.php" method="get">
							<br>
							<input type="text" class="form-control" placeholder="Aadhaar Number" name="aad" pattern="^\d{12}$"
								required>
							<br><br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-md-6 student-grid">
						<img src="./images/reg1.png" class="img-responsive">
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