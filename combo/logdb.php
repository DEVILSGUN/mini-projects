	<?php
if(isset($_REQUEST['submit']))
{
	include_once('connect.php');

//get values from the login.php files

$username= $_REQUEST['username'];
$password= $_REQUEST['password'];
if($username==admin&&$password==admin)
{
	header("location:add.php");
}
else
{
$sql="SELECT * from login where username ='$username' && password = '$password'";
$res=mysqli_query( $conn , $sql ) or die(mysqli_errno().'='.mysqli_error());
$row=mysqli_num_rows($res);
if($row==true)
{
	header("location:play.php");
	echo "error";
}
else
{
	header("location:index.php");

}
}
}
?>