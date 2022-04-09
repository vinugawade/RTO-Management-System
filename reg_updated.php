<?php
				session_start();
				$username=$_SESSION['username'];

include("./include/connect.php");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"rto_db");
				if(isset($_GET['submit'])){
					$aad=$_GET["aad"];
					$r_id=$_GET["r_id"];
					$reg_status=$_GET["reg_status"];
					$vno = $_GET["vno"];
					$sql="select r_id,reg_status from reg where aadhar='$aad' and r_id='$r_id'";


					$result = $conn->query($sql);

					$row4=mysqli_fetch_row($result);

					if (mysqli_num_rows($result) > 0) {
						if($row4[1]==0){
							$date=Date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")))."<br>";
							$exp = Date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")+2))."<br>";
							$sql1="update reg set reg_status=$reg_status,reg_issue_date='$date',vno='$vno',reg_expiry_date='$exp'              where aadhar='$aad' and r_id='$r_id'";
							if($conn->query($sql1)==TRUE){
								echo ("<script>
								window.alert('Record Updated successfully!!')
								window.location.href='reg_update.php'
								</script>");
							}
							else
							{
								echo "Error updating record: " . $conn->error;
							}

						}
						else if($row4[1]==1 || $row4[1]==-1){
							echo ("<script>
							window.alert('Already updated!!')
							window.location.href='reg_update.php'
							</script>");
						}
					}
					else {
							echo ("<script>
							window.alert('Registration entry not found')
							window.location.href='reg_update.php'
							</script>");
					}
				}
?>