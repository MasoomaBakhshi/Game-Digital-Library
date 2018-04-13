<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_users.php');
?>

<?php	//retrieve the productID from the URL	
	$id = $_GET['user_id'];

	$result = delete_member($id);
	
	if($result){
		$_SESSION['success'] = 'Member record successfully deleted.';
		//redirect to products.php
		redirect('..\..\public\pages\user-mang.php');
	}else
	{
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		redirect('..\..\public\pages\user-mang.php');
	}
?>
