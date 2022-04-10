<?php
include("./include/header.php");
?>
<style>
input[type=text], input[type=password] {
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
	<!--content-->
<div class="content">
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="title">LL Status Update</h3>
					<div class="student-grids">
						<div class="col-md-10 student-grid">
							<h4>Enter the details of citizen's LL entry</h4>
								<p><form action="llr_updated.php" method="get">
          				<br><br>
          				Aadhar number: <input type="text" name="aad" pattern="^\d{12}$" required>
						<br>
						LL ID: <input type="text" name="llr_id">
						<br>
						LL Status: <input type="text" name="llr_status"><br>
						Enter 1 for Approval, -1 for Rejection in LL Status<br><br>

          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
						<p><a href="llr_inspector.php"><h4>Back</h4></a></p>
						<p><a href="logout.php"><h4><font color="red">Logout</font></h4></a></p>
						</form>	</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--student-->
</div>

</form>
</body>
</html>
