<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-search" role="alert"></div>
<form name="search" class="form-horizontal" method="post" onsubmit="return checksearchtran()" > 
                <h4>Enter "ID" or "E-mail" of Transcation for Update:</h4>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-6">
                      <input type="number" id="id" name="transaction-name" class="form-control" onchange="checkid(this)" placeholder="Id">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" id="name" name="transaction-email" class="form-control" onchange="checkmail(this)" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="search-transaction" class="btn btn-default">Search</button>
                    </div>
                  </div>
                 
               </form>
