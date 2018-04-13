<?php 
include('../../include/controller/permission.php'); ?>
<div class="table-responsive">
<table class="table">
	<tr id="table-header">
    	<th>User ID</th>
        <th>User Email</th>
        <th>Name</th>
        <th>User Name</th>
        <th>User type</th>
        <th>User image link</th>
        <th></th>
    </tr>
 <?php 
 $view=get_users_admin();
foreach($view as $field):
?>   
    <tr>
    	<td><?php echo $field['user_id']; ?></td>
        <td><?php echo $field['user_email']; ?></td>
        <td><?php echo $field['name']; ?></td>
        <td><?php echo $field['user_name']; ?></td>
        <td><?php echo $field['user_type']; ?></td>
        <td><?php echo $field['user_image']; ?></td>
        <td><a href="../../include/html-parts/user-detail-log.php?user_id=<?php echo $field['user_id']; ?>" class="btn btn-default">Details of Users log</a></td>
    </tr>
   <?php endforeach; ?>
</table>
</div>