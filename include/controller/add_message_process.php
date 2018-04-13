<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_message_manag.php');
	
	$name = $_POST['name'];
	$email= $_POST['email'];
	$subject= $_POST['subject'];
	$comment= $_POST['comment'];
	
	//START SERVER-SIDE VALIDATION
	if (empty($name) || empty($subject) || empty($email)|| empty($comment)) 
	{ 
		$_SESSION['error'] = 'All * fields are required.'; 
		redirect('..\..\public\pages\contact-us.php');
		exit();
	}

		$result = add_message($name, $email, $subject, $comment);
		
		//create user messages
		if($result)
		{
			$_SESSION['success'] = 'Message has been sent.';
			mail('masooma@masoomabakhshi.com', $subject, $comment);
			redirect('..\..\public\pages\contact-us.php');
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\user-mang.php');
		}
?>