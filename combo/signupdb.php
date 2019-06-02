<?php
if(isset($_POST['submit'])){
	include_once('connect.php');
	$n=$_POST['username'];
	$p=$_POST['password'];
	$rp=$_POST['repeatpassword'];
	
	$sql="INSERT INTO login(username,password,repeatpassword) VALUES('$n','$p','$rp')";
	$res=mysqli_query( $conn , $sql ) or die(mysqli_errno().'='.mysqli_error());
	if($res==true)
	{
		header('location:play.php');
		exit();
	}
	else{
		echo "unable to insert.".mysqli_error();
	}
}
else
{
	header("index.php");
}
?>