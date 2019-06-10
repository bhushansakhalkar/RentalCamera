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
  <a href="logout.php" class="w3-bar-item w3-button w3-right">LogOut</a>
  <a href="bill.php" class="w3-bar-item w3-button w3-right">Cart</a>
  <a href="welcome.php" class="w3-bar-item w3-button ">Home</a>
</div>
<body>
	<div class="head">
  <img src="photogear.png" height="100px" width="70%">
  </div>
	<h1>Please Enter your duration</h1>
			<form action="day.php">
			<select name="rent">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			</select>
			<input type="submit">
			</form>
</body>
</html>

<?php
error_reporting(E_ERROR | E_PARSE);
	include("connection.php");
	$day = $_GET["day"];
	$search = $_GET["search"];
	session_start();
	$_SESSION["search"]=$search;
	if(isset($search)){
		$res = pg_query($conn,"select * from products where pname='".$search."'");
		$row = pg_fetch_row($res);
		echo "<img src=".$row[3]." width='400' height='400'>";
		echo "<h1>Name:".$row[1]."</h1><br>";

				echo "<button onclick=location.href='add_to_cart.php?name=".$row[1]."&day=".$day."' style='font-size:20px;'>MORE DETAILS</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php' style='font-size:20px;'>Back</button>";
	}
	else 
		echo "No such product exits";

?>
