<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1><b><u>RTO Maharashtra: License Holders</u></b></h1></p>
<p><a href="rto_admin.php"><b>Back</b></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="admin_logout.php"><b>Logout</b></a></p>
<?php
$sql1 = "SELECT aadhar,name,license_no,cov,license_issue_date,license_expiry_date,mail_id FROM license where DATEDIFF(license_expiry_date,CURDATE())<=30";
$result1 = $conn->query($sql1);
$subject="DL Update";if($result1){
echo '<div><table align="left" border="2"
cellspacing="2" cellpadding="10"><tr>
<td align="left"><b>Aadhaar No</b></td>
<td align="left"><b>Name</b></td>
<td align="left"><b>License No</b></td>
<td align="left"><b>COV</b></td>
<td align="left"><b>License Issue Date</b></td>
<td align="left"><b>License Expiry Date</b></td>
<td align="left"><b>Email</b></td>
</tr></div>';while($row = mysqli_fetch_array($result1)){
$body='Hello,'.'Your Driver\'s License with DL No '.$row['license_no'].' will expire within a month. '.'Please visit nearest RTO Office to renew your license. '.' - RTO Maharashtra';
$link=$row['mail_id'];
echo '<div><tr><td align="left">' .
$row['aadhar'] . '</td><td align="left">' .
$row['name'] . '</td><td align="left">' .
$row['license_no'] . '</td><td align="left">' .
$row['cov'] . '</td><td align="left">' .
$row['license_issue_date'] . '</td><td align="left">' .
$row['license_expiry_date'] . '</td><td align="left">' .
'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td><td align="left"></td></tr></div>';
}echo '</table>';} else {
	echo ("<script>
	window.alert('Couldn't fetch the data')
	window.location.href='rto_admin.php'
	</script>");
}
mysqli_close($conn);
?>
</body>
<?php
include("./include/footer.php");
?>
</html>
