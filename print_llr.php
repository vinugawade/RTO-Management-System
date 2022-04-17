<?php
include "./include/connect.php";
?>

<body>
<?php
session_start();
$aad = $_SESSION['aadhar'];

$sql1 = "SELECT * from citizen where aadhar='{$aad}'";
$result1 = $conn->query($sql1);
$row1 = mysqli_fetch_row($result1);
$name = ucfirst($row1[0]) . " " . ucfirst($row1[1]) . " " . ucfirst($row1[2]);
$gender = $row1[4];
$image = "./images/anonymous.png";

$sql2 = "SELECT * FROM address WHERE aadhar='{$aad}'";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_row($result2);
$address = $row2[1] . ", " . $row2[2] . ", " . $row2[3];

$sql3 = "SELECT * FROM llr WHERE aadhar='{$aad}' ORDER BY llr_id DESC LIMIT 1";
$result3 = $conn->query($sql3);
$row3 = mysqli_fetch_row($result3);
$llr_issue_date = $row3[3];
$cov = $row3[2];
$llr_expiry_date = date("Y-m-d", strtotime("+6 months", strtotime($llr_issue_date)));
?>

  <br><br>
  <table class="table" border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <td align="center" colspan="3"><b>RTO Maharashtra</br> Learner's License</b></td>
    </tr>
    <tr>
      <td>Aadhar </td>
      <td width="200px">
        <?php echo $aad ?>
      </td>
      <td width="100px" rowspan="3"> <img src="<?php echo $image ?>" height="100px" width="100px"> </td>
    </tr>
    <tr>
      <td>Name </td>
      <td>
        <?php echo $name ?>
      </td>

    </tr>
    <tr>
      <td>COV</td>
      <td>
        <?php echo $cov ?>
      </td>
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="2">
        <?php echo $address ?>
      </td>
    </tr>

    <tr>
      <td>LL Issue Date</td>
      <td colspan="2">
        <?php echo $llr_issue_date ?>
      </td>
    </tr>


    <tr>
      <td>LL Expiry Date</td>
      <td colspan="2">
        <?php echo $llr_expiry_date ?>
      </td>
    </tr>

    <tr>
      <td colspan="3" height=100px align=center>
        <img src="./images/GOVERNMENT-LOGO-1.png" height="100px" width="100px">
      </td>
    </tr>

    <tr>
      <td colspan="3" align="center">
        This is the PROVISIONAL Learner's License
      </td>
    </tr>

  </table>
</body>
</html>