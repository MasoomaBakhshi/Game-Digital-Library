<?php
require ('../../include/functions/functions.php');
		//start session management
	session_start();
	//destroy the user session
	session_destroy();
		redirect('../../public/pages/login.php');
?>