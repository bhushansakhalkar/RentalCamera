<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
.welcome{
  height:8vh;
  width:100%;
  text-align:center;
  color:White; 
  background-color:black; 
}
.leftsidebar{
  width:20%;
  height: 100vh;
  float: left;
  text-align:center;  
}
.main{
  width:79%;
  height: 100vh;
  float: right;
}
.upperslab{
	width: 100%;
	height: 50vh;
	border-style: solid;

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
	 <div class="welcome">
  	<h1>Welcome &nbsp;<?php session_start(); echo $_SESSION["name"];?></h1>
  	</div>
 
	 <div class='leftsidebar'>
	 	<h4>Enter the product you wish to search</h4>
	 		<form action="search.php">
	 		<input type="text" placeholder="search" name="search"><br>
            <input type="submit">
        	</form>
     		  </div>
	<div class="main">
		<!--<div class="upperslab">-->
			<?php 
			error_reporting(E_ERROR | E_PARSE);
			include("connection.php");
			$res = pg_query($conn,"select * from products");
			$column = pg_fetch_all_columns($res,3);
			$column1 =pg_fetch_all_columns($res,1);
			for($i=0;$i<count($column);$i++){
		echo "<table style='float:left;'>";
		echo "<tr><td><img src=".$column[$i]." width='200px' height='200px' ></img></td></tr>";
		echo "<tr><td><h3>".$column1[$i]."</h3></td></tr>";
		echo "<tr><td><button onclick=location.href='add_to_cart.php?name=".$column1[$i]."'>More Details</button></td></tr>";
		echo "</table>";
     	}
     	?>
	<!--	</div>-->
 	</div>

</body>
</html>