<?php
	include("connection.php");
	//pg_query($conn,"insert into cart values ")
	if(isset($_GET["rent"]) == '1'){
		$name = $_GET["name"];
		$res = pg_query($conn,"Select * from products where pname='".$name."'");
		$row = pg_fetch_row($res);
		$rent = $row[4];
		echo "Name".$row[1];
		echo "Your rent will be<br>";
		$trent = $rent;
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='2') {
		echo "Your rent will be<br>";
		$trent = ($rent*2);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='3') {
		echo "Your rent will be<br>";
		$trent = ($rent*3);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='4') {
		echo "Your rent will be<br>";
		$trent = ($rent*4);
		echo "$trent";
	}else if (isset($_GET['rent'])=='5') {
		echo "Your rent will be<br>";
		$trent = ($rent*5);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='6') {
		echo "Your rent will be<br>";
		$trent = ($rent*6);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='7') {
		echo "Your rent will be<br>";
		$trent = ($rent*7);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='8') {
		echo "Your rent will be<br>";
		$trent = ($rent*8);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='9') {
		echo "Your rent will be<br>";
		$trent = ($rent*9);
		echo "$trent";
	}
	else if (isset($_GET['rent'])=='10') {
		echo "Your rent will be<br>";
		$trent = ($rent*10);
		echo "$trent";
	}
	else 
		echo "please select some duration";
?>