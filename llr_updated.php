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
					$llr_id=$_GET["llr_id"];
					$llr_status=$_GET["llr_status"];
					$sql="select llr_id,llr_status from LL where aadhar='$aad' and llr_id='$llr_id'";


					$result = $conn->query($sql);

					$row2=mysqli_fetch_row($result);

					if (mysqli_num_rows($result) > 0) {
						if($row2[1]==0){
							$date=Date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")))."<br>";
							$sql1="update LL set llr_status=$llr_status,llr_issue_date='$date' where aadhar='$aad' and llr_id='$llr_id'";
							if($conn->query($sql1)==TRUE){
								echo ("<script>
								window.alert('Record Updated successfully!!')
								window.location.href='llr_update.php'
								</script>");
							}
							else
							{
								echo "Error updating record: " . $conn->error;
							}

						}
						else if($row2[1]==1 || $row2[1]==-1){
							echo ("<script>
							window.alert('Already updated!!')
							window.location.href='llr_update.php'
							</script>");
						}
					}
					else {
							echo ("<script>
							window.alert('LL entry not found')
							window.location.href='llr_update.php'
							</script>");
					}
				}
?>