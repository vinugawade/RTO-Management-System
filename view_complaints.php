<!DOCTYPE HTML>
<html>
<title>Complaints</title>
<body>
<p><h1><b><u>RTO Maharashtra: Complaints Table</u></b></h1></p>
<p><a href="rto_admin.php"><font color="blue" size="5"><b>Back</b></font></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="admin_logout.php"><font color="blue" size="5"><b>Logout</b></font></a></p>
<?php
				session_start();
				$username=$_SESSION['username'];

include("./include/connect.php");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"rto_db");

$sql1 = "SELECT aadhar,cdate,cdesc,concat(first_name,' ',middle_name,' ',last_name) as name,mail_id FROM complaint natural join citizen";

$result1 = $conn->query($sql1);

$body="Complaint";
$subject="RTO Complaint Update";

if($result1){
echo '<div align="center"><table align="left" border="2"
cellspacing="2" cellpadding="10">

<tr>
<td align="left"><b>Aadhaar No</b></td>
<td align="left"><b>Name</b></td>
<td align="left"><b>Complaint Date</b></td>
<td align="left"><b>Complaint Description</b></td>
<td align="left"><b>Email</b></td>
</tr></div>';

while($row = mysqli_fetch_array($result1)){
$link=$row['mail_id'];
echo '<div align="center"><tr><td align="left">' .
$row['aadhar'] . '</td><td align="left">' .
$row['name'] . '</td><td align="left">' .
$row['cdate'] . '</td><td align="left">' .
$row['cdesc'] . '</td><td align="left">' .
'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td><td align="left"></td></tr></div>';
//echo '</tr>';
}

echo '</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

} else {

							echo ("<script>
							window.alert('Couldn't fetch the data')
							window.location.href='rto_admin.php'
							</script>");

}

mysqli_close($conn);
?>
<br>
</body>
</html>
