<?php
include("./include/connect.php");
session_start();
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($conn, "rto_db");
if(isset($_POST['submit'])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select username from admin where username='{$username}' and password='{$password}'";
    $result = $conn->query($sql);
    $row2=mysqli_fetch_row($result);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        echo ("<script>
		window.alert('Welcome RTO Admin')
		window.location.href='rto_admin.php'
		</script>");
    } else {
        echo ("<script>
		window.alert('Invalid Credentials')
		window.location.href='admin_login.php'
		</script>");
    }
}
?>
