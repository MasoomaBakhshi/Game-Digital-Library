<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-delete" role="alert"></div>
<form name="delete" class="form-horizontal" method="post" onsubmit="return checkdeletetran()">
                <h4>Enter "ID" or "Username" of Transaction for Delete:</h4>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-6">
                      <input type="number" id="id" name="transaction-id" class="form-control" onchange="checkid(this)" placeholder="ID" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" id="name" name="transaction-email" class="form-control" onchange="checkmail(this)" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="delete-transaction" class="btn btn-default">Delete</button>
                    </div>
                  </div>
                 
               </form>