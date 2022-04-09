<?php
include("./include/header.php");
?>
<body>
	<!--content-->
		<div class="content">
			<!--banner-bottom-->

			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="tittle">Check status of your LL</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4>Enter your Aadhar Number</h4>
								<p><form action="llr_status_check.php" method="get">
          				<br><br><br>
          				Aadhar number: <input type="text" name="aad" >
						<br><br><br>
						Enter Password: <input type="password" name="passwd">
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
include("./include/footer.php");
?>
</html>
