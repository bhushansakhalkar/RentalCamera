<?php
	$conn = pg_connect("host=localhost port=5432 dbname=photogear user=postgres password=123");
	if(!$conn){
		echo "Error";
	}

?>