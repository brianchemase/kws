<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=kws', 'root', '');
	if(!$conn){
		die("Error: Failed to coonect to database!");
	}
?>