<?php
	//retrieve the functions
	include('../../include/layout/db_connection.php');
	require('../../include/functions/functions_users.php');
session_start();
	
	//retrieve the username and password entered into the form
	$username = $_POST['username'];
	$password = $_POST['password']; 
	
		 
	$password=md5($password);
	//call the login() function
	$count = login($username, $password);
	
	//if there is one matching record
	if($count == 1)
	{ 
		if(isset($_POST['remember']))
		{ setcookie("gameuser", $username, time() + (31*24*60*60), "/");	
		  setcookie("gamepassword", $password, time() + (31*24*60*60), "/");	
		  }
		//start the user session to allow authorised access to secured web pages
		$_SESSION['user'] = $username;
		$res=username($username);	
		$_SESSION['welcome'] = 'Hello ' . $username . '. Have a great day!';
		$finduser=username_admin($username);
			 
		if($finduser)
		{
		    foreach($finduser as $row)
		     {$id= $row['user_id'];
			 $type=$row['user_type']; }
			 $date=date("Y/m/d h:i:sa");
			$log=addlog($id,$date);
		   $_SESSION['admin']=$type;
		    header('location:../../public/pages/admin.php' );
		}
		else
		{
			header('location:../../public/pages/index.php' );
		}
		
	}
	
	else
	{
		//if login not successful, create an error message to display on the login page
		$_SESSION['error'] = 'Incorrect username or password. Please try again.';
		//redirect to login.php
		header('location:../../public/pages/login.php');
	}	
?>