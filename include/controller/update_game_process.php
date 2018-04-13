<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_games.php');
    require_once ('../../include/functions/functions_users.php');

	$user=find_user();
	$res=username($user);
	 foreach($res as $row)
	 {$id= $row['user_id']; }
	//retrieve the data that was entered into the form fields using the $_POST array
	$name = $_POST['game-name'];
	$type = $_POST['game-type'];
	$rating = $_POST['game-rating'];
	$date=$_POST['game-date'];
	$release = $_POST['game-release'];
	$des = $_POST['game-des'];
	$tralier = $_POST['game-tralier'];
	$gameid=$_POST['game-id'];
	$img=$_FILES["gameimg"]["name"];
	$price = $_POST['game-price'];
	
	//START SERVER-SIDE VALIDATION
	//check if all required fields have data
	if (empty($name) || empty($rating) || empty($release)|| empty($des)|| empty($type)|| empty($tralier) || empty($id)|| empty($date)|| empty($price) ) 
	{ 
		//if required fields are empty initialise a session called 'error' with an appropriate game message
		$_SESSION['error'] = 'All * fields are required.'; 
		//redirect to the product_add_form page to display the message
		redirect('..\..\public\pages\game-mang.php');
		exit();
	}
//check if an image has been uploaded
	if(!empty($img) || $img!=null)
	{
	$randomDigit = rand(0000,9999); //generate a random numerical digit <= 4 characters
	$img = strtolower($randomDigit . "_" . $img); //attach the random digit to the front of uploaded images to prevent overriding files with the same name in the images folder and enhance security
	$target = "../../public/images/".$img; //the target for uploaded images
	$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["gameimg"]["tmp_name"]);
    if($check === false) {
    $_SESSION['error']="Sorry,File is not an image.";
	redirect('..\..\public\pages\game-mang.php');
    exit();
    }
	// Check if file already exists
    if (file_exists($target)) {
    $_SESSION['error']="Sorry, file already exists.";
	redirect('..\..\public\pages\game-mang.php');
    exit();
     }
	 // Check file size
     if ($_FILES["gameimg"]["size"] > 500000) {
     $_SESSION['error']= "Sorry, your file is too large.";
	 redirect('..\..\public\pages\game-mang.php');
     exit();
      }	
	  // Allow certain file formats
     // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
     // $_SESSION['error']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	 // redirect('..\..\public\pages\game-mang.php');
    // exit();
    //  }
	  if (move_uploaded_file($_FILES["gameimg"]["tmp_name"], $target)) 
	  {
		  $result = update_game_image($name, $type, $rating, $des, $date, $img,$tralier,$id,$release,$gameid,$price);
		if($result)
		{
			$_SESSION['success'] = 'Game successfully updated with image.';
			redirect('..\..\public\pages\game-mang.php');
		}
		else
		{
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			redirect('..\..\public\pages\game-mang.php');
		}
        }
		 else 
		 { 
        $_SESSION['error']="Sorry, there was an error uploading your file.";
		//redirect to product_add_form.php
		redirect('..\..\public\pages\game-mang.php');
		exit();
       }
	}
	else
	{
		//call the add_product() function
		$result =  update_game($name, $type, $rating, $des, $date, $tralier,$id,$release,$gameid,$price);
		
		//create game messages
		if($result)
		{
			//if product is successfully added, create a success message to display on the products page
			$_SESSION['success'] = 'Game successfully updated.';
			//redirect to products.php
			redirect('..\..\public\pages\game-mang.php');
		}
		else
		{
			//if product is not successfully added, create an error message to display on the add product page
			$_SESSION['error'] = 'An error has occurred. Please try again.';
			//redirect to product_add_form.php
			redirect('..\..\public\pages\game-mang.php');
		}
	}
?>