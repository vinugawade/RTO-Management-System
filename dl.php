<?php
include ("./include/header.php");
include ("./include/connect.php");
?>

<body>
  <div class="content">
    <div class="student-w3ls">
      <div class="container">
        <h3 class="title">Driver's License Registration</h3>
        <div class="student-grids">
          <div class="col-md-3 student-grid">
<?php
			$aad = @$_GET["aad"];
			$sql = "SELECT * FROM citizen where aadhar='{$aad}'";
			$result = $conn->query($sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<p><b>&emsp;&emsp; Aadhaar number: " . $aad . "<br>";
					echo "<p>&emsp; &emsp; Name: " . $row["first_name"] ." ".$row["middle_name"]." ".$row["last_name"] . "<br>";
					echo "<p>&emsp; &emsp; Date of birth: " . $row["dob"] . "<br>";
					$dob=$row["dob"];
				}
			}else{
        echo ("<script>
            window.alert('User Not Registered. Please Register First.')
            window.location.href='./customer.php'
          </script>");
      }
			@$age = floor((time() - strtotime($dob)) / 31556926);
			if($age<18){
				echo ("<script>
					window.alert('Not eligible')
					window.location.href='./index.php'
				</script>");
			}
?>
          </div>
          <div class="col-md-3 student-grid">
            <form method="post" action="./dl_entry.php">
              <input name="aad" type="hidden" id="a" value="<?php echo $_GET["aad"] ?>">
              <p>Select Category of Vehicle</p>
              <p>&emsp; &emsp; &emsp;<input name="q1[]" type="checkbox" id="one" value="LMV">&emsp;LMV</p>
              <p>&emsp; &emsp; &emsp;<input name="q1[]" type="checkbox" id="two" value="MCWG">&emsp;MCWG</p>
              <p>&emsp; &emsp; &emsp;<input name="q1[]" type="checkbox" id="three" value="MCWoG">&emsp;MCWoG</p>
              <p>&emsp; &emsp; &emsp;<input name="q1[]" type="checkbox" id="four" value="HPMV">&emsp;HPMV</p>
              <p>&emsp; &emsp; &emsp;<input name="q1[]" type="checkbox" id="five" value="HGMV">&emsp;HGMV</p>
              <br>&emsp;&emsp;&emsp;<button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-3 student-grid">
            <img src="./images/llr1.jpg" class="img-responsive">
          </div>
          <div class="col-md-3 student-grid">
            <img src="./images/llr2.jpg" class="img-responsive">
          </div>
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
<?php
if (isset($_POST['submit'])) {
    $q1 = implode(',', $_POST['q1']);
    $sql = "SELECT edate,eid,id FROM llr ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
    echo "edate: " . $row;
    $x = $row[2] + 1;
    $d = $row[0];
    $sub = substr($row[1], 1);
    $y = (int) $sub;
    if (!strcmp('e10', $row[1])) {
        $date = date($d);
        $date_arr = explode('-', $date);
        $date2 = Date("Y-m-d", mktime(0, 0, 0, $date_arr[1], $date_arr[2] + 1, $date_arr[0])) . "<br>";
        $eid = 'e01';
        $d = $date2;
    } else {
        $y = $y + 1;
        $z = 0;
        if ($y == 10) {
            $z = 1;
        } else {
            $z = 0;
        }
        $eid = 'e' . $z . $y % 10;
      }
    $sql = "INSERT INTO llr(aadhar,vtype,edate,eid) VALUES('{$aad}','{$q1}','{$d}','{$eid}')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>window.alert('Record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
?>