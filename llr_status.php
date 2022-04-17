<?php
include("./include/header.php");
?>
<body>
	<!--content-->
		<div class="content">
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="title">Check status of your LL</h3>
					<div class="container-fluid">
							<a class="pull-left" href="./click_llr.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
							<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
					</div>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4>Enter your Aadhaar number</h4>
								<p><form action="llr_status_check.php" method="get" >
          				<br><br><br>
          				Aadhaar number: <input type="text" name="aad" pattern="^\d{12}$" required>
						<br><br><br>
          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
						</form>	</p>
						</div>						<div class="clearfix"></div>
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
