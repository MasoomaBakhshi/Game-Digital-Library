<?php
include('../../include/layout/web-header.php');
?>
<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../index.php">Home</a></li>
    <li><a class="select" href="cart.php">Cart</a></li>
</ol>
<?php user_message(); ?>
<section class="main">
<h2>GAMES IN THE SHOPPINGB CART </h2>
<?php
if(isset($_SESSION['user'])){
    $user=username(($_SESSION['user']));
	foreach($user as $row){ $userid=$row['user_id'];}
 $_SESSION['price']=0;
  $res= get_cart($userid);
  if (!empty($res)) {?>	  
<table class="table">
	<tr id="table-header">
    	<th>Game name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
    </tr>
 <?php foreach($res as $row):
	   $_SESSION['price']+=$row['game_price']*$row['quantity'];
	  ?>     
    <tr>
    
    	<td><?php echo $row['game_name']; ?></td> 
        <td><?php echo $row['quantity']; ?></td>        
        <td><?php echo $row['game_price']*$row['quantity']; ?></td>        
        <td><a  class="btn btn-default" href="../../include/controller/delete_cart_game_process.php?game_id=<?php echo $row['game_id']; ?>" onclick="return confirm('Are you sure you want to delete this game from cart?')">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
    <th></th>
    <th>Total</th>
    <th><?php echo  $_SESSION['price']; ?></th>
    <th></th>
    </tr>
</table>

 </br>
<div class="row">
  <a class="col-md-offset-7 col-sm-offset-7 col-xs-offset-1 btn btn-default"  href="#myModal" data-toggle="modal" data-target="#myModal-purchase">Purchase</a>
    
  <a href="index.php"  class="btn btn-default ">Continue Shopping</a>
<?php 
} 
else
echo "<center><h4>No game in cart</h4></center>";
}
else
echo "<center><a href='login.php'><h4>Login to Purchase</h4></a></center>";
?>
 </div>
 </br>
    <?php
	       include('../../include/html-parts/modal-purchase.php');
        ?>
</section>

<?php include('../../include/layout/footer.php'); ?>