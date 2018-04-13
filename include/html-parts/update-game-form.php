<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-update" role="alert"></div>
 <?php 
					if(isset($_SESSION['search-name']) && isset($_SESSION['search-id'])) 
 					{
 					$searchresult=find_game($_SESSION['search-name'],$_SESSION['search-id']);
					  ?> 
<form action="../../include/controller/update_game_process.php" id="game-update" class="form-horizontal" method="post" onsubmit="return checkupdate()" enctype="multipart/form-data">   
      
				 <?php foreach($searchresult as $field):?>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Game Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="game-name" onChange="checkgamename(this)"  class="form-control"  value="<?php echo $field['game_name']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Game Type</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="game-type" required onchange="checkgametype(this)">
                          <option><?php echo $field['game_type']; ?></option> 
                          <option>Action</option>
                          <option>Horror</option>
                          <option>Social</option>
                          <option>Funny</option>
                          <option>Drama</option>
                          <option>Sport</option>
                      </select>
                    </div>
                  </div>
                                    
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Rating</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="game-rating" required onchange="checkgamerating(this)">
                      	<option><?php echo $field['game_rating']; ?></option> 
						<?php 
						for($i=1;$i<=10;$i++){?>
                           <option><?php echo $i; ?></option><br/>
						  <?php }?>
                        </select>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Created Date</label>
                    <div class="col-sm-7">
                      <?php echo $field['game_date']; ?><input type="hidden" class="form-control" name="game-date" value="<?php echo $field['game_date']; ?>" required >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Release Date</label>
                    <div class="col-sm-7">
                      <input class="form-control" name="game-release" value="<?php echo $field['game_release_date']; ?>" required onchange="checkreleasedate(this)">
                    </div>
                  </div>
                                   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Descrption</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="game-des" value="<?php echo $field['game_description']; ?>" required onchange="checkdesciption(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" name="gameimg" id="gameimg" value="<?php echo $field['game_image']; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Trailer Link</label>
                    <div class="col-sm-7">
                      <input type="url" class="form-control" name="game-tralier" value="<?php echo $field['game_link']; ?>" required onchange="checkurl(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Price</label>
                    <div class="col-sm-7">
                      <input type="number" class="form-control" name="game-price" value="<?php echo $field['game_price']; ?>" required onchange="checkprice(this)">
                    </div>
                  </div> 
                  
                   <input type="hidden" class="form-control" name="game-id" value="<?php echo $field['game_id']; ?>">
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" >
                      <button type="submit" name="update-game" class="btn btn-default">Update</button>
                    </div>
                  </div>
                  <?php endforeach;
					$_SESSION['search-name']="";
					$_SESSION['search-id']="";}
				?>                   
                </form>
                