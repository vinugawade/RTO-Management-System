<?php
include("./include/header.php");
include("./include/connect.php");
?>
<body>
  <div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Learner's License Registration</h3>
        <div class="student-grids">
          <div class="col-md-3 student-grid">
<?php
if(isset($_POST['submit'])){
	$q1=implode(',',$_POST['q1']);
	$aad = $_POST['aad'];	$sql="select edate,eid,llr_id FROM llr order by llr_id desc limit 1";
	$result=$conn->query($sql);
	$row=mysqli_fetch_row($result);
	$sql5="select first_name,middle_name,last_name,mail_id from citizen where aadhar=$aad";
	$result5=$conn->query($sql5);
	$row5=mysqli_fetch_row($result5);
	$name = $row5[0] ." ".$row5[1]." ".$row5[2] ;
	$mail_id = $row5[3];
	// $x = '';
	// $x=$row[2]+1;
	$d = ''; $sub = '';
	$d=$row[0];
	$d=date("Y-m-d", strtotime("+1 week"));
	$dayofweek = date('w', strtotime($d));
	if($dayofweek == 'Sunday'){
		$d = date("Y-m-d", strtotime("+1 day"));
	}
	$sub=substr($row[1],1);
	$y=(int)$sub;
	$y=$y+1;
	$sub=(string)$y;
	$eid='e'.$sub;	$sql2 = "select city from address where aadhar='{$aad}'";
	$result2=$conn->query($sql2);
	$row2=mysqli_fetch_row($result2);
	$city=$row2[0];
	$sql3="SELECT rto_address from offices";
	$result3=$conn->query($sql3);
	$row3=mysqli_fetch_row($result3);
	$rto_address = $row3[0];	function generate_password($length){
		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.'0123456789$_';
		$str = '';
		$max = strlen($chars) - 1;
		for ($i=0; $i < $length; $i++)
			$str .= $chars[random_int(0, $max)];
		return $str;
	}
	$pwd=generate_password(10);
	$sql="INSERT INTO llr(aadhar,name,cov,edate,eid,epwd,mail_id) VALUES('$aad','$name','$q1','$d','$eid','$pwd','$mail_id')";
	if (mysqli_query($conn, $sql)){
			echo "<script>window.alert('Record created successfully');</script>";
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>
</div>
<div class="col-md-10">
	<table border ="1" cellpadding="10" cellspacing="5" align="center">
<tr>
  <td align = "center" colspan="2" ><b>EXAM DETAILS</b></td>
</tr>
<tr>
  <td>Exam Date</td>
  <td><?php echo $d ?></td>
</tr>
<tr>
  <td>Exam Id  </td>
  <td><?php echo $eid ?></td>
</tr>
<tr>
<td>Exam password</td>
<td><?php echo $pwd ?></td>
</tr>
<tr>
<td>Exam Venue</td>
<td> <?php echo "  ".$rto_address; ?></td>
</tr>
<tr>
 <td colspan="2">
  <ul>
  <li>Do not share password and ID</li>
  <li>Please be at 10:00 am on given date and venue </li>
  <li>Bring Aadhar card,2 passport size photographs</br>
	<li>DOB proof and Address Proof</li>
  </ul>
 </td>
</tr>
</table>
<p align="center"><a href="./index.php"><h2 align="center">Exit</h2></a></p>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<!--student-->
</div>
</div>
  </body>
<?php
include("./include/footer.php");
?>
</html>