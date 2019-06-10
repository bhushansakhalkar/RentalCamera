<?php
	$name = $_POST["name"];
	$password = $_POST["psw"];
	include("connection.php");
	$res = pg_query($conn,"select * from admin");
	$row = pg_fetch_row($res);
	if(!$res){
		echo "Error";
	}
	else{
		if($row[0]==$name && $row[1]==$password){
			header("location:admin2.php");
		}
		else
			echo "Wrong password";
	} 

?>
