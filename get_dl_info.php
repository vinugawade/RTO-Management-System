<!DOCTYPE HTML>
<html>
<title>DL Table</title>
<body>
<p><h1><b><u>RTO Maharashtra: DL Table</u></b></h1></p>
<p><a href="dl_inspector.php"><b>Back</b></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="logout.php"><b>Logout</b></a></p>
<?php
				session_start();
				$username=$_SESSION['username'];include("./include/connect.php");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}$sql1 = "SELECT aadhar,name,cov,dl_id,dl_status,mail_id FROM dl";$result1 = $conn->query($sql1);$body="body";
$subject="DL Update";if($result1){
echo '<div><table align="left" border="2"
cellspacing="2" cellpadding="10"><tr>
<td align="left"><b>Aadhaar No</b></td>
<td align="left"><b>Name</b></td>
<td align="left"><b>COV</b></td>
<td align="left"><b>DL ID</b></td>
<td align="left"><b>DL Status</b></td>
<td align="left"><b>Email</b></td>
</tr></div>';while($row = mysqli_fetch_array($result1)){
$link=$row['mail_id'];
echo '<div><tr><td align="left">' .
$row['aadhar'] . '</td><td align="left">' .
$row['name'] . '</td><td align="left">' .
$row['cov'] . '</td><td align="left">' .
$row['dl_id'] . '</td><td align="left">' .
$row['dl_status'] . '</td><td align="left">' .
'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td><td align="left"></td></tr></div>';}echo '</table>';} else {							echo ("<script>
							window.alert('Couldn't fetch the data')
							window.location.href='dl_inspector.php'
							</script>");}mysqli_close($conn);
?>
</body>
</html>
