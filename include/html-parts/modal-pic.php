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
        				 <h4 class="modal-title" id="myModal-picLabel"><?php echo $row['game_name']; ?> Image</h4>
      				</div>
                    
      			<div class="modal-body">
                <div class="row">
                <center>
                    <img class="img-responsive modal-img" src="../../public/images/<?php echo $row['game_image']; ?>"/>
                    </center>
                </div>
                </div>
                    
      				<div class="modal-footer">
                        <a href="../../public/pages/index.php" class="btn btn-default" >Close</a>
      				</div>
                    
    		</div>
            </div>
            <?php endforeach; ?>