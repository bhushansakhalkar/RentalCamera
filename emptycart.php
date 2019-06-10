<?php
	include("connection.php");
	session_start();
	$pno = $_SESSION["phoneno"];
	$res = pg_query($conn,"delete from cart where phoneno=".$pno);
	if(!$res){
		echo "hagla";
	}
	else 
		echo "jhala";
	$name = $_GET["name"];
	$res1 = pg_query($conn,"select * from products where pname='".$name."'");
	$row1 = pg_fetch_row($res1);
	$pid = $row1[0];
	session_start();
	$pno = $_SESSION["phoneno"];
	$price = $_SESSION["rent"];
	$res = pg_query($conn,"insert into bill values(default,'".$pid."','".$pno."','".$name."',".$price.")");
	if(!$res){
		echo "jamena";
	}
?>