<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_games.php');
    require_once ('../../include/functions/functions_transaction.php');
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$name = $_POST['transaction-name'];
	$userid = $_POST['user-id'];
	$id = $_POST['purchase-id'];
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
	$price= $_POST['price'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($name) || empty($address) || empty($email)|| empty($city) || empty($country) || empty($userid) || empty($zipcode)|| empty($cardname) || empty($credit) || empty($month)|| empty($year)|| empty($code)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\cart.php');
		exit();
	}
		$result = add_purchase($id,$name, $email, $address, $city, $country, $zipcode, $credit, $code, $month, $year, $cardname,$userid,$price);
		
		//create user messages
		if($result)
		{   
		  $addid= add_cart_purchaseid($id,$_SESSION['cart']);		  
			$res=delete_purchase_user($userid);
			if($res && $addid){
			$_SESSION['cart']="";	
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Thanks for purchase. An email with product link/s for download will be sent. You will receive the hardcopy With in 2 weeks.';
			//redirect to products.php
			redirect('..\..\public\pages\cart.php');
			}
			else
		    {
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\cart.php');
		    }
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\cart.php');
		}
?>