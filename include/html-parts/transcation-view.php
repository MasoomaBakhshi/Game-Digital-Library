<?php 
include('../../include/controller/permission.php'); ?>
<div class="table-responsive">
<table class="table">
	<tr id="table-header">
        <th></th>
        <th></th>
    	<th>Transaction ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Address</th>
        <th>Zipcode</th>
        <th>Name on card</th>
        <th>Expire Date</th>
        <th>Credit Card No</th>
        <th>Credit Security Code</th>
        <th></th>
    </tr>
<?php $view=get_purchase();
foreach($view as $field):?>    
    <tr>
        <td><a class="btn btn-default" href="../../include/controller/delete_transaction_process.php?transaction_id=<?php echo $field['purchase_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
        <td><a class="btn btn-default" href="../../include/html-parts/transcation-form.php?transaction_id=<?php echo $field['purchase_id']; ?>" >Update</a></td>
    	<td><?php echo $field['purchase_id']; ?></td>
        <td><?php echo $field['email']; ?></td>
        <td><?php echo $field['name']; ?></td>
        <td><?php echo $field['address']."  ". $field['city']." ". $field['country']; ?></td>
        <td><?php echo $field['zipcode']; ?></td>
        <td><?php echo $field['cardname']; ?></td>
        <td><?php echo $field['month']."-". $field['year']; ?></td>
        <td><?php echo $field['creditno']; ?></td>
        <td><?php echo $field['code']; ?></td>
         <td><a class="btn btn-default" href="../../include/html-parts/transcation-detail.php?transaction_id=<?php echo $field['purchase_id']; ?>" >Detail</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>