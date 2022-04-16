<?php
include("./include/header.php");
include("./include/connect.php");
session_start();
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
					$aad=$_GET["aad"];
					$sql = "SELECT first_name,middle_name,last_name,dob FROM citizen where aadhar=$aad";					$_SESSION['aadhar']=$aad;					$sql1 = "SELECT aadhar,llr_status FROM llr where aadhar='{$aad}' order by llr_id desc limit 1";
					$result = $conn->query($sql1);
					$row1=mysqli_fetch_row($result);
					$result = $conn->query($sql);
					if (mysqli_num_rows($result) > 0) {						while($row = mysqli_fetch_assoc($result)) {
							echo "<p><br><br><br>";
							echo "<p><b>&emsp; &emsp; Aadhar number: " . $aad . "<br>";
							echo "<p>&emsp; &emsp; Name: " . $row["first_name"] ." ".$row["middle_name"]." ".$row["last_name"] . "<br>";
							echo "<p>&emsp; &emsp; Date of birth: " . $row["dob"] . "<br>";
							$dob=$row["dob"];						}
					}
					else {
						echo "0 results";
					}
					if (mysqli_num_rows($result) > 0){
						if($row1[1]==1){
							echo "<br><br><br>&emsp; &emsp;Your LL Status: Approved";
							echo "<br>&emsp; &emsp;<a href=print_llr.php><u>Print</u></a>";
						}
						else if($row1[1]==-1){
							echo "<br><br><br>&emsp; &emsp;Your LL Status: Rejected, apply for LL again!!";
						}
						else{
							echo "<br><br><br>&emsp; &emsp;Your LL Status: Not yet approved";
						}
					}else{
						echo "<br><br>&emsp; &emsp; You have not applied for LL";
					}					$age = floor((time() - strtotime($dob)) / 31556926);
					if($age<18)
					{echo ("<script>
							window.alert('Not eligible')
							window.location.href='./index.php'
							</script>");
					}
			?>
		</div>
		</div>
		</div></div></div>
		<p align="center"><a href="./index.php"><h2 align="center">Exit</h2></a></p>
		</body>
<?php
include("./include/footer.php");
?>
		</html>