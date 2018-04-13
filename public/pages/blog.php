<?php
include('../../include/layout/web-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="blog.php">Blogs and News</a></li>
</ol>

<section class="blog">
	
    	<center><h2>Blogs</h2></center>
        <div class="blogcontent">
         <?php 
             $view=get_blogs();
              foreach($view as $field):
         ?>
        <div class="blogpara">
        
         <h3><?php echo $field['blog_name']; ?></h3>
         <?php if(!empty($field['blog_image'])){?>
               <img class="blog_image_small img-responsive img-thumbnail" title="<?php echo $field['blog_name']; ?>" src="../../public/images/<?php echo $field['blog_image']; ?>" /></br>
          <?php } ?>  
          <p><b>Author:</b> <?php echo $field['blog_author']; ?> <b>Published on:</b> <?php echo $field['blog_date']; ?></p>           	
          <p><?php echo $field['blog_brief']; ?></p>
            <a href="blog_des.php?blog_id=<?php echo $field['blog_id']; ?>" class="btn btn-default">More...</a>
          </br>
          
        </div>
          
        </div>
          <hr>
          <?php endforeach; ?>
</section>



<?php include('../../include/layout/footer.php'); ?>