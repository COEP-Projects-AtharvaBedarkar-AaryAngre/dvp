<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM logincred");
	$stmt->execute();
	$users = $stmt->fetchAll();
	$userFound = false;
	foreach($users as $user) {
		
		if(($user['username'] == $username) && 
			($user['password'] == $password)) {
				header("location: index.php");
				$userFound = true;
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["Name"] = $user["Name"];
				break;
		}
	}
	if($userFound == false){
		header('Location: login.php');
		echo "<script language='javascript'>";
		echo "alert('WRONG INFORMATION')";
		echo "</script>";
		//add brute force protection
	}
}
