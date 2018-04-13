<?php 
include('../../include/controller/permission.php'); ?>
<div class="alert alert-danger" id="alert-delete" role="alert"></div>
<form action="../../include/controller/delete_blog_process.php" name="delete" class="form-horizontal" method="post" onsubmit="return checkdeleteblog()">
            	  
                  <h4>  Enter "Blog ID" or "Blog Name" to Delete:</h4>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog ID</label>
                    <div class="col-sm-7">
                      <input type="number" id="id" name="blog-id" class="form-control" onchange="checkid(this)" placeholder="Blog ID">
                    </div>
                  </div>
                     
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Name</label>
                    <div class="col-sm-7">
                      <input type="text" id="name" name="blog-name" onChange="checkmulname(this)" class="form-control"  placeholder="Blog Name">
                    </div>
                  </div>
                                                     
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="delete-blog">Delete Blog</button>
                    </div>
                  </div>                  
                </form>
 