<?php
include('../../include/layout/dash-header.php'); ?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a class="select" href="admin.php">Admin</a></li>
</ol>
 <?php user_welcome(); ?>
<section class="main">
	<div class="row">
    	<div class="Game col-md-3 col-sm-2">
            <center><a href="account-info.php"><span class="glyphicon game-item glyphicon-pencil"></span></center>
            <p class="text-center text-uppercase">Update Your Account info</p></a>
        </div>
        <div class="user col-md-3 col-sm-2">
            <center><a href="user-mang.php"><span class="glyphicon game-item glyphicon-user"></span></center>
            <a href=""><p class="text-center text-uppercase">User Managment</p></a>
        </div>
        <div class="Game col-md-3 col-sm-2">
            <center><a href="game-mang.php"><span class="glyphicon game-item glyphicon-folder-close"></span></center>
            <p class="text-center text-uppercase">Game Managment</p></a>
        </div>
        <div class="Game col-md-3 col-sm-2">
            <center><a href="transaction.php"><span class="glyphicon game-item glyphicon-usd"></span></center>
            <p class="text-center text-uppercase">Transication Record</p></a>
        </div>
        <div class="Game col-md-3 col-sm-2">
            <center><a href="message.php"><span class="glyphicon game-item glyphicon-inbox"></span></center>
            <p class="text-center text-uppercase">Messages</p></a>
        </div>
        <div class="Game col-md-3 col-sm-2">
            <center><a href="blog-mang.php"><span class="glyphicon game-item glyphicon-list-alt"></span></center>
            <p class="text-center text-uppercase">Blog Managment</p></a>
        </div>
    </div>
</section>

  
<?php include('../../include/layout/footer.php'); ?>