<?php

	try {
		$serverName = "localhost";
		$userName = "root";
		$pwd = "";

		$conn = mysqli_connect($serverName,$userName,$pwd);

		if($conn){
			echo "Successfully connected!<br>";
		}
		else{
			echo "Failed";
		}

	} catch (Exception $e) {
		echo "Error";
		
	}

?>