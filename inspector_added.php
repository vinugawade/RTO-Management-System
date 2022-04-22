<?php
				session_start();
				$username=$_SESSION['username'];include("./include/connect.php");
				if (mysqli_connect_errno()){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				if(isset($_POST['submit'])){
					$password=$_POST["password"];
					$username=$_POST["username"];
					$privilege=strtoupper($_POST["privilege"]);
					$sql="insert into inspector(username,password,privilege) values ('$username','$password','$privilege')";
					$result = $conn->query($sql);
					if (mysqli_affected_rows($conn)==1) {
								echo ("<script>
								window.alert('Inspector added successfully!!');
								window.location.href='./rto_admin.php';
								</script>");
					}
					else
					{
						echo ("<script>
								window.alert('Error adding Inspector!!');
								window.location.href='./rto_admin.php';
								</script>");
					}
				}?>