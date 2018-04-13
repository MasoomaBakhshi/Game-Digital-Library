<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_users.php');
    require_once ('../../include/functions/functions_blogs.php');
	
	//retrieve the data that was entered into the form fields using the $_POST array
	$name = $_POST['blog-name'];
	$author = $_POST['author-name'];
	$userid = $_POST['author-id'];
	$release = $_POST['blog-release'];
	$des = $_POST['blog-des'];
	$img=$_FILES["blogimg"]["name"];
	$video = $_POST['blog-video'];
	$brief = $_POST['blog-brief'];
	$type = $_POST['blog-type'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($name) || empty($author) || empty($release)|| empty($des)|| empty($userid)|| empty($type)) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'All * fields are required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\blog-mang.php');
		exit();
	}
	$count = count_blogname($name);
		
	    if($count >= 1)
	   { 
		//if there are any matching rows intialise a session called 'error' with an appropriate user message
		$_SESSION['error'] = 'There is blog on this name already.'; 
		//redirect to the registration page to display the message
		redirect('..\..\public\pages\blog-mang.php');
		exit();
	     }

	//check if an image has been uploaded
	if(!empty($img) || $img!=null)
	{
	$randomDigit = rand(0000,9999); //generate a random numerical digit <= 4 characters
	$img = strtolower($randomDigit . "_" . $img); //attach the random digit to the front of uploaded images to prevent overriding files with the same name in the images folder and enhance security
	$target = "../../public/images/".$img; //the target for uploaded images
	$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["blogimg"]["tmp_name"]);
	// Check if file already exists
    if (file_exists($target)) {
    $_SESSION['error']="Sorry, file already exists.";
	redirect('..\..\public\pages\blog-mang.php');
    exit();
     }
	 // Check file size
     if ($_FILES["blogimg"]["size"] > 500000) {
     $_SESSION['error']= "Sorry, your file is too large.";
	 redirect('..\..\public\pages\blog-mang.php');
     exit();
      }	
	  // Allow certain file formats
     // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
     // $_SESSION['error']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	 // redirect('..\..\public\pages\game-mang.php');
    // exit();
    //  }
	  if (move_uploaded_file($_FILES["blogimg"]["tmp_name"], $target)) 
	  {
		$result =  add_blog_image($name, $release,$author,$des,$video,$img,$brief,$userid,$type);
		
		//create user messages
		if($result)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Blog successfully added wih image.';
			//redirect to products.php
			redirect('..\..\public\pages\blog-mang.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\blog-mang.php');
		}
	}
	}
	else
	{
		//call the add_product() function
		$result =  add_blog($name, $release,$author,$des,$video,$brief,$userid,$type);
		
		//create user messages
		if($result)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Blog successfully added.';
			//redirect to products.php
			redirect('..\..\public\pages\blog-mang.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\blog-mang.php');
		}
	}
?>