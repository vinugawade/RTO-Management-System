<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
  <div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">License Registration</h3>
        <div class="student-grids">
          <div class="col-md-3 student-grid">
<?php
mysqli_select_db($conn,"rto_db");
if(isset($_POST['submit'])){
	$fn = $_POST['first_name'];
	$mn = $_POST['middle_name'];
	$ln = $_POST['last_name'];
	$aad = $_POST['aadhar'];
	$gn = $_POST['gender'];
	$db = $_POST['dob'];
	$pn = $_POST['phone_no'];
	$mailid = $_POST['mail_id'];
	$st=$_POST['street'];
	$ct=$_POST['city'];
	$state=$_POST['state'];

	$sql="INSERT INTO citizen(first_name,middle_name,last_name,aadhar,gender,dob,phone_no,mail_id) VALUES('$fn','$mn','$ln','$aad','$gn','$db','$pn','$mailid')";
	if (mysqli_query($conn, $sql)){
		$sql1="INSERT INTO address(aadhar,street,city,state) VALUES('$aad','$st','$ct','$state')";
		if (mysqli_query($conn, $sql1)){
			echo "<script>window.alert('Record created successfully');</script>";
		}else{
			$error = mysqli_error($conn);
			echo $error;
		}
	}else{
		$error = mysqli_error($conn);
		echo $error;
	}
}
?>
</div>
<p align="center">
	<a href="./customer.php">
		<h2 align="center">Exit</h2>
	</a>
</p>
<div class="clearfix"></div>
</div>
</div>
</div>
<!--student-->
</div>
</div>
</body>
<?php
include("./include/footer.php");
?>
</html>