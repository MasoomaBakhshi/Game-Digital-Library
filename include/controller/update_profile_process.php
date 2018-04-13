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
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\profile.php');
		exit();
	}
	//check if an image has been uploaded
	if(!empty($img) || $img!=null)
	{
	$randomDigit = rand(0000,9999); //generate a random numerical digit <= 4 characters
	$img = strtolower($randomDigit . "_" . $img); //attach the random digit to the front of uploaded images to prevent overriding files with the same name in the images folder and enhance security
	$target = "../../public/images/".$img; //the target for uploaded images
	$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["userimg"]["tmp_name"]);
    if($check === false) {
    $_SESSION['error']="Sorry,File is not an image.";
	redirect('..\..\public\pages\profile.php');
    exit();
    }
	// Check if file already exists
    if (file_exists($target)) {
    $_SESSION['error']="Sorry, file already exists.";
	redirect('..\..\public\pages\profile.php');
    exit();
     }
	 // Check file size
     if ($_FILES["userimg"]["size"] > 500000) {
     $_SESSION['error']= "Sorry, your file is too large.";
	 redirect('..\..\public\pages\profile.php');
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
		  $result = update_user_image($name, $username, $email, $password, $type,$img,$id);
		if($result)
		{
			$_SESSION['success'] = 'Profile successfully updated with profile image.';
			redirect('..\..\public\pages\profile.php');
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
		//redirect to product_add_form.php
		redirect('..\..\public\pages\profile.php');
		exit();
       }
	}
	else
	{
		//call the add_product() function
		$result = update_user($name, $username, $email, $password, $type,$id);
		
		//create user messages
		if($result)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Profile successfully updated.';
			//redirect to products.php
			redirect('..\..\public\pages\profile.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\profile.php');
		}
	}
?>