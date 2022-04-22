<?php
include("./include/header.php");
include("./include/connect.php");

if (isset($_GET['submit'])) {
    $aad = $_GET["aad"];
    $r_id = $_GET["r_id"];
    $reg_status = $_GET["reg_status"];
    $vno = "MH07 " . $_GET["vno"];
    $sql = "SELECT * FROM reg WHERE addhar='{$aad}' AND r_id='{$r_id}'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);

    if (mysqli_num_rows($result) > 0) {
        if($row[8] == 0 || $reg_status == 0) {
            $date = Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
            $exp = Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y") + 2));
            $sql1 = "UPDATE reg SET reg_status=$reg_status,reg_issue_date='{$date}',vno='{$vno}',reg_expiry_date='{$exp}' WHERE addhar='{$aad}' AND r_id='{$r_id}'";
            if ($conn->query($sql1) == true) {
                echo ("<script>
									window.alert('Record Updated successfully!!');
									window.location.href='reg_update.php';
								</script>");
            } else {
                echo "Error updating record: " . $conn->error;
            }
					}else if($row[8]==1 || $row[8]==-1 || $row[8]==0) {
            echo ("<script>
							window.alert('Already updated!!');
							window.location.href='reg_update.php';
						</script>");
        }
    } else {
        echo ("<script>
			window.alert('Registration entry not found');
			window.location.href='reg_update.php';
			</script>");
    }
}
