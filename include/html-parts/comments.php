<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li ><a href="../../public/pages/blog-mang.php">Blog-Managment</a></li>
    <li ><a class="select" href="comments.php?comment_id=<?php echo $_GET['blog_id']; ?>">Comments</a></li>
</ol>
<?php
        $Id = $_GET['blog_id'];	
		user_message();
	?>
<section>
</br>
<a class="btn btn-default col-xs-offset-1" href="../../public/pages/blog-mang.php">Back</a></br></br>
<div class="table-responsive">
<table class="table">
	<tr>
    	<th>Blog ID</th>
        <th>User Name</th>
        <th>Comments</th>
        <th>Comment Date</th>
        <th></th>
    </tr>
  <?php 
  $result=get_comment($Id); 
   foreach($result as $row):
  ?>   
    <tr>
    	<td><?php echo $Id; ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['comment_area']; ?></td>
        <td><?php echo $row['comment_date']; ?></td>
        <td><a class="btn btn-default" href="../controller/delete_comment_process.php?comment_id=<?php echo $row['comment_id']; ?>" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

</section>

<?php include('../../include/layout/footer.php'); ?>
