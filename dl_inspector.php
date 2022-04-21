<?php
include("./include/header.php");
include("./include/connect.php");
?>
<style>
	input[type=text],
	input[type=password] {
		width: 30%;
		padding: 12px 20px;
		margin: 8px 8px;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		align: center;
	}

	button {
		background-color: #041793;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 30%;
	}

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
	<div class="content">
		<div class="student-w3ls">
			<div class="container">
				<h3 class="title">DL Inspector Page</h3>
				<div class="container-fluid">
    <a class="pull-left" href="./inspector_login.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><b>Back</b></a>
    <a class="pull-right" href="./logout.php"><b>Logout</b><i class="glyphicon glyphicon-share-alt" aria-hidden="true"></i></a>
</div>
				<div class="student-grids">
					<div class="col-md-10 student-grid">
						<p>
						<ul>
							<li><a href="./get_dl_info.php">
									<h4>View DL entry table</h4>
								</a></li>
							<br>
							<li><a href="./dl_update.php">
									<h4>Update DL Status</h4>
								</a></li>
							<br>
						</ul>
						</p>
						</form>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--student-->
	</div>
	</form>
	<!--content-->
</body>
<?php
include("./include/footer.php");
?>
</html>