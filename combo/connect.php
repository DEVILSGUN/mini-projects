<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="quiz";
$conn=@mysqli_connect($host,$user,$pwd);
$db=@mysqli_select_db($conn , $dbname);
?>