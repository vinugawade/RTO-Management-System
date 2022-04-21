<?php
include("./include/header.php");
include("./include/connect.php");
?>
<script>
  function msg() {
    window.alert("Complaint filled successfully");
    window.location.href = './index.php'
  }
</script>

<body>
  <div class="content">
    <!--student-->
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Complaint</h3>
        <div class="container-fluid">
          <a class="pull-left" href="./index.php"><i class="glyphicon glyphicon-arrow-left"
              aria-hidden="true"></i><b>Back</b></a>
        </div>
        <div class="student-grids">
          <div class="col-md-6 student-grid">
            <form method="post">
              <br>
              <input type="text" class="form-control" placeholder="Aadhaar Number" name="aad" pattern="^\d{12}$"
                required>
              <br>
              <textarea rows="5" cols="50" class="form-control" placeholder="Compliant Description"
                name="cdesc"></textarea>
              <br><br>
              <button type="submit" name="submit" onclick="return msg()" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-6 student-grid">
            <img src="./images/comp.jpg" class="img-responsive">
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
if(isset($_POST['submit'])) {
    $q1=$_POST['aad'];
    $com=$_POST['cdesc'];
    $date = date('Y-m-d');
    $sql="INSERT INTO complaint(aadhar,cdate,cdesc) VALUES('{$q1}','{$date}','{$com}')";
    $results=mysqli_query($conn, $sql);
    if(!$results) {
      echo "<script>alert('unsuccessfull');</script>";
    }
}
?>