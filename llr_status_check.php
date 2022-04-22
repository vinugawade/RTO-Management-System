<?php
include ("./include/header.php");
include ("./include/connect.php");
?>
<body>
	<div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Learner's License Registration</h3>
        <div class="student-grids">
          <div class="col-md-10 student-grid">
<?php
$aad = $_GET["aad"];
$_SESSION['aadhar'] = $aad;
$dob = '';
$sql = "SELECT first_name,middle_name,last_name,dob FROM citizen WHERE aadhar='{$aad}'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><b>&emsp; &emsp; Aadhar number: " . $aad . "<br>";
        echo "<p>&emsp; &emsp; Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
        echo "<p>&emsp; &emsp; Date of birth: " . $row["dob"] . "<br>";
        $dob = $row["dob"];}
}else{
    echo ("<script>
            window.alert('User Not Registered. Please Register First.');
            window.location.href='./customer.php';
        </script>");
}

$sql1 = "SELECT aadhar,llr_status FROM llr where aadhar='{$aad}' order by llr_id desc limit 1";
$result1 = $conn->query($sql1);
$row1 = mysqli_fetch_row($result1);
if (mysqli_num_rows($result1) > 0) {
    if ($row1[1] == 1) {
        echo "<br><br><br>&emsp; &emsp;Your LL Status: Approved";
        echo "&emsp; &emsp;<a href=./print_llr.php?aadhaar=". $aad .">Print</a>";
    } else if ($row1[1] == -1) {
        echo "<br><br><br>&emsp; &emsp;Your LL Status: Rejected, apply for LL again!!";
    } else {
        echo "<br><br><br>&emsp; &emsp;Your LL Status: Not yet approved";
    }
} else {
    echo "<br><br>&emsp; &emsp; You have not applied for LL";
}

$age = floor((time() - strtotime($dob)) / 31556926);

if ($age < 18) {
	echo ("<script>
		window.alert('Not eligible');
		window.location.href='./index.php';
	</script>");
}
?>
		</div>
		</div>
		</div>
	</div>
	</div>
		</body>
<?php
include ("./include/footer.php");
?>
</html>