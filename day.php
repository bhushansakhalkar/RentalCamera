<?php
	session_start();
	$day = $_GET["rent"];
	$search = $_SESSION["search"];
	header("location:search.php?day=".$day."&search=".$search);
?>