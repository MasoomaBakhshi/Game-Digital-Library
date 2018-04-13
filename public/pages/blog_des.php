<?php
include('../../include/layout/web-header.php');
?>

<?php	
	$Id = $_GET['blog_id'];
	$result=find_blog($Id); 
?>
<?php
		user_message();
	?>
<?php foreach($result as $row){  ?>
<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a href="blog.php">Blogs and News</a></li>
    <li><a class="select" href="blog_des.php">Blog <?php echo $row['blog_name']; ?></a></li>
</ol>

<section class="blog">
	
    	<center><h2><?php echo $row['blog_name']; ?></h2></center>
        
        <div class="blogcontent">
        
        <div class="blogpara">
         <?php if(!empty($row['blog_image'])){?>
               <img class="blogimage img-responsive" title="<?php echo $row['blog_name']; ?>" src="../../public/images/<?php echo $row['blog_image']; ?>" /></br>
          <?php } ?>  
          <p><b>Author:</b> <?php echo $row['blog_author']; ?> <b>Published on:</b> <?php echo $row['blog_date']; ?></p>           	
          <p><?php echo $row['blog_des']; ?></p>
        </div>
          <?php if(!empty($row['blog_link'])){?>
            </br><center><iframe class="blogvideo" src="<?php echo $row['blog_link']; ?>"  allowfullscreen> 
		     </iframe></center>
		  <?php } ?>
           <?php }?>
           
          <h3>Comments</h3>
           <?php if (!isset($_SESSION['user'])){
		        echo "Please login to comments..."; 
		    } else { 			
	      $res=username(($_SESSION['user']));
	      foreach($res as $field); ?>
<form action="../../include/controller/comment_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()" enctype="multipart/form-data">   
                         <div class="row">          
                   <div class="col-sm-offset-1 col-sm-1 col-xs-3">
                     <center><img class="comment_pic img-responsive img-circle img-thumbnail" title="<?php echo $field['user_name']; ?>" src="../../public/images/<?php echo $field['user_image']; ?>" /> </center>
                    </div>
                    
                    <div class="col-sm-9 col-xs-9">
                      <textarea rows="4" type="text" class="form-control" name="comment-des" placeholder="Enter your Comment here..." required onchange="checkdesciption(this)"></textarea>
                    </div>
                  
                    <input type="hidden" class="form-control" name="user-id" value="<?php echo $field['user_id']; ?>">
                    <input type="hidden" class="form-control" name="blog-id" value="<?php echo $Id; ?>">
                    <input type="hidden" class="form-control" name="comment-date" value="<?php echo  date("Y/m/d h:i:sa"); ?>">
                    
                    
                    <div class="col-sm-2 col-sm-offset-2 col-xs-offset-3 col-xs-2"></br>
                      <button type="submit" class="btn btn-default">Comment</button>
                    </div>
                    </div>
                                    
                </form> 
			
			<?php
			 }?>
           
           <div class="blogpara">
           <?php 
		   $res=get_comment($Id);
		   if(!empty($res))
{   
		    foreach($res as $view):  ?>
             
            <div class="row"> 
            <div class="col-sm-1 col-xs-3">
               <center><img class="comment_pic img-responsive img-circle img-thumbnail" title="<?php echo $view['user_name']; ?> " src="../../public/images/<?php echo $view['user_image']; ?>" /></center> 
            </div>
                    
             <div class="col-sm-11 col-xs-9">
                  <?php  echo $view['comment_area'];?></br>
                  <small>Submitted By <?php echo $view['user_name']; ?> On <?php  echo $view['comment_date'];?></small>
             </div>
             
           </div></br>
             <?php endforeach;?>
        <?php }?>
           </div>   
          
          </div>
</section>



<?php include('../../include/layout/footer.php'); ?>