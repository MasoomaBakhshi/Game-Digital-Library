<?php
include('../../include/layout/db_connection.php');
include('../../include/layout/header.php');
require ('../../include/functions/functions_games.php');
require ('../../include/functions/functions_users.php');
?>
<?php
				$result=get_games_id( $_GET['game_id']);
				foreach($result as $row):?>  
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
                 <div class="modal-header">
        				<h4 class="modal-title" id="myModalLabel"><?php echo $row['game_name']; ?> DETAIL</h4>
      				</div>
                    
      				<div class="modal-body">
                    
                    	 <div class="row">
                         
                            <div class="col-md-5">
                                <img class="modal-img img-responsive img-thumbnail " src="../../public/images/<?php echo $row['game_image']; ?>"/>
                                 <div class="game-des">
                                     <h4>Game Name:</h4>  <?php echo $row['game_name']; ?>
                                     <h4>Game Type: </h4>   <?php echo $row['game_type']; ?>
                                     <h4>Game Release Date: </h4>  <?php echo $row['game_date']; ?>
                                 </div>
                             </div>
                             <div class="col-md-7">
                                 <h4>Game Description: </h4>  <?php echo $row['game_description']; ?>
                                 <h4>Game Trailer:</h4>
                                 <iframe class="modal-video" src="<?php echo $row['game_link']; ?>">
								 </iframe>
                             </div>
                             
                     	 </div>
                         
                  	</div>
                    
      				<div class="modal-footer">
                        <a id="close" href="../../public/pages/games-info.php"  class="btn btn-default">Close</a>
                        <a href="../../include/controller/cart_process_game.php?game_id=<?php echo $row['game_id']; ?>" class="btn btn-default">Add to cart</a>
                        	
      				</div>
                  <?php endforeach; ?> 
                  </div>