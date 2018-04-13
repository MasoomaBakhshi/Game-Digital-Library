<?php
include('../../include/layout/dash-header.php'); ?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li ><a class="select" href="blog-mang.php">Blog-Managment</a></li>
</ol>
<?php
		user_message();
	?>
<section>

    <ul class="nav-admin nav nav-tabs nav-justified">
      <li><a href="#add-blog" data-toggle="tab">Add Blog</a></li>
      <li><a href="#view-blog" data-toggle="tab">View Blogs</a></li>
    </ul>

    <div class="tab-content">
    
        <div class="tab-pane fade active in" id="selection" >
            	<center><h3>Select the required operation from tabs!!!  </h3></center>
           </div>
    <!--addd game-->
        <div class="tab-pane fade" id="add-blog">
            	<?php
				include('../../include/html-parts/add-blog-form.php');
				?>
           </div>
    <!--view game-->
        <div class="tab-pane fade" id="view-blog">
           <?php
                    include('../../include/html-parts/view-blog.php');
             ?>

        </div>  
        </div>
    </div>
    
</section>


  
<?php include('../../include/layout/footer.php'); ?>