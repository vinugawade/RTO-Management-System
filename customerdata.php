<?php
include("./include/connect.php");
?>
<?php
if(@isset($_POST['submit'])){
	$fn = @$_POST['first_name'];
	$mn = @$_POST['middle_name'];
	$ln = @$_POST['last_name'];
	$aad = @$_POST['aadhar'];
	$gn = @$_POST['gender'];
	$db = @$_POST['dob'];
	$pn = @$_POST['phone_no'];
	$mailid = @$_POST['mail_id'];
	$st = @$_POST['street'];
	$ct = @$_POST['city'];
	$state = @$_POST['state'];
	$sql = "INSERT INTO citizen(first_name,middle_name,last_name,aadhar,gender,dob,phone_no,mail_id) VALUES('{$fn}','{$mn}','{$ln}','{$aad}','{$gn}','{$db}','{$pn}','{$mailid}')";
	if (mysqli_query($conn, $sql)){
		$sql1 = "INSERT INTO address(aadhar,street,city,state) VALUES('{$aad}','{$st}','{$ct}','{$state}')";
		if (mysqli_query($conn, $sql1)){
			echo "<script>
					window.alert('Record created successfully');
					window.location.href='./customer.php';
			</script>";
		}else{
			echo ("<script>
					window.alert('Error in address creation!');
					window.location.href='./customer.php';
			</script>");
		}
	}else{
		echo ("<script>
				window.alert('Error in user creation!');
				window.location.href='./customer.php';
		</script>");
	}
}
?>