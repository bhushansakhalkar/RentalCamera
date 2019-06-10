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
}
</style>
</head>
<body>
	<div class="head">
  <img src="photogear.png" height="100px" width="90%">
  </div>
<form>
    		<h1>Please choose from one of the operations</h1>
            <select name='operations' style='font-size:30px;'>
            <option>Insert</option>
            <option>Delete</option>
            <option>Order Details</option>
            </select><br><br><br><br><br>
            <input type='submit' style='font-size:20px;'>
       </form>
    </div>
    <div class="main">
    	<form action="update.php" style="padding-top: 40px">
</body>
</html>
	    		<?php
    				error_reporting(E_ERROR | E_PARSE);
    					if($_GET["operations"]=="Insert"){
    						echo "<h1>Please Insert the data You wish to add</h1>";
    						echo "<h3>";
    						echo "<label>Enter product id:<input type='text' name='ipid' ></label><br>";
							echo"<label>Enter product name:<input type='text' name='ipname'></label><br>";
							echo"<label>Enter product rent:<input type='text' name='ipprice' ></label><br>";
							echo "<label>Enter image location/name:<input type='text' name='ipimg'></label><br>";
							echo "<label>Enter product description:<input type='text' name='ipdescription' id='p'></label><br>";
							echo "<input type='submit' name='Insert' style='font-size:20px';>";
							echo "</h3>";
    					}
    					 else if($_GET["operations"]=="Delete"){
    						echo "<h1>Please enter the product key to delete that product</h1>";
    						echo "<h1><label>Enter product id:<input type='text' name='dpid' ></label><br></h1>";
    						echo "<input type='submit' name='Insert' style='font-size:20px';>";
    					}
    					else if($_GET["operations"]=="Order Details"){
    						include("connection.php");
							$res2 = pg_query($conn,"select * from bill");
							$col = pg_fetch_all_columns($res2,0);
							$column = pg_fetch_all_columns($res2,2);
							$column1 = pg_fetch_all_columns($res2,3);
							$column2 = pg_fetch_all_columns($res2,4);
							echo "<table border='4'>";
							echo "<tr><td>Bill no</td><td>Customer Name</td><td>Product name</td><td>Rent Paid</td></tr>";
							for($i=0;$i<count($column1);$i++){
							$res = pg_query($conn,"select * from customer where phoneno='$column[$i]'");
							$row = pg_fetch_row($res);
							echo "<tr><td>".$col[$i]."</td><td>".$row[0]."</td><td>".$column1[$i]."</td><td>".$column2[$i]."</td></tr>";	
							}
							echo "</table><br><br>";
					    }
					    
					      
?>