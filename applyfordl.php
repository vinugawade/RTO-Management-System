<?php
include("./include/header.php");
?>
<body>
	<!-- banner -->

	<!--content-->
		<div class="content">
			<!--banner-bottom-->

			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="title">Driver's License Registration</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4>Enter your Aadhar Number</h4>
								<p><form action="dl.php" method="get">
          				<br><br><br>
          				Aadhar number: <input type="text" name="aad" pattern="^\d{12}$" required>
						<br><br>
          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
          			</form>	</p>
								<p></p>


						</div>
						<div class="col-md-3 student-grid">
							<img src="images/llr1.jpg" class="img-responsive">
						</div>
						<div class="col-md-3 student-grid">
							<img src="images/llr2.jpg" class="img-responsive">
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
