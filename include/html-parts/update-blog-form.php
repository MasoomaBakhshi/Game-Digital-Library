<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li ><a class="select" href="../../public/pages/blog-mang.php">Blog-Managment</a></li>
</ol>
<?php
		user_message();
	?>
<section>

<?php	
	$Id = $_GET['blog_id'];
	$result=find_blog($Id); 
?>
<?php foreach($result as $row){   ?>
<div class="alert alert-danger" id="alert" role="alert"></div>
<form action="../../include/controller/update_blog_process.php" name="update" id="blog-update" class="form-horizontal" method="post" onsubmit="return checkupdate()" enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Name*</label>
                    <div class="col-sm-7">
                      <input type="text" name="blog-name" onChange="checkmulname(this)" class="form-control"  value="<?php echo $row['blog_name']; ?>"  required>
                    </div>
                  </div>
                  
                      <input type="hidden" name="blog-author" onChange="checkname(this)" class="form-control"  value="<?php echo $row['blog_author']; ?>"  required>
					  <input type="hidden" name="author-id" class="form-control" value="<?php echo $row['user_id'];?>" required>
                      
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Type</label>
                    <div class="col-sm-7">
                     <select class="form-control" name="blog-type" required onchange="checksubject(this)">
                          <option><?php echo $row['blog_type'];?></option>
                          <option>News</option>
                          <option>Blog</option>
                      </select>
                    </div>
                  </div>
                   
                                                 
                   <input type="hidden" class="form-control" name="blog-date" value="<?php echo $row['blog_date']; ?>"  required onchange="checkreleasedate(this)">
                  
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Brief</label>
                    <div class="col-sm-7">
                      <textarea rows="3" type="text" class="form-control" name="blog-brief"  value="<?php echo $row['blog_brief']; ?>" required onchange="checkdbrief(this)"><?php echo $row['blog_brief']; ?></textarea>
                    </div>
                  </div>
                                   
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Descrption*</label>
                    <div class="col-sm-7">
                      <textarea rows="10" type="text" class="form-control" name="blog-des"  value="<?php echo $row['blog_des']; ?>" required onchange="checkdesciption(this)"><?php echo $row['blog_des']; ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" name="blogimg" id="blogimg" value="<?php echo $row['blog_image']; ?>" > <?php echo $row['blog_image']; ?></input>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Blog Video Link</label>
                    <div class="col-sm-7">
                      <input type="url" class="form-control" name="blog-video" value="<?php echo $row['blog_link']; ?>"  onchange="checkurl(this)">
                    </div>
                  </div>
                  
                   <input type="hidden" class="form-control" name="blog-id" value="<?php echo $row['blog_id']; ?>"  onchange="checkid(this)">
                  
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                      <button type="submit" class="btn btn-default">Update Blog</button>
                      <a href="../../public/pages/blog-mang.php" class="btn btn-default">Back</a>
                    </div>
                  </div>                  
                </form>
                <?php } ?>
</section>

<?php include('../../include/layout/footer.php'); ?>				