<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
  <div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Vehicle Registration</h3>
				<div class="container-fluid">
    <a class="pull-left" href="./click_registration.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
</div>
        <div class="student-grids">
          <div class="col-md-3 student-grid">
<?php
if(isset($_POST['submit'])){
	$q1=implode(',',$_POST['q1']);
	$aad = $_POST['aad'];
	$model = $_POST['model'];
	$company = $_POST['company'];	$sql="select rdate,r_id from reg order by r_id desc limit 1";
	$result=$conn->query($sql);
	$row=mysqli_fetch_row($result);	$sql5="select first_name,middle_name,last_name,mail_id from citizen where aadhar='{$aad}'";
	$result5=$conn->query($sql5);
	$row5=mysqli_fetch_row($result5);
	$name = $row5[0] ." ".$row5[1]." ".$row5[2] ;
	$mail_id = $row5[3];	$sql2 = "select city from address where aadhar='{$aad}'";
	$result2=$conn->query($sql2);
	$row2=mysqli_fetch_row($result2);
	$city=$row2[0];
	$sql3="SELECT rto_address from offices";
	$result3=$conn->query($sql3);
	$row3=mysqli_fetch_row($result3);
	$rto_address = $row3[0];	$d=date("Y-m-d", strtotime("+1 week"));
	$dayofweek = date('w', strtotime($d));
	if($dayofweek == 'Sunday')
	$d = date("Y-m-d", strtotime("+1 day"));
	$sql="INSERT INTO reg(addhar,name,cov,model,company,rdate,mail_id) VALUES('$aad','$name','$q1','$model','$company','$d','$mail_id')";
	if (mysqli_query($conn, $sql)){
			echo "<script>window.alert('Record created successfully')</script>";
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>
</div>
<div class="col-md-10">
	<table border ="1" cellpadding="10" cellspacing="5" align="center">
<tr>
  <td align = "center" colspan="2" ><b>VERIFICATION DETAILS</b></td>
</tr><tr>
  <td>Verification Date</td>
  <td><?php echo $d ?></td>
</tr>
<tr>
<td>Verification Venue</td>
<td> <?php echo "  ".$rto_address ?></td>
</tr><tr>
 <td colspan="2">  <p>
  Please be at 10:00 am on given date and venue </br>
  Bring Aadhar card,2 passport size photographs</br>DOB proof and Address Proof,and vehicle to be registered</br>
  </p>
 </td>
</tr>
</table>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<!--student-->
</div>
  </body>
<?php
include("./include/footer.php");
?>
</html>