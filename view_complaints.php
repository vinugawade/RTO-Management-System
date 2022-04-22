<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
<p><h1 class="title">RTO Maharashtra: Complaints Table</h1></p>
<div class="container-fluid">
    <a class="pull-left" href="./rto_admin.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
<?php

$sql1 = "SELECT aadhar,cdate,cdesc,concat(first_name,' ',middle_name,' ',last_name) as name,mail_id FROM complaint natural join citizen";
$result = $conn->query($sql1);
$body="Complaint";
$subject="RTO Complaint Update";

if($result){
	echo '<div class="container-fluid">
			<table class="table" border="1">
				<tr>
				<th>Aadhaar No</th>
				<th>Name</th>
				<th>Complaint Date</th>
				<th>Complaint Description</th>
				<th>Email</th>
				</tr></div>';

	while($row = mysqli_fetch_array($result)){
		echo '<div><tr><td>' .
		$row['aadhar'] . '</td><td>' .
		$row['name'] . '</td><td>' .
		$row['cdate'] . '</td><td>' .
		$row['cdesc'] . '</td><td>' .
		'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td></tr></div>';
	}
echo '</table></div>';
} else {
	echo ("<script>
	window.alert('Couldn't fetch the data');
	window.location.href='./rto_admin.php';
	</script>");
}
mysqli_close($conn);
?>
</body>
<?php
include("./include/footer.php");
?>
</html>
