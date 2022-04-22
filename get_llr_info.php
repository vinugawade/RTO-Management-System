<?php
include("./include/header.php");
include("./include/connect.php");
session_start();
$role = @$_SESSION['role'];
?>
<body>
<p><h1 class="title"><b>RTO Maharashtra: LL Table</b></h1></p>
<div class="container-fluid">
    <a class="pull-left" href="<?php echo ($role == 'admin') ? './rto_admin.php' : './llr_inspector.php' ?>"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
<?php
$sql = "SELECT aadhar,name,cov,llr_id,llr_status,mail_id FROM llr";
$result = $conn->query($sql);
$body="Hello! We are RTO Officers,";
$subject="LL Update";
if($result) {
    echo '<div class="container-fluid">
        <table class="table" border="1">
        <tr>
        <th>Aadhaar No</th>
        <th>Name</th>
        <th>COV</th>
        <th>LL ID</th>
        <th>LL Status</th>
        <th>Email</th>
        </tr></div>';
    while($row = mysqli_fetch_array($result)){
        $status = ($row['llr_status']==1) ? "Passed" : (($row['llr_status']==0) ? "Pending" : "Rejected");
        echo '<tr><td>' .
        $row['aadhar'] . '</td><td>' .
        $row['name'] . '</td><td>' .
        $row['cov'] . '</td><td>' .
        $row['llr_id'] . '</td><td>' .
        $status . '</td><td>' .
        '<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td></tr>';
    }
    echo '</table></div>';
} else {
	echo ("<script>
        window.alert('Couldn't fetch the data');
        window.location.href='./llr_inspector.php'
	</script>");
}
mysqli_close($conn);
?>
</body>
<?php
include("./include/footer.php");
?>
</html>
