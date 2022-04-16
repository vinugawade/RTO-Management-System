<?php
include("./include/header.php");
?>
<style>
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	align: center;
}button {
    background-color: #041793;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}button:hover {
    opacity: 0.8;
}.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}.imgcontainer {
    text-align: center;
    margin: 24px 24px 12px 24px;
}img.avatar {
    width: 20%;
    border-radius: 50%;
}.container {
    padding: 16px;
}span.psw {
    float: right;
    padding-top: 16px;
}/* Change styles for span and cancel button on extra small screens */
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
		<h2><p align="center">Remove Inspector</p></h2><form action="inspector_removed.php" method="post" align="center">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	<br>
	<label><b>Privilege</b></label>
    <input type="text" placeholder="LL / DL / REG" name="privilege" required>
	<br><br>    <button type="submit" name="submit">Submit</button>
  </div></form>
</body>
<?php
include("./include/footer.php");
?>
</html>
