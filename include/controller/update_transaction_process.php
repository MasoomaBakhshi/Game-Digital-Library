<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_transaction.php');
	
	$id = $_POST['transaction-id'];
	//retrieve the data that was entered into the form fields using the $_POST array
	$name = $_POST['transaction-name'];
	$email= $_POST['transaction-email'];
	$address= $_POST['transaction-address'];
	$city= $_POST['transaction-city'];
	$country= $_POST['transaction-country'];
	$zipcode= $_POST['transaction-zipcode'];
	$cardname= $_POST['transaction-cardname'];
	$credit= $_POST['transaction-credit'];
	$month= $_POST['transaction-month'];
	$year= $_POST['transaction-year'];
	$code= $_POST['transaction-code'];
	
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($name) || empty($address) || empty($email)|| empty($city) || empty($country) || empty($zipcode)|| empty($cardname) || empty($credit) || empty($month)|| empty($year)|| empty($code)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\transaction.php');
		exit();
	}
	
		$result = update_purchase($name, $email, $address, $city, $country, $zipcode, $credit, $code, $month, $year, $cardname,$id);
		
		//create user messages
		if($result)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Transaction record updated.';
			//redirect to products.php
			redirect('..\..\public\pages\transaction.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\transaction.php');
		}
?>