<?php
include('../../include/layout/web-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="contact-us.php">Conatct Us</a></li>
</ol>
<?php
//call user_message() function
user_message();

 ?>
<section>

    	<center><h2>Contact Us</h2></center>
         <div class="alert alert-danger" id="alert" role="alert"></div>        
            <form action="../../include/controller/add_message_process.php" method="post" onsubmit="return checksubmit()" class="contact form-horizontal info">       
              <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Name"  value="<?php if(isset($_SESSION['user'])) { echo ($_SESSION['user']);} ?>" onchange="checkname(this)" required="required">
                </div>
              </div>
                  
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php if(isset($_SESSION['user'])) { $res=username($_SESSION['user']); foreach($res as $row); echo $row['user_email']; } ?>" placeholder="Email"  onchange="checkmail(this)" required="required">
                </div>
              </div>
          
          <div class="form-group">
             <label  class="col-sm-3 control-label">Subject</label>
                 <div class="col-sm-7">
                    <select class="form-control" onchange="checksubject(this)" name="subject" required="required">
                      <option>General</option>
                      <option>Enquiry</option>
                      <option>Website Suggestions</option>
                    </select>
                 </div>
           </div>
           
           <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Comment</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="inputEmail3" name="comment" placeholder="Comment" onchange="checkdesciption(this)" required="required">
                </div>
           </div>
          
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-default">Send</button>
            </div>
          </div>
          
        </form>
          
</section>



<?php include('../../include/layout/footer.php'); ?>