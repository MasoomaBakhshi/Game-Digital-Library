<?php 
include('db_connection.php');
session_start();
if(!isset($_SESSION['admin']))
	{
		//if the user session is not set (i.e. the user is not logged in) redirect to the index page
                header('location:..\..\index.php');
	}
include('header.php'); 
include  ('../../include/functions/functions.php');
include ('../../include/functions/functions_blogs.php');
include ('../../include/functions/functions_messages.php');
include ('../../include/functions/functions_message_manag.php');
include  ('../../include/functions/functions_games.php');
include  ('../../include/functions/functions_users.php');
include  ('../../include/functions/functions_transaction.php');
$mainuser=find_user();
 find_user_type();
$res=username($mainuser); 
?>
<body>
<header class="log navbar">
   <a class="logo-admin " href="../../public/pages/index.php" title="Index Page"><img id="company-logo" class="img-responsive img-thumbnail web-nav-img img-circle" src="../../public/images/Logo1.png.png"></a>
   <a href="../../include/controller/logout.php" class="user-info btn btn-default">Logout</a>
</header>   

<div class="head">
	<div class="row dash">
    <?php foreach($res as $row);?>
        <div  class="col-md-3  col-md-offset-1 col-sm-3 col-xs-12 ">
            <h2> Admin Dashboard</h2>
        </div>
        <div  class="col-md-4 col-sm-4 col-xs-12">
          <h4>Username:   <?php echo $row['user_name']; ?>  </h4>
          <h4>Account-Type: <?php echo $row['user_type']; ?>  </h4>
          <h4>Name:   <?php echo $row['name']; ?>  </h4>
          <h4>Email:    <?php echo $row['user_email']; ?> </h4>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12">
             <?php
							//display the photo
							echo "<img class='img-responsive img-thumbnail profile ' src='../../public/images/" . ($row['user_image']) . "'" . ' alt="user photo"'  . "/>";
			?>
            
        </div>
     </div>
</div>