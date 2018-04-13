<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_message_manag.php');
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$id= $_POST['message-id'];
	$email= $_POST['sender-email'];
	$userid= $_POST['userid'];
	$subject= $_POST['subject'];
	$reply= $_POST['reply'];
	$question= $_POST['question'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($id) || empty($subject) || empty($email)|| empty($reply)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.'; 
		redirect('..\..\public\pages\message.php');
		exit();
	}

		$result = add_reply($id, $userid, $subject, $reply);
		
		//create user messages
		if($result)
		{
			$_SESSION['success'] = 'Reply has been sent.';
			mail($email, $subject, $reply.$question);
			redirect('..\..\public\pages\message.php');
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\message.php');
		}
?>