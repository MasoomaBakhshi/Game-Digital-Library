<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_games.php');
    require_once ('../../include/functions/functions_users.php');
	
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$name = $_POST['game-name'];
	$id = $_POST['game-id'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($id) && empty($name)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'One field is required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\game-mang.php');
		exit();
	}
		//call the add_product() function
		$result = search_game($id, $name);
		
		//create user messages
		if($result===1)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Game successfully searched.';
			$_SESSION['search-id']=$id;
			$_SESSION['search-name']=$name;
			foreach($result as $row)
			$id= $row['user_id'];
			//redirect to products.php
			redirect('..\..\public\pages\game-mang.php#update');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again. No such game wih this id or game name';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\game-mang.php');
		}
?>