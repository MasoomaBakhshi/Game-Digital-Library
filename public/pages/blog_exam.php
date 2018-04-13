<?php
include('..\..\include\layout\web-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a class="select" href="index.php">Home</a></li>
</ol>

<section>
<div class="row">
       <div class="col-md-4">		   
            <ol class="blog-list"><h3>New Recent Blogs and News</h3>
                 <?php $res1=get_blogs_new();
            foreach($res1 as $view1): ?> 
                <li><h4><a  href="blog_des.php?blog_id=<?php echo $view1['blog_id'];?>"><?php echo $view1['blog_name']; endforeach;?></a></h4></li>          
            </ol>
       </div>
       <div class="col-md-4">		   
            <ol class="blog-list"><h3>New Recent Blogs and News</h3>
                <li><h4><a  href="blog_des.php">his</a></h4></li>          
            </ol>
       </div>
       <div class="col-md-4">		   
            <ol class="blog-list"><h3>New Recent Blogs and News</h3>
                <li><h4><a  href="blog_des.php">his</a></h4></li>          
            </ol>
       </div>
       
 </div>
</section>
  
<?php include('..\..\include\layout\footer.php'); ?>