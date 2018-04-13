<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-search" role="alert"></div>
<form action="../../include/controller/search_game_process.php" name="search" class="form-horizontal" method="post" onsubmit="return checksearchgame()" > 
                  <h4>Enter "Game ID" or "Game Name" to find Game's detail for Update:</h4>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game ID</label>
                    <div class="col-sm-7">
                      <input type="text" id="id" name="game-id" class="form-control"  onchange="checkid(this)" placeholder="Game ID" />
                    </div>
                  </div>
                     
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Game Name</label>
                    <div class="col-sm-7">
                      <input type="text" id="name" name="game-name" class="form-control"  onchange="checkname(this)" placeholder="Game Name" />
                    </div>
                  </div>
                                                     
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="search-game" class="btn btn-default">Search Game</button>
                    </div>
                  </div>                  
                </form>