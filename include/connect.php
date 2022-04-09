<?php
$conn = mysqli_connect('localhost', 'root', 'Admin@123');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'rto_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
