<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_message_manag.php');
?>

<?php
	//retrieve the productID from the URL	
	$messageID = $_GET['message_id'];

	//call the delete_product() function
	$result = delete_message($messageID);
	
	//create user messages
	if($result){
		//if message is successfully added, create a success message to display on the products page
		$_SESSION['success'] = 'Message successfully deleted.';
		//redirect to products.php
		redirect('..\..\public\pages\message.php');
	}else
	{
		//if message is not successfully added, create an error message to display on the add product page
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		//redirect to product_add_form.php
		redirect('..\..\public\pages\message.php');
	}
?>
