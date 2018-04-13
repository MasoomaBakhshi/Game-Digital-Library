<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert" role="alert"></div>
<form action="../../include/controller/add_user_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()"  enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label" required>Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="user-name" onChange="checkname(this)" class="form-control" placeholder="Name" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="name-username" onChange="checkusername(this)" class="form-control" placeholder="User Name" required>
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                      <input type="email" name="user-email" class="form-control" onchange="checkmail(this)" id="inputEmail3" placeholder="Eamil" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-7">
                      <input type="password" name="user-passowrd" onchange="checkpassword(this)" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Account Type</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="user-select" onchange="checkaccounttype(this)" required>
                          <option>Select Accounnt type</option>
                          <option>Admin</option>
                          <option>Authorized Member</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" placeholder="Image" name="userimg" id="userimg"  >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" >
                      <button type="submit" name="add-user" class="btn btn-default">Add</button>
                    </div>
                  </div>                  
                </form>