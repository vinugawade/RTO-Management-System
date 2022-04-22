<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1 class="title"><b>RTO Maharashtra: License Holders</b></h1></p>
<div class="container-fluid">
    <a class="pull-left" href="./rto_admin.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
<?php
$sql = "SELECT * FROM license";
$result = $conn->query($sql);
$body="body";
$subject="DL Update";
if($result){
	echo '<div class="container-fluid">
			<table class="table" border="1">
				<tr>
				<th><b>Aadhaar No</b></th>
				<th><b>Name</b></th>
				<th><b>License No</b></th>
				<th><b>COV</b></th>
				<th><b>License Issue Date</b></th>
				<th><b>Email</b></th>
				</tr></div>';while($row = mysqli_fetch_array($result)){
	echo '<div><tr><td>' .
	$row['aadhar'] . '</td><td>' .
	$row['name'] . '</td><td>' .
	$row['license_no'] . '</td><td>' .
	$row['cov'] . '</td><td>' .
	$row['license_issue_date'] . '</td><td>' .
	'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td></tr></div>';
}
echo '</table></div>';
} else {
	echo ("<script>
		window.alert('Couldn't fetch the data');
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
