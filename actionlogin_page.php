<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <style>
	  
body{
	background-color: lightgrey;
}
.head{
height:15vh;
  width:100%;
  text-align: center;
}
</style>
</head>
<div class="w3-bar w3-border w3-black">
  <a href="#" class="w3-bar-item w3-button w3-right">LogOut</a>
  <a href="#" class="w3-bar-item w3-button w3-right">Cart</a>
  <a href="#" class="w3-bar-item w3-button ">Home</a>
  </div>
<body>

</body>
</html>
<?php
$nm=$_POST["phno"];
$pwd=$_POST["psw"];
include("connection.php");

$res=pg_query($conn,"select * from customer where phoneno=".$nm."");
$r=pg_fetch_array($res);
$name = $r["name"];
if($nm==$r["phoneno"] and $pwd==$r["password"]){
	session_start();
	$_SESSION["name"]=$name;
	$_SESSION["phoneno"]=$nm;
  header("location:welcome.php");
}
else
	echo "<h1>Please insert the correct password</h1><br><br>";
	echo "<a href='login.php'><h1>Click on this link to go back to login</h1></a>";
?>