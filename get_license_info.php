<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1><b>RTO Maharashtra: License Holders</b></h1></p>
<p><a href="rto_admin.php"><b>Back</b></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="admin_logout.php"><b>Logout</b></a></p>
<?php
session_start();
$username=$_SESSION['username'];

mysqli_select_db($conn,"rto_db");
$sql1 = "SELECT aadhar,name,license_no,cov,license_issue_date,mail_id FROM license";
$result1 = $conn->query($sql1);
$body="body";
$subject="DL Update";

if($result1){
echo '<div align="center"><table align="left" border="2"
cellspacing="2" cellpadding="10">

<tr>
<td align="left"><b>Aadhaar No</b></td>
<td align="left"><b>Name</b></td>
<td align="left"><b>License No</b></td>
<td align="left"><b>COV</b></td>
<td align="left"><b>License Issue Date</b></td>
<td align="left"><b>Email</b></td>
</tr></div>';

while($row = mysqli_fetch_array($result1)){
$link=$row['mail_id'];
echo '<div align="center"><tr><td align="left">' .
$row['aadhar'] . '</td><td align="left">' .
$row['name'] . '</td><td align="left">' .
$row['license_no'] . '</td><td align="left">' .
$row['cov'] . '</td><td align="left">' .
$row['license_issue_date'] . '</td><td align="left">' .
'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td><td align="left"></td></tr></div>';
}

echo '</table>';

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
<?php
include("./include/footer.php");
?>
</html>
