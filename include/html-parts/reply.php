<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li ><a class="select" href="../../public/pages/message.php">Messages</a></li>
    <li ><a class="select" href="reply.php">Messages Reply</a></li>
</ol>
<?php user_message();
$id=$_GET['message_id'];
?>
<?php if(isset($_SESSION['user'])) { $res=username($_SESSION['user']); foreach($res as $row):?>
<section>
 <div class="alert alert-danger" id="alert" role="alert"></div>        
            <form action="../../include/controller/reply_process.php" method="post" onsubmit="return checksubmit()" class="contact form-horizontal info">       
              <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="user-name" placeholder="Name"  value="<?php echo $row['user_name']; ?>" required="required">
                </div>
              </div>
                  
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $row['user_email']; ?>" placeholder="Email"  onchange="checkmail(this)" required="required">
                </div>
              </div>
              
              <input type="hidden" class="form-control" name="userid"  value="<?php echo $row['user_id']; endforeach; } ?>" required="required">
              
              
              <?php $message=find_message($id);
			  foreach( $message as $row): ?>
              <input type="hidden" class="form-control" name="message-id"  value="<?php echo $row['message_id']; ?>" required="required">
                 <input type="hidden" class="form-control" name="name"  value="<?php echo $row['message_name']; ?>" required="required">
                 <input type="hidden" class="form-control" name="sender-email" value="<?php echo $row['message_email']; ?>" required="required">
                            
              <div class="form-group">
                <label class="col-sm-3 control-label">Subject</label>
                <div class="col-sm-7">Re:<?php echo $row['message_subject']; ?> 
                  <input type="hidden" class="form-control" name="subject" value="Re:<?php echo $row['message_subject']; ?>" required="required"/>
                </div>
              </div>
          
          <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Question</label>
                <div class="col-sm-7"><?php echo $row['message_area']; ?>
                  <input type="hidden" class="form-control" name="question" value="<?php echo $row['message_area']; ?>" required="required">
                </div>
           </div> 
                     
           <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Reply</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="inputEmail3" name="reply" placeholder="Reply" onchange="checkdesciption(this)" required="required">
                </div>
           </div>
          <?php endforeach; ?>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-default">Send</button>
              <a href="../../public/pages/message.php" class="btn btn-default">Back</a>
            </div>
          </div>
          
        </form>
          
</section>


<?php include('../../include/layout/footer.php'); ?>