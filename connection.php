<?php
error_reporting(0);
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "ai_dietician";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo"<script>alert('connection ok');</script>";
        
    }else{
        echo"connection failed".mysql_connection_error();
    }
?>
