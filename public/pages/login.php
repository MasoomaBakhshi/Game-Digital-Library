<?php
include('../../include/layout/web-header.php'); 
?>
<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="login.php">Login</a></li>
</ol>
<?php
//call user_message() function
user_message();
 ?>
<section>
	<div id="log">
        	<div class="alert alert-danger" id="alert" role="alert"></div>
            <h4>Please enter your User-name and Password:</h4><br/>
            <center> 
           <form action="../../include/controller/authentication.php" method="post" class="form-horizontal"  onsubmit="return checksubmit()">
           
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                <div class="col-sm-7">
                  <input type="text" name="username" class="form-control" onchange="checkusername(this)" value="<?php if(isset($_COOKIE["gameuser"])) echo $_COOKIE["gameuser"]; ?>"  required="required">
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-7">
                  <input type="password" name="password" class="form-control" id="inputPassword3" value="<?php if(isset($_COOKIE["gamepassword"])) echo $_COOKIE["gamepassword"]; ?>" onchange="checkpassword(this)" required="required">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
              </div>
              
            </form>
           </center>           
            <h4>If you don't have an account. <a href="registar.php">Please Register here for Login.</a> </h4>
       </div>
</section>

  
<?php include('../../include/layout/footer.php'); ?>