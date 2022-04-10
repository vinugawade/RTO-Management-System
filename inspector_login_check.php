<?php
include("./include/connect.php");
session_start();
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"rto_db");
				if(isset($_GET['submit'])){
					$username=$_GET["username"];
					$password=$_GET["password"];
					$sql="select id,privilege from inspector where username='$username' and password='$password'";


					$result = $conn->query($sql);

					$row2=mysqli_fetch_row($result);
					if (mysqli_num_rows($result) > 0) {

						$_SESSION['username'] = $username;

						if($row2[1]=='LL'){
							echo ("<script>
							window.alert('Welcome LL Inspector')
							window.location.href='llr_inspector.php'
							</script>");
						}
						else if($row2[1]=='REG'){
							echo ("<script>
							window.alert('Welcome Vehicle Registration Inspector')
							window.location.href='reg_inspector.php'
							</script>");
						}
						else if($row2[1]=='DL'){
							echo ("<script>
							window.alert('Welcome DL Inspector')
							window.location.href='dl_inspector.php'
							</script>");
						}
					}
					else {
							echo ("<script>
							window.alert('Invalid Credentials')
							window.location.href='inspector_login.php'
							</script>");
					}
				}
?>