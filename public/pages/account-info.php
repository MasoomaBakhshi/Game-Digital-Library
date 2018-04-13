<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li><a class="select" href="account-info.php">Account-info</a></li>
</ol>

<section class="main">
    <div class="alert alert-danger" id="alert-update" role="alert"></div>
         <form action="../../include/controller/update_user_process.php" name="update" id="user-update" class="form-horizontal" method="post" onsubmit="return checkupdate()" enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label" required>Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="user-name" onChange="checkname(this)" class="form-control" value="<?php echo $row['name']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="name-username" onChange="checkusername(this)" class="form-control" value="<?php echo $row['user_name']; ?>" required>
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                      <input type="email" name="user-email" class="form-control" onchange="checkmail(this)" id="inputEmail3" value="<?php echo $row['user_email']; ?>" required>
                    </div>
                  </div>
                  
                  
              <input type="hidden" name="user-passowrd" onchange="checkpassword(this)" class="form-control" id="inputPassword3" value="<?php echo $row['user_password']; ?>" required>
                                      
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Account Type</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="user-select" onchange="checkaccounttype(this)" required>
                          <option><?php echo $row['user_type']; ?></option>
                          <option>Admin</option>
                          <option>Authorized Member</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control"  name="userimg" id="userimg" value="<?php echo $field['user_image']; ?>" >
                    </div>
                  </div>
                                    
                      <input type="hidden" name="user-id" class="form-control" value="<?php echo $row['user_id']; ?>" >

                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" >
                      <button type="submit" name="update-user" class="btn btn-default">Update</button>
                    </div>
                  </div>                  
                </form>
</section>

<?php include('../../include/layout/footer.php'); ?>