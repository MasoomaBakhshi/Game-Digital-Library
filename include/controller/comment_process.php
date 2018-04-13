<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_blogs.php');
    require_once ('../../include/functions/functions_users.php');
	//retrieve the data that was entered into the form fields using the $_POST array
	$userid = $_POST['user-id'];
	$blogid = $_POST['blog-id'];
	$date = $_POST['comment-date'];
	$comment = $_POST['comment-des'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($userid) || empty($blogid) || empty($date)|| empty($comment)) 
	{ 
		$_SESSION['error'] = 'All * fields are required.'; 
		redirect('..\..\public\pages\blog_des.php');
		exit();
	}
		$result =  add_comment($userid,$blogid,$comment,$date);
		
		
		if($result)
		{
			$_SESSION['success'] = 'Thanks for your comment.';
			redirect('..\..\public\pages\blog_des.php?blog_id='.$blogid);
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\blog_des.php?blog_id='.$blogid);
		}
?>