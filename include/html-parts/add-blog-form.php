<?php 
include('../../include/controller/permission.php'); ?>
<?php
	$user=find_user();
	$res=username($user);
	 foreach($res as $row)
	 {$author= $row['user_name'];
		$userid=$row['user_id'];}?>
<div class="alert alert-danger" id="alert" role="alert"></div>
<form action="../../include/controller/add_blog_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()" enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="blog-name" onChange="checkmulname(this)" class="form-control"  placeholder="Blog Name" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Author Name</label>
                    <div class="col-sm-7">
                      <?php echo $author ?><input type="hidden" name="author-name" onChange="checkname(this)" class="form-control" value="<?php echo $author ?>" required>
					   <input type="hidden" name="author-id" class="form-control" value="<?php echo $userid ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Type</label>
                    <div class="col-sm-7">
                     <select class="form-control" name="blog-type" required onchange="checksubject(this)">
                          <option>News</option>
                          <option>Blog</option>
                      </select>
                    </div>
                  </div>
                                                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Date</label>
                    <div class="col-sm-7">
                      <?php echo  date("Y/m/d h:i:sa") ?><input type="hidden" class="form-control" name="blog-release" value="<?php echo  date("Y/m/d h:i:sa") ?>" required onchange="checkreleasedate(this)">
                    </div>
                  </div>
                                   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Brief</label>
                    <div class="col-sm-7">
                      <textarea rows="3" type="text" class="form-control" name="blog-brief" placeholder="Blog Brief" required onchange="checkdbrief(this)"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Descrption</label>
                    <div class="col-sm-7">
                      <textarea rows="10" type="text" class="form-control" name="blog-des" placeholder="Blog Descrption" required onchange="checkdesciption(this)"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" name="blogimg" id="blogimg" placeholder="Image">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Video Link</label>
                    <div class="col-sm-7">
                      <input type="url" class="form-control" name="blog-video" placeholder="Blog Video Link" onchange="checkurl(this)">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                      <button type="submit" class="btn btn-default">Add Blog</button>
                    </div>
                  </div>                  
                </form>