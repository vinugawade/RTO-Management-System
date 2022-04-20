<?php
include("./include/header.php");
?>

<body>
	<!--content-->
	<div class="content">

		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">User Registration</h3>
				<div class="student-grids">
					<div class="col-md-6 student-grid">
						<form action="./customerdata.php" method="POST">
							<input class="form-control" placeholder="First Name" type="text" name="first_name" required>
							<br>
							<input class="form-control" placeholder="Middle Name" type="text" name="middle_name" required>
							<br>
							<input class="form-control" placeholder="Last Name" type="text" name="last_name" required>
							<br>
							<input class="form-control" placeholder="Aadhaar Number" type="text" name='aadhar' pattern="^\d{12}$"
								required>
							<br>
							<SELECT name="gender" class="form-control" required>
								<option value="">Select Gender</option>
								<option value="m">Male</option>
								<option value="f">Female</option>
							</select>
							<br>
							<input class="form-control" placeholder="Date Of Birth" type="date" name="dob" required>
							<br>
							<input class="form-control" placeholder="Phone Number" type="text" name="phone_no" pattern="^\d{10}$"
								required>
							<br>
							<input class="form-control" placeholder="E-Mail" type="email" name="mail_id" required>
							<br>
							<input class="form-control" placeholder="Street Name" type="text" name="street" required>
							<br>
							<input class="form-control" placeholder="City Name" type="text" name="city" required>
							<br>
							<input class="form-control" placeholder="State Name" type="text" name="state" required>
							<br>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-md-3 student-grid">
						<img src="./images/llr1.jpg" class="img-responsive">
					</div>
					<div class="col-md-3 student-grid">
						<img src="./images/llr2.jpg" class="img-responsive">
					</div>
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