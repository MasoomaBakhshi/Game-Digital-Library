<?php
include('../../include/layout/web-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="games-info.php">Games</a></li>
</ol>

<?php
user_message(); ?>

<section>
 
	<div class="row lists">
    	<center><h2>All Games</h2></center>
    <!-----START Loop FOR GMAES"--->
        <?php $result=get_games(); 
  foreach($result as $view): ?>  
    <div id="game-box" title="<?php echo $view['game_name']; ?>">
        <a href="../../include/html-parts/modal-game.php?game_id=<?php echo $view['game_id']; ?>" class="overlay" >
          <div class="col-md-2 col-sm-5 game-in-list"></br>
                <img class='img-responsive game-img' src="../../public/images/<?php echo $view['game_image']; ?>"  alt="<?php echo $view['game_image']; ?>"/>
             <div class="game-des"></br>
                 <B>Game Name:</B></br>  <?php echo $view['game_name']; ?></br>
                 <B>Game Type:</B>   <?php echo $view['game_type']; ?></br>
                 <B>Game Price:</B>   $<?php echo $view['game_price']; ?></br>
             </div>
       	 </div>  
        </a>
       </div>      
       <?php endforeach;?>  
                   <!-----END Loop FOR GMAES"--->    
</div> 
</section>



<?php include('../../include/layout/footer.php'); ?>