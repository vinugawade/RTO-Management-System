<?php

// Update below information with your database details.
define('HOSTNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','rto_db');

$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
if (!$conn){
    echo ("<script>
        window.alert('Database Connection Failed. Please follow the step-4 from README file.');
        window.location.href='./index.php';
    </script>");
}
$select_db = mysqli_select_db($conn, DATABASE);
if (!$select_db){
    echo ("<script>
        window.alert('Database Connection Failed. Please follow the step-4 from README file.');
        window.location.href='./index.php';
    </script>");
}
