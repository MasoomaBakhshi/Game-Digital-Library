<?php 
include('../../include/controller/permission.php'); ?>
<div class="table-responsive">
<table class="table">
	<tr>
    	<th>User ID</th>
        <th>User Email</th>
        <th>Name</th>
        <th>User Name</th>
        <th>User type</th>
        <th>User image link</th>
        <th></th>
    </tr>
 <?php 
 $view=get_users_members();
foreach($view as $field):
?>   
    <tr>
    	<td><?php echo $field['user_id']; ?></td>
        <td><?php echo $field['user_email']; ?></td>
        <td><?php echo $field['name']; ?></td>
        <td><?php echo $field['user_name']; ?></td>
        <td><?php echo $field['user_type']; ?></td>
        <td><?php echo $field['user_image']; ?></td>
        <td><a href="../../include/controller/member-delete.php?user_id=<?php echo $field['user_id']; ?>" class="btn btn-default"onclick="return confirm('Are you sure you want to delete this member?')">Delete</a></td>
    </tr>
   <?php endforeach; ?>
</table>
</div>