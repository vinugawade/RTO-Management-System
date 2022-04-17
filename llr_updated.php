<?php
include("./include/connect.php");
if(isset($_GET['submit'])) {
    $aad=$_GET["aad"];
    $llr_status=$_GET["llr_status"];
    $sql="SELECT llr_status FROM llr where aadhar='{$aad}'";
    $result = $conn->query($sql);
    $row=mysqli_fetch_row($result);
    if (mysqli_num_rows($result) > 0) {
        if($row[0] == 0 || in_array($llr_status,["1","0","-1"])) {
            $date=Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
            $sql1="update llr set llr_status='{$llr_status}', llr_issue_date='{$date}' where aadhar='{$aad}'";
            if($conn->query($sql1)==true) {
                echo ("<script>
                        window.alert('Record Updated successfully!!')
                        window.location.href='./get_llr_info.php'
                    </script>");
            }else{
                echo "Error updating record: " . $conn->error;
            }
        }
    }
    }else{
        echo ("<script>
                window.alert('LL entry not found');
                window.location.href='./llr_update.php'
            </script>");
    }
?>