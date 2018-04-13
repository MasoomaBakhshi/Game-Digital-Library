<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-delete" role="alert"></div>
<form action="../../include/controller/delete_user_process.php"  name="delete" class="form-horizontal" method="post" onsubmit="return checkuserdelete()">
                <h4>Enter "ID" or "Username" of User for Delete:</h4> 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-7">
                      <input type="number" id="id" name="user-id" class="form-control" onChange="checkid(this)" placeholder="id"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-7">
                      <input type="text" id="name" name="name-username" class="form-control"  onChange="checkusername(this)" placeholder="Username"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="delete-user" class="btn btn-default">Delete</button>
                    </div>
                  </div>
                 
               </form>