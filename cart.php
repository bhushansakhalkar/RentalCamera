<?php
error_reporting(E_ERROR | E_PARSE);
	include("connection.php");
	$pid = $_GET["pid"];
	$pno = $_GET["cno"];
	$res = pg_query($conn,"select * from products where pid='".$_GET["pid"]."'");
	$row = pg_fetch_row($res);
	$pname = $row[1];
	session_start();
	$price = $_SESSION["rent"];
	$res1 = pg_query($conn,"insert into cart values('".$pid."','".$pno."','".$pname."',".$price.")");
	if(!$res){
		echo "nai jamla";
	}
	else 
		header("location:bill.php?name=".$pname);
?>