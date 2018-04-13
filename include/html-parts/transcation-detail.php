<?php
include('../../include/layout/dash-header.php');
?>
<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li><a class="select" href="transaction.php">Transaction Record</a></li>
    <li><a class="select" href="transcation-detail.php">Transaction Detail</a></li>
	
</ol>

<?php
 user_message(); 
$id=$_GET['transaction_id'];
?>

<section class="main ">
<div class="table-responsive">
<table class="table">
	<tr id="table-header">
    	<th>Buyer Name</th>
        <th>Games purchsed </th>
        <th>Quantities</th>  
        <th>Price</th>     
    </tr>
  <?php 
		 $detail=get_purchase_user($id);
		foreach($detail as $field){
		?>
    <tr><td>
	<?php 
		 if(($field['user_name'])==='NULL') { echo "User has been deleted.";}
		 else {echo $field['user_name'];}	}?></td>  
  <?php 
		 $detail=get_purchase_detail($id);
		foreach($detail as $field){
		?>
        <td><?php echo $field['game_name']; ?></td>
        <td><?php echo $field['quantity']; ?></td>
        <td><?php echo $field['game_price']; ?></td>
    </tr>
     <tr><td></td><?php }	?>
</table>

        <a href="../../public/pages/transaction.php" class="btn btn-default">Back</a>
</div>

    
</section>

<?php include('../../include/layout/footer.php'); ?>