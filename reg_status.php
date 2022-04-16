<?php
include("./include/header.php");
?>
<body>
	<!--content-->
		<div class="content">
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="title">Check status of your Vehicle regestration</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4>Enter your Aadhar Number</h4>
								<p><form action="reg_status_check.php" method="get" >
          				<br><br><br>
          				Aadhar number : <input type="text" name="aad" pattern="^\d{12}$" required>
						<br><br><br>
          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
						</form>	</p>
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
