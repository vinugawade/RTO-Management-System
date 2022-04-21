<?php
include ("./include/header.php");
include ("./include/connect.php");
?>
<body>
  <div class="content">
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Driver's License Registration</h3>
        <div class="container-fluid">
            <a class="pull-left" href="./click_dl.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
            <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
        </div>
        <div class="student-grids">
          <div class="col-md-10 student-grid">
<?php
if (isset($_POST['submit'])) {
    $q1 = implode(',', $_POST['q1']);
    $aad = $_POST['aad'];
    $flag = 0;
    $sql1 = "SELECT * FROM llr WHERE aadhar='{$aad}' ORDER BY llr_id DESC";
    $result1 = $conn->query($sql1);
    $sql2 = "SELECT * FROM citizen WHERE aadhar='{$aad}'";
    $result2 = $conn->query($sql2);
    $row2 = mysqli_fetch_row($result2);
    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
            $llr_issue_date = $row["llr_issue_date"];
            $llr_status = $row["llr_status"];
            $llr_id = $row["llr_id"];
            $cov = $row["cov"];
        }
    } else {
        echo ("<script>
          window.alert('Apply for LL first')
          window.location.href='./applyforllr.php'
        </script>");
    }
    if ($cov != $q1) {
        echo ("<script>
          window.alert('Apply for vehicles for which LL has been approved')
          window.location.href='./applyfordl.php'
        </script>");
    }
    if ($llr_status == -1) {
        echo ("<script>
          window.alert('You did not pass the LL test. Apply for it again.')
          window.location.href='./applyforllr.php'
        </script>");
    }
    if ($llr_status == 0) {
        echo ("<script>
          window.alert('Your LL is not yet approved')
          window.location.href='./index.php'
        </script>");
    }
    $llr_exp_date = floor((time() - strtotime($llr_issue_date)) / 2592000);
    if ($llr_exp_date < 1) {
        echo ("<script>
          window.alert('Apply after one month of LL issued')
          window.location.href='./index.php'
        </script>");
    } else if ($llr_exp_date > 6) {
        echo ("<script>
          window.alert('Your LL has expired. Apply for LL again.')
          window.location.href='./applyforllr.php'
        </script>");
    } else {
      $sql = "SELECT edate,eid,dl_id FROM dl ORDER BY dl_id DESC LIMIT 1";
      $result = $conn->query($sql);
      $flag = 1;
      $row = mysqli_fetch_array($result);
      $d = '';
      $d = @$row[0];
      $d = date("Y-m-d", strtotime("+1 week"));
      $dayofweek = date('w', strtotime($d));
      if ($dayofweek == 'Sunday') {
          $d = date("Y-m-d", strtotime("+1 day"));
      }
      $sub = substr(@$row[1], 1);
      $y = (int) $sub;
      $y = $y + 1;
      $sub = (string) $y;
      $eid = 'e' . $sub;

      $sql5 = "SELECT * FROM citizen WHERE aadhar='{$aad}'";
      $result5 = $conn->query($sql5);
      $row5 = mysqli_fetch_row($result5);
      $name = $row5[0] . " " . $row5[1] . " " . $row5[2];
      $mail_id = $row5[7];
      $sql = "INSERT INTO dl(aadhar,name,cov,edate,eid,mail_id) VALUES('{$aad}','{$name}','{$q1}','{$d}','{$eid}','{$mail_id}')";
      if (mysqli_query($conn, $sql)) {
        echo "<script>window.alert('Record created successfully')</script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql3 = "SELECT rto_address FROM offices";
      $result3 = $conn->query($sql3);
      $row3 = mysqli_fetch_row($result3);
      $rto_address = $row3[0];
    }
}
?>
</div><div class="col-md-10">
  <table border ="1" cellpadding="10" cellspacing="5" align="center">
<tr>
  <td align = "center" colspan="2"><b>DL TEST DETAILS</b></td>
</tr><tr>
  <td>Test Date</td>
  <td><?php echo "  " . $d ?></td>
</tr>
<tr>
  <td>Test ID</td>
  <td><?php echo "  " . $eid ?></td>
</tr>
<tr>
<td>DL Test Venue</td>
<td> <?php echo "  " . $rto_address ?></td>
</tr><tr>
 <td colspan="2">
  <ul>
    <li>Please be at 10:00 am on given date and venue </li>
    <li>Bring Aadhar card,2 passport size photographs</br>DOB proof and Address Proof</li>
  </ul>
 </td>
</tr>
</table>
</div>
</div>
</div>
<!--student-->
</div>
  </body>
<?php
include ("./include/footer.php");
?>
</html>