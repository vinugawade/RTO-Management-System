<?php
include("./include/connect.php");
session_start();
if(isset($_GET['submit'])){
	$username = $_GET["username"];
	$password = $_GET["password"];
	$sql="SELECT id,privilege FROM inspector WHERE username='{$username}' AND password='{$password}'";
	$result = $conn->query($sql);
	$row2=mysqli_fetch_row($result);
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['role'] = 'inspector';
		if($row2[1]=='LL' || $row2[1]=='LLR'){
			echo ("<script>
				window.alert('Welcome LL Inspector')
				window.location.href='./llr_inspector.php'
			</script>");
		}
		else if($row2[1]=='REG'){
			echo ("<script>
				window.alert('Welcome Vehicle Registration Inspector')
				window.location.href='./reg_inspector.php'
			</script>");
		}
		else if($row2[1]=='DL'){
			echo ("<script>
				window.alert('Welcome DL Inspector')
				window.location.href='./dl_inspector.php'
			</script>");
		}
	}
	else {
			echo ("<script>
				window.alert('Invalid Credentials')
				window.location.href='./inspector_login.php'
			</script>");
	}
}
?>