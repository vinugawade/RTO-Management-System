<?php
require "./include/header.php";
?>
<style>
    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 24px 12px 24px;
    }

    img.avatar {
        width: 20%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>
    <!--content-->
    <div class="content">
        <!--student-->
        <div class="student-w3ls">
            <div class="container">
                <h3 class="title">LL Status Update</h3>
                <div class="container-fluid">
                    <a class="pull-left" href="./llr_inspector.php"><i class="glyphicon glyphicon-arrow-left"
                            aria-hidden="true"></i><b>Back</b></a>
                    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt"
                            aria-hidden="true"></i></a>
                </div>
                <div class="student-grids">
                    <div class="col-md-6 student-grid">
                        <h4>Enter the details of citizen's LL entry</h4>
                        <form action="llr_updated.php" method="get">
                            <br><br>
                            <input type="text" class="form-control" placeholder="Aadhaar Number" name="aad"
                                pattern="^\d{12}$" required>
                            <br>
                            <SELECT name="llr_status" class="form-control">
                                <option value="0">Pending</option>
                                <option value="1">Approve</option>
                                <option value="-1">Reject</option>
                            </select><br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    </form>
</body>
<?php
include("./include/footer.php");
?>

</html>