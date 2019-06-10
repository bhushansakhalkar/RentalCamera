<?php

$nm=$_POST['name'];
$phno=$_POST['phoneno'];
$add=$_POST['address'];
$pwd=$_POST['psw'];

// Create connection
$conn = pg_connect("host=localhost port=5432 dbname=photogear user=postgres password=123") or die("error");


pg_query("insert into customer(name,phoneno,address,password) values('$nm','$phno','$add','$pwd')");
echo "inserted";

	header('Location:login.php');
// Check conneho "Connected successfully";
?>