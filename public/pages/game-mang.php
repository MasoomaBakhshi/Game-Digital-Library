<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li ><a class="select" href="game-mang.php">Game-Managment</a></li>
</ol>
<?php
		user_message();
	?>
<section>

    <ul class="nav-admin nav nav-tabs nav-justified">
      <li><a href="#add-game" data-toggle="tab">Add Game</a></li>
      <li><a href="#delete-game" data-toggle="tab">Delete Game</a></li>
      <li><a href="#update-game" data-toggle="tab">Update Game Info</a></li>
      <li><a href="#view-game" data-toggle="tab">View Games</a></li>
    </ul>

    <div class="tab-content">
    <!--addd game-->
        <div class="tab-pane fade active in" id="selection" >
            	<center><h4>Select the required operation from tabs!!!  </h4></center>
           </div>
    <!--addd game-->
        <div class="tab-pane fade" id="add-game">
            	<?php
				include('../../include/html-parts/add-game-form.php');
				?>
           </div>
        <!--delete game-->
        <div class="tab-pane fade" id="delete-game">
            	<?php
				include('../../include/html-parts/delete-game-form.php');
				?>
        </div>
        <!--update game-->
        <div class="tab-pane fade" id="update-game">
        	<!--Search-->
            	<?php
				include('../../include/html-parts/search-game-form.php');
				?>                
                <!--Update Form-->
                
                <?php
				include('../../include/html-parts/update-game-form.php');
				?>
                     
        </div>
        <!--view game-->
        <div class="tab-pane fade" id="view-game">
            <div class="row list">
    	<center><h2>All Games</h2></center>
    <!-----START Loop FOR GMAES"--->
    <?php $result=get_games(); 
  foreach($result as $view):?>
          <div class="row game-in-list">                         
                            <div class="col-md-5">
                                <?php
							//display the photo
							echo "<img class='game-viewimg' class='img-responsive' src='../../public/images/" . ($view['game_image']) . "'" . ' alt="game photo"'  . "/>";
			                   ?>
                                 <div class="game-des">
                                     <b>Game Name:</b>  <?php echo $view['game_name']; ?></br>
                                     <b>Game Type:</b>  <?php echo $view['game_type']; ?></br>
                                     <b>Game Release Date:</b>  <?php echo $view['game_date']; ?></br>
                                     <b>Game Price:</b>  $<?php echo $view['game_price']; ?>
                                 </div>
                            </div>
                             <div class="col-md-7">
                                 <b>Game Trailer:</b></br>
                                <iframe class="game-viewvideo" src=<?php echo $view['game_link']; ?>  allowfullscreen ></iframe>
								 </iframe></br>
                             </div>
                              <a class="btn btn-default" href="../../include/controller/delete-game-form1.php?game_id=<?php echo $view['game_id']; ?>" onclick="return confirm('Are you sure you want to delete this game?')">Delete</a></td>
                                  <a class="btn btn-default" href="../../include/html-parts/update-game-formid.php?game_id=<?php echo $view['game_id']; ?>" >Update</a>                            
                   </div>
                   <?php endforeach; ?>
 		 </div>
		</div>      <!-----END Loop FOR GMAES"--->  
    </div>  
        </div>
    </div>
    
</section>

<?php include('../../include/layout/footer.php'); ?>