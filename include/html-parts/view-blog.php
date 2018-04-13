<?php 
include('../../include/controller/permission.php'); ?>
<div class="table-responsive">
<table class="table">
	<tr id="table-header">
        <th></th>
        <th></th>
    	<th>Blog ID</th>
        <th>Blog Author Name</th>
        <th>Blog Name</th>
        <th>Blog Type</th>
        <th>Blog Date</th>
        <th>Blog Image</th>
        <th>Blog Video Link</th>
        <th></th>
    </tr>
  <?php 
  $view=get_blogs();
  foreach($view as $field):
  ?>   
    <tr>
        <td><a class="btn btn-default" href="../../include/controller/delete_blog_process.php?blog_id=<?php echo $field['blog_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
        <td><a class="btn btn-default" href="../../include/html-parts/update-blog-form.php?blog_id=<?php echo $field['blog_id']; ?>" >Update</a></td>
    	<td><?php echo $field['blog_id']; ?></td>
        <td><?php echo $field['blog_author']; ?></td>
        <td><?php echo $field['blog_name']; ?></td>
        <td><?php echo $field['blog_type']; ?></td>
        <td><?php echo $field['blog_date']; ?></td>
        <td><?php echo $field['blog_image']; ?></td>
        <td><?php echo $field['blog_link']; ?></td>
        <td><a class="btn btn-default" href="../../include/html-parts/comments.php?blog_id=<?php echo $field['blog_id']; ?>" >Comments on Blog</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>