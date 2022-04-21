<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
	<div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Vehicle Registration</h3>
				<div class="container-fluid">
    <a class="pull-left" href="./click_registration.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
</div>
        <div class="student-grids">
          <div class="col-md-8 student-grid">
			<?php
					$aad=$_GET["aad"];
					$sql = "SELECT * FROM citizen where aadhar='{$aad}'";
					$result = $conn->query($sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<p><b>&emsp; &emsp; Aadhaar number: " . $aad . "<br>";
							echo "<p>&emsp; &emsp; Name: " . $row["first_name"] ." ".$row["middle_name"]." ".$row["last_name"] . "<br>";
							echo "<p>&emsp; &emsp; Date of birth: " . $row["dob"] . "<br>";
							$dob=$row["dob"];
						}
					}
					else {
						echo "0 results";
					}
					$sql1 = "SELECT * FROM reg where addhar='{$aad}'";
					$result1 = $conn->query($sql1);
					$row1=mysqli_fetch_row($result1);
					if (mysqli_num_rows($result1) > 0){
						if($row1[8]==1){ // index 8 for reg_status column
							echo "<br>&emsp; &emsp;Your Vehicle Registration Status: Approved";
						}else{
							echo "<br>&emsp; &emsp;Your Vehicle Registration Status: Not Approved";
						}
					}else{
						echo "<br><br>&emsp; &emsp; You have not applied for Vehicle Registration";
					}
					$age = floor((time() - strtotime($dob)) / 31556926);
					if($age<18){
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