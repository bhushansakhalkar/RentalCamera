<?php
	$id = $_GET["product"];
	include("connection.php");
	$sql = "DELETE FROM cart where pid ='$id'";
	$res = pg_query($conn,$sql);
	if(!$res){
		echo "Cannot be deleted";
	}
	echo $id;

?>