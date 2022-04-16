<?php
include("./include/connect.php");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_GET['submit'])) {
    $aad=$_GET["aad"];
    $llr_status=$_GET["llr_status"];
    $sql="select llr_status FROM llr where aadhar='{$aad}'";
    $result = $conn->query($sql);
    $row2=mysqli_fetch_row($result);
    if (mysqli_num_rows($result) > 0) {
        if($row2[0] == 0 || $llr_status == 0) {
            $date=Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")))."<br>";
            $sql1="update llr set llr_status='{$llr_status}', llr_issue_date='{$date}' where aadhar='{$aad}'";
            if($conn->query($sql1)==true) {
                echo ("<script>
                        window.alert('Record Updated successfully!!')
                        window.location.href='./llr_update.php'
                    </script>");
            }else{
                echo "Error updating record: " . $conn->error;
            }
        }else if($row2[0]==1 || $row2[0]==-1 || $row2[0]==0) {
            echo ("<script>
                    window.alert('Already updated!!<?php echo $llr_status; ?>')
                    window.location.href='./llr_update.php'
				</script>");
        }
    }else{
        echo ("<script>
                window.alert('LL entry not found');
                window.location.href='./llr_update.php'
            </script>");
    }
}
?>