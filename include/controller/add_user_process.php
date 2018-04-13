<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_users.php');
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$id = $_POST['user-id'];
	$name = $_POST['user-name'];
	$username = $_POST['name-username'];
	$email = $_POST['user-email'];
	$password = $_POST['user-passowrd'];
	$type = $_POST['user-select'];
	$img=$_FILES["userimg"]["name"];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($name) || empty($username) || empty($email)|| empty($password)|| empty($type)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.'; 
		redirect('..\..\public\pages\user-mang.php');
		exit();
	}
	$count = count_username($name);
		
	    if($count >= 1)
	   { 
		//if there are any matching rows intialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'This username is already in database.';
		redirect('..\..\public\pages\user-mang.php');
		exit();
	     }
	$password= md5($password);	 
	//check if an image has been uploaded
	if(!empty($img) || $img!=null)
	{$randomDigit = rand(0000,9999); //generate a random numerical digit <= 4 characters
	$img = strtolower($randomDigit . "_" . $img); //attach the random digit to the front of uploaded images to prevent overriding files with the same name in the images folder and enhance security
	$target = "../../public/images/".$img; //the target for uploaded images
	$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["userimg"]["tmp_name"]);
    if($check === false) {
    $_SESSION['error']="Sorry,File is not an image.";
	redirect('..\..\public\pages\user-mang.php');
    exit();
    }
	// Check if file already exists
    if (file_exists($target)) {
    $_SESSION['error']="Sorry, file already exists.";
	redirect('..\..\public\pages\user-mang.php');
    exit();
     }
	 // Check file size
     if ($_FILES["userimg"]["size"] > 500000) {
     $_SESSION['error']= "Sorry, your file is too large.";
	 redirect('..\..\public\pages\user-mang.php');
     exit();
      }	
	  // Allow certain file formats
     // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
     // $_SESSION['error']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	 // redirect('..\..\public\pages\user-mang.php');
    // exit();
    //  }
	  if (move_uploaded_file($_FILES["userimg"]["tmp_name"], $target)) 
	  {
		  $result = add_user_image($name, $username, $email, $password, $type,$img,$id);
		if($result)
		{
			$_SESSION['success'] = 'User successfully added.';
			redirect('..\..\public\pages\user-mang.php');
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\user-mang.php');
		}
        }
		 else 
		 { 
        $_SESSION['error']="Sorry, there was an error uploading your file.";
		redirect('..\..\public\pages\user-mang.php');
		exit();
       }
	}
	else
	{
		$result = add_user($name, $username, $email, $password, $type,$id);
		
		//create user messages
		if($result)
		{
			$_SESSION['success'] = 'User successfully added.';
			redirect('..\..\public\pages\user-mang.php');
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\user-mang.php');
		}
	}
?>