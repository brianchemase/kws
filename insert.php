<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['save'])){
 
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
 
 
		try{
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `member`(firstname, lastname, address)  VALUES ('$firstname', '$lastname', '$address')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$conn = null;
 
		header("location: index.php");
 
	}
?>