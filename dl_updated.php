<?php
include("./include/connect.php");
if (isset($_GET['submit'])) {
    $aad = $_GET["aad"];
    $dl_id = $_GET["dl_id"];
    $dl_status = $_GET["dl_status"];

    $sql = "SELECT dl_id,dl_status,name,cov,mail_id FROM dl WHERE aadhar='{$aad}' AND dl_id='{$dl_id}'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
    $name = $row[2];
    $cov = $row[3];
    $mail_id = $row[4];
    if (mysqli_num_rows($result) > 0) {
        if ($row[1] == 0 || in_array($dl_status,["1","0","-1"])) {
            $date = Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
            $sql1 = "UPDATE dl SET dl_status='{$dl_status}', dl_issue_date='{$date}' WHERE aadhar='{$aad}' AND dl_id='{$dl_id}'";
            if ($dl_status == 1) {
                $date = Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
                $sql6 = "SELECT license_no FROM license";
                $result6 = $conn->query($sql6);
                $row1 = mysqli_fetch_row($result6);
                $strnum = (string) rand(1000,9999);
                $lno = 'MH 07 ' . $strnum;
                $exp = Date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y") + 2));

                $sql7 = "INSERT INTO license(aadhar,name,license_no,cov,license_issue_date,license_expiry_date,mail_id) VALUES ('{$aad}','{$name}','{$lno}','{$cov}','{$date}','{$exp}','{$mail_id}')";

								if ($conn->query($sql1) == true && $conn->query($sql7) == true) {
                    echo ("<script>
											window.alert('Record Updated successfully!!');
											window.location.href='./get_dl_info.php';
										</script>");
                } else {
                    echo "Error updating record-1: " . $conn->error;
                }
            }
							if($conn->query($sql1)==true){
								echo ("<script>
									window.alert('Record Updated successfully!!');
									window.location.href='./get_dl_info.php';
								</script>");
            } else {
                echo "Error updating record-2: " . $conn->error;
            }
        }
    } else {
        echo ("<script>
								window.alert('DL entry not found')
								window.location.href='./dl_update.php'
							</script>");
    }
}
