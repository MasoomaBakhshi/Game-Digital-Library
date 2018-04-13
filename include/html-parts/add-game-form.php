<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert" role="alert"></div>
<form action="../../include/controller/add_game_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()" enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="game-name" onChange="checkgamename(this)" class="form-control"  placeholder="Game Name" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Game Type</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="game-type" required onchange="checkgametype(this)">
                          <option>Select game type</option>
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
                      <option>Select game Rating</option>
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
                      <?php echo  date("Y/m/d h:i:sa") ?><input type="hidden" class="form-control" name="game-date" value="<?php echo  date("Y/m/d h:i:sa") ?>" required >
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Release Date</label>
                    <div class="col-sm-7">
                      <input type="Date" class="form-control" name="game-release" placeholder="Release Date" required onchange="heckreleasedate(this)">
                    </div>
                  </div>
                                   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Descrption</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="game-des" placeholder="Game Descrption" required onchange="checkdesciption(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" name="gameimg" id="gameimg" placeholder="Image">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Trailer Link</label>
                    <div class="col-sm-7">
                      <input type="url" class="form-control" name="game-tralier" placeholder="Game Trailer Link" required onchange="checkurl(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Price</label>
                    <div class="col-sm-7">
                      <input type="number" class="form-control" name="game-price" placeholder="Game Price" required onchange="checkprice(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Add Game</button>
                    </div>
                  </div>                  
                </form>