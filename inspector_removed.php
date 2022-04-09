<?php
				session_start();
				$username=$_SESSION['username'];

include("./include/connect.php");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"rto_db");
				if(isset($_POST['submit'])){
					$username=$_POST["username"];
					$privilege=$_POST["privilege"];
					$sql="delete from inspector where username='$username' and privilege='$privilege'";
					$result = $conn->query($sql);
					if (mysqli_affected_rows($conn)==1) {
								echo ("<script>
								window.alert('Inspector removed successfully!!')
								window.location.href='rto_admin.php'
								</script>");
					}
					else
					{
						echo ("<script>
								window.alert('Enter existing Inspector data!!')
								window.location.href='rto_admin.php'
								</script>");
					}
				}

?>