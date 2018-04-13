<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li><a class="select" href="../../public/pages/transaction.php">Transaction Record</a></li>
</ol>

<section class="main ">

<?php	
	$transactionID = $_GET['transaction_id'];
	$result=get_purchaseid($transactionID); 
?>
<?php foreach($result as $row){   ?>
<div class="alert alert-danger" id="alert-update" role="alert"></div>
<form action="../controller/update_transaction_process.php" name="update" id="transaction-update" class="form-horizontal" method="post" onsubmit="return checkupdate()">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-name" class="form-control" value="<?php echo $row['name']; ?>" onchange="checkname(this)" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-address" class="form-control" value="<?php echo $row['address']; ?>" onchange="checkaddress(this)" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">City</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-city" class="form-control" onchange="checkcity(this)" value=" <?php echo $row['city']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Country</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-country" class="form-control" onchange="checkcountry(this)" value=" <?php echo $row['country']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Zipcode</label>
                    <div class="col-sm-6">
                      <input name="transaction-zipcode" class="form-control" onchange="checkzipcode(this)" value=" <?php echo $row['zipcode']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" name="transaction-email" class="form-control" onchange="checkmail(this)" id="inputEmail3" value=" <?php echo $row['email']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name on card</label>
                    	<div class="col-sm-6">
                     <input type="text" class="form-control" value="<?php echo $row['cardname']; ?>" name="transaction-cardname" onchange="checkcardname(this)" required="required">
                        </div>
                  </div>
                                   
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Credit Card No</label>
                    <div class="col-sm-6">
                      <input type="number" name="transaction-credit" class="form-control" onchange="checkcard(this)"  value="<?php echo $row['creditno']; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group" >
                    <label class="col-sm-2 control-label">Expire Date</label>
                    <div class="col-sm-3">
                      <select class="form-control" onchange="checkdate(this)" name="transaction-month" required >
                         <option><?php echo $row['month']; ?></option>
                      	<?php 
						for($i=1;$i<=12;$i++){?>
                           <option><?php echo $i; ?></option><br/>
						  <?php }?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                      <select class="form-control" onchange="checkdate(this)" id="year" name="transaction-year" required>
                         <<option><?php echo $row['year']; ?></option>
                      	<?php 
						for($i=2016;$i<=5000;$i++){?>
                           <option><?php echo $i; ?></option><br/>
						  <?php }?>
                        </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Credit Security Code</label>
                    <div class="col-sm-6">
                      <input type="number" name="transaction-code" class="form-control" value="<?php echo $row['code']; ?>" onchange="cardcode(this)" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <input type="hidden"  name="transaction-id" class="form-control" value="<?php echo $row['purchase_id']; ?>"  required>
                    </div>
                    
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="update-transaction" class="btn btn-default">Update</button>
                      <strong><a class="btn btn-default" href="../../public/pages/transaction.php">Back</a></strong>
                    </div>
                  </div>                  
                </form>
                <?php } ?>
</section>

<?php include('../../include/layout/footer.php'); ?>				