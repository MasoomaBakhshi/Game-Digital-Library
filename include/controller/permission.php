<?php 
if(!isset($_SESSION['admin']))
	{
		//if the user session is not set (i.e. the user is not logged in) redirect to the index page
                header('location:..\..\index.php');
	}
 ?>