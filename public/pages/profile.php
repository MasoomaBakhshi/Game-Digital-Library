<?php
include('../../include/layout/profile-web-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="profile.php">Profile</a></li>
</ol>
<?php user_message(); ?>

<section>
<?php $mainuser=find_user();
$res=username($mainuser);
?>
    <?php foreach($res as $row);?>
            <h2> Profile</h2>
    
<div class="row userprofile">
        <div class="col-md-offset-2 col-sm-offset-1  col-md-4 col-sm-5 col-xs-12">
             <?php
				echo "<img class='img-responsive img-thumbnail img-circle profile ' src='../../public/images/" . ($row['user_image']) . "'" . ' alt="user photo"'  . "/>";
			?>
            
        </div>
 
        <div  class=" col-md-4 col-sm-4 col-xs-12 "></br>
          <h4>Username:   <?php echo $row['user_name']; ?>  </h4>
          <h4>Account-Type: <?php echo $row['user_type']; ?>  </h4>
          <h4>Name:   <?php echo $row['name']; ?>  </h4>
          <h4>Email:    <?php echo $row['user_email']; ?> </h4>
          <a class="btn btn-default" href="update_user.php?user_id=<?php echo $row['user_id']; ?>" >Update</a>
        </div>
        
</div>
</br>
</section>
<?php include('../../include/layout/footer.php'); ?>