<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-search" role="alert"></div>

<form action="../../include/controller/search_user_process.php" name="search" class="form-horizontal" method="post" onsubmit="return checksearchuser()" > 
                <h4>Enter "ID" or "E-mail" of User for Update:</h4>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-7">
                      <input type="number" id="id" name="user-id" class="form-control" placeholder="id"  onchange="checkid(this)"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-7">
                      <input type="name" id="name" name="user-name" class="form-control" onChange="checkusername(this)" placeholder="Username" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="search-user" class="btn btn-default">Search</button>
                    </div>
                  </div>
                 
  </form> 
           