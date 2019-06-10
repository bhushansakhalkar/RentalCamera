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
</body>
</html>
<?php
error_reporting(E_ERROR | E_PARSE);
	include("connection.php");
		$name = $_GET["name"];
		session_start();
		$phn = $_SESSION["phoneno"];
		$res2 = pg_query($conn,"select * from cart where phoneno=".$phn);
		$column = pg_fetch_all_columns($res2,0);
		$column1 = pg_fetch_all_columns($res2,2);
		$column2 = pg_fetch_all_columns($res2,3);
		echo "<table border='1' align=center>";
		$total=null;
		echo "<tr><td><h1>Product name</h1></td><td><h1>Rent</h1></td></tr>";
		for($i=0;$i<count($column1);$i++){
		echo "<tr><td><h4>".$column1[$i]."</h4></td><td><h4>".$column2[$i]."</h4></td><td><h4><button onclick=remove(\"".$column[$i]."\") type='button'>remove</h4></button></td></tr> ";
			$total = $total+$column2[$i];
		}
		
		echo "<tr><td><h2>Total</h2></td><td><h4>".$total."</h4></td></tr>";
		echo "</table><br><br>";
		echo "<h5 style='text-align:center;'><input type='checkbox' name='cash' id='cash'>Cash on delivery<h5><br><br>";
		echo "<button onclick='placeOrder(\"".$name."\")' style='text-align:center; text-align:center; margin:auto; display:block;'>Place Order</button>";
?>
<script>
	function refresh(){
		location.replace("bill.php");
	}
	function placeOrder(pname){
	if(document.getElementById("cash").checked == false){
		alert("Please select a payment method");
	}else{
	var obj = new XMLHttpRequest();
	obj.open("GET","emptycart.php?name="+pname,true);
	obj.send();
	obj.onreadystatechange = function(){
		if(obj.readyState==4 && obj.status==200){
			alert("Order Placed");
			refresh();
			
			}
		}
	}
}
function remove(productId){
    var obj = new XMLHttpRequest();
    obj.open("GET","remove.php?product="+productId,true);
    obj.send();
    obj.onreadystatechange = function(){
      if(obj.readyState == 4 && obj.status==200){
        refresh();

      }
    }
  }
</script>