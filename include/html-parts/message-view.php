<?php 
include('../../include/controller/permission.php'); ?>
<div class="table-responsive">
<table class="table">
	<tr id="table-header">
    	<th>Message ID</th>
        <th>Message Email</th>
        <th>Message Name</th>
        <th>Message subject</th>
        <th>Message comment</th>
        <th></th>
        <th></th>
    </tr>
 <?php 
 $view=get_messages();
foreach($view as $field):
?>   
    <tr>
    	<td><?php echo $field['message_id']; ?></td>                
        <td><?php echo $field['message_email']; ?></td>
        <td><?php echo $field['message_name']; ?></td>
        <td><?php echo $field['message_subject']; ?></td>
        <td><?php echo $field['message_area']; ?></td>
        <td><a class="btn btn-default" href="../../include/controller/delete_message_process.php?message_id=<?php echo $field['message_id']; ?>" onclick="return confirm('Are you sure you want to delete this message?')">Delete</a></td>
        <?php $res=find_reply($field['message_id']); if($res >= 1){?>         
        <td>Already replied</td><?php } else  { ?>
        <td><a class="btn btn-default" href="../../include/html-parts/reply.php?message_id=<?php echo $field['message_id']; ?>"> Reply</a></td>
        <?php } ?>
    </tr>
   <?php endforeach; ?>
</table>
</div>