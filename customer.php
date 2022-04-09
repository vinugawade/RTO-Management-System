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
					<h3 class="tittle">User Registration</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
								<p><form action="customerdata.php" method="POST">
          				<br><br><br>

						First Name: <input type="text" name="first_name">
						<br><br>
					    Middle Name: <input type="text" name="middle_name">
						<br><br>
					    Last Name: <input type="text" name="last_name">
						<br><br>
          				Aadhar number: <input type="text" name="aadhar" >
						<br><br>
					    Gender : <input type="text" name="gender">
						<br><br>
						Date Of Birth: <input type="text" name="dob">
						<br><br>
						Phone No.: <input type="text" name="phone_no">
						<br><br>
						Mail_id:<input type="text" name="mail_id">
						<br><br>
						Street:<input type="text" name="street">
						<br><br>
						city:<input type="text" name="city">
						<br><br>
						state:<input type="text" name="state">
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
