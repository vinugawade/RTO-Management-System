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
					<h3 class="title">User Registration</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
								<p><form action="./customerdata.php" method="POST">
						First Name: <input type="text" name="first_name" required>
						<br><br>
					    Middle Name: <input type="text" name="middle_name" required>
						<br><br>
					    Last Name: <input type="text" name="last_name" required>
						<br><br>
          				Aadhar number: <input type="text" name='aadhar' pattern="^\d{12}$" required>
						<br><br>
					    Gender :	<select name="gender" required>
								<option value="">Select Gender</option>
								<option value="m">Male</option>
								<option value="f">Female</option>
							</select>
						<br><br>
						Date Of Birth: <input type="date" name="dob" required>
						<br><br>
						Phone No: <input type="text" name="phone_no" pattern="^\d{10}$" required>
						<br><br>
						Mail_id:<input type="email" name="mail_id">
						<br><br>
						Street:<input type="text" name="street" required>
						<br><br>
						city:<input type="text" name="city" required>
						<br><br>
						state:<input type="text" name="state" required>
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
