<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1 class="title">RTO Maharashtra: Registration Expiry Table</h1></p>
<div class="container-fluid">
    <a class="pull-left" href="./rto_admin.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
<?php
$sql = "SELECT * FROM reg where DATEDIFF(reg_expiry_date,CURDATE())<=30";
$result = $conn->query($sql);
$subject="Vehicle Registration Update";
if($result){
	echo '<div class="container-fluid">
			<table class="table" border="1">
				<tr>
				<th>Aadhaar No</th>
				<th>Name</th>
				<th>COV</th>
				<th>Vehicle No</th>
				<th>Registration Issue Date</th>
				<th>Registration Expiry Date</th>
				<th>Email</th>
				</tr></div>';
while($row = mysqli_fetch_array($result)){
	$body='Hello,'.'Your Registration for vehicle with No '.$row['vno'].' will expire within a month. '.'Please visit nearest RTO Office to renew registration of your vehicle '.' - RTO Maharashtra';
	echo '<div><tr><td>' .
	$row['aadhar'] . '</td><td>' .
	$row['name'] . '</td><td>' .
	$row['cov'] . '</td><td>' .
	$row['vno'] . '</td><td>' .
	$row['reg_issue_date'] . '</td><td>' .
	$row['reg_expiry_date'] . '</td><td>' .
	'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td></tr></div>';
}
echo '</table></div>';
} else {
	echo ("<script>
		window.alert('Couldn't fetch the data')
		window.location.href='./rto_admin.php'
	</script>");
}
mysqli_close($conn);
?>
</body>
<?php
include("./include/footer.php");
?>
</html>
