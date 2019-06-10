<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <style>
	  .form{
	  	text-align: center;
	  }
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
  <h4>Please Enter your rental duration</h4>
			<form action="" method="POST">
			<select name='rent'>
			<?php 
				$No =  array("1","2","3","4","5","6","7","8","9","10");
				foreach ($No as $No1) {
					if(isset($_REQUEST["rent"])&&$_REQUEST["rent"]===$No1){
						echo "<option value='".$No1."'selected >".$No1."</option>";
					}else{
						echo "<option value='" . $No1 . "'>" . $No1 . "</option>";
					}
				}
			?>
			</select>
			<input type='submit'>
			</form>
		    
<?php
error_reporting(E_ERROR | E_PARSE);
	echo "<br><br>";
	include("connection.php");
	$day = $_POST["rent"];
	$name = $_GET["name"];
	if($day == "1"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*1);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "2"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$des = $row[2];
		$img = $row[3];
		$pid = $row[0];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*2);
		echo "<h1>Your total rent will be Rs $trent</h1>";	
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "3"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*3);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "4"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*4);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "5"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*5);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "6"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*6);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "7"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*7);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "8"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*8);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "9"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs ".$rent."</h1><br>";
		$trent = ($rent*9);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	if($day == "10"){
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		$pid = $row[0];
		$des = $row[2];
		$img = $row[3];
		echo "<img src='".$img."' width='200px' height='200px'></img><br>";
		echo "<h1>Name: ".$row[1]."</h1><br>";
		echo "<h1>Description:".$des."</h1><br>";
		echo "<h1>Rent per day is Rs".$rent."</h1><br>";
		$trent = ($rent*10);
		echo "<h1>Your total rent will be Rs $trent</h1>";
		session_start();
		$_SESSION["rent"]= $trent;
		$cno = $_SESSION["phoneno"];
		echo "<button onclick=location.href='cart.php?cno=".$cno."&pid=".$pid."'>Add to Cart</button>&nbsp&nbsp&nbsp";
		echo "<button onclick=location.href='welcome.php'>Back</button>";
	}
	echo "</div>";
	
?>