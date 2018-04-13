<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-delete" role="alert"></div>
<form action="../../include/controller/delete_game_process.php" name="delete" class="form-horizontal" method="post" onsubmit="return checkdeletegame()">
            	  
                  <h4>Enter "Gmae ID" or "Game Name" to Delete:</h4>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game ID</label>
                    <div class="col-sm-7">
                      <input type="number" id="id" name="game-id" class="form-control" onchange="checkid(this)" placeholder="Game ID">
                    </div>
                  </div>
                     
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Name</label>
                    <div class="col-sm-7">
                      <input type="text" id="name" name="game-name" class="form-control"  onChange="checkname(this)" placeholder="Game Name">
                    </div>
                  </div>
                                                     
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="delete-game">Delete Game</button>
                    </div>
                  </div>                  
                </form>
 