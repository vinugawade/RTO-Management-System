<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1 class="title">RTO Maharashtra: DL Table</h1></p>
<div class="container-fluid">
    <a class="pull-left" href="./rto_admin.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
<?php
$sql = "SELECT * FROM dl";
$result = $conn->query($sql);$body="body";
$subject="DL Update";if($result){
	echo '<div class="container-fluid">
		<table class="table" border="1">
			<tr>
			<th>Aadhaar No</th>
			<th>Name</th>
			<th>COV</th>
			<th>DL ID</th>
			<th>DL Status</th>
			<th>Email</th>
			</tr></div>';
	while($row = mysqli_fetch_array($result)){
		$status = ($row['dl_status']==1) ? "Passed" : (($row['dl_status']==0) ? "Pending" : "Rejected");
		echo '<div><tr><td>' .
		$row['aadhar'] . '</td><td>' .
		$row['name'] . '</td><td>' .
		$row['cov'] . '</td><td>' .
		$row['dl_id'] . '</td><td>' .
		$status . '</td><td>' .
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
