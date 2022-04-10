<?php
include("./include/header.php");
include("./include/connect.php");
?>
<script> function otp(){
  window.alert("Comlaint filed successfully");
}
</script>
<body>
  <div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Complaint</h3>
        <div class="student-grids">
          <div class="col-md-6 student-grid">
            <form  method="post">
                <br><br><br>
                &emsp;&emsp;&emsp;Aadhar number: <input type="text" name="aad" pattern="^\d{12}$" required><br><br>
                &emsp;&emsp;&emsp;Compliant Description:<br>&emsp;&emsp;&emsp; <textarea rows="5" cols="50" name="cdesc" ></textarea><br><br>
                &emsp;&emsp;&emsp;<button type="submit"  name="submit" onclick="return otp()" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <div class="col-md-6 student-grid">
      <img src="images/comp.jpg" class="img-responsive">
    </div>

    <div class="clearfix"></div>
  </div>
</div>
</div>
<!--student-->
</div>
<!--content-->
</body>
<?php
include("./include/footer.php");
?>
</html>
<?php
mysqli_select_db($conn, "rto_db");
if(isset($_POST['submit'])) {
    $q1=$_POST['aad'];
    $com=$_POST['cdesc'];
    $date = date('Y-m-d');
    echo $date;
    $sql="INSERT INTO complaint(aadhar,cdate,cdesc) VALUES('$q1','$date','$com')";
    $results2=mysqli_query($conn, $sql);
    if(!$results2) {
          echo "<script>alert('unsuccessfull');</script>";
    }
}
?>