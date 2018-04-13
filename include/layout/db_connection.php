<?php
		 $host= "localhost";
			$username = "root";
			$password = "";
			$dbname = "game";
			try
	{
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	}
	catch(PDOException $e)
	{
		$error_message = $e->getMessage();
		include('../../public/pages/database_error.php');
		exit();
	}
	?>