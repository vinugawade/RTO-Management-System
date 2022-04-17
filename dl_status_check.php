<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
    <div class="content">
    <div class="student-w3ls">
      <div class="container">
				<h3 class="title">Driver's License Status</h3>
				<div class="container-fluid">
					<a class="pull-left" href="./dl_status.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
					<a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
			</div>
        	<div class="student-grids">
          	<div class="col-md-10 student-grid">
<?php
$aad = $_GET["aad"];
$sql = "SELECT * FROM citizen where aadhar='{$aad}'";
$sql1 = "SELECT * FROM dl where aadhar='{$aad}'";
$result2 = $conn->query($sql1);
$row2 = mysqli_fetch_row($result2);
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><b>&emsp; &emsp; Aadhaar number: " . $aad . "<br>";
    echo "<p>&emsp; &emsp; Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
    echo "<p>&emsp; &emsp; Date of birth: " . $row["dob"] . "<br>";
    $dob = $row["dob"];
	}
} else {
    echo "0 results";
}

if (mysqli_num_rows($result2) > 0) {
    if ($row2[1] == 1) {
        echo "<br><br><br>&emsp; &emsp;Your DL Status: Approved";
    } else if ($row2[1] == -1) {
        echo "<br><br><br>&emsp; &emsp;Your DL Status: Rejected, apply for DL again!!";
    } else {
        echo "<br><br><br>&emsp; &emsp;Your DL Status: Not yet approved";
    }
} else {
    echo "<br><br>&emsp; &emsp; You have not applied for DL";
}

$age = floor((time() - strtotime($dob)) / 31556926);
if ($age < 18) {
	echo ("<script>
		window.alert('Not eligible')
		window.location.href='./index.php'
	</script>");
}
?>
</div>
</div>
</div></div></div>
</body>
<?php
include("./include/footer.php");
?>
</html>