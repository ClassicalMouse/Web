<?php
include("login.php");
    $username = $_POST["username"];
    $upassword = $_POST["upassword"];
    $trackid = $_POST["trackid"];
    $ptdate = $_POST["ptdate"];
    
    $dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm")
    	or die('Could not connect: ' . pg_last_error());
    $querypt1="INSERT INTO playtrack (username,trackid,ptdate) values('$username','$trackid','$ptdate');";
    $resultpt1=pg_query($querypt1) or die('Query failed: ' . pg_last_error());   


?>