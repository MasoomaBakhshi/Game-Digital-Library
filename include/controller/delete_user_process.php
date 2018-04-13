<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_users.php');
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$username = $_POST['name-username'];
	$id = $_POST['user-id'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($id) && empty($username)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'One field is required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\user-mang.php');
		exit();
	}
		//call the add_product() function
		$result = delete_user($id, $username);
		
		//create user messages
		if($result>0)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'User successfully deleted.';
			//redirect to products.php
			redirect('..\..\public\pages\user-mang.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again. No such user wih this id or user name';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\user-mang.php');
		}
?>