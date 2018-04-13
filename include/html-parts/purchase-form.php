<?php if(isset($_SESSION['user'])){
$mainuser=find_user();
$user=username($mainuser);
foreach($user as $field){ $userid=$field['user_id'];
$username=$field['user_name']; $email=$field['user_email']; } 
if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))
{
	$gamepurchase=get_cartid($userid);
     foreach($gamepurchase as $row){
	 $id=$row['games_purchased_id'];}
		$_SESSION['cart']=$id;
		}
	?>	           
<div class="alert alert-danger" id="alert" role="alert"></div>
<form action="../../include/controller/add_transaction_process.php" name="purchase" class="form-horizontal" method="post" onsubmit="return checksubmit()" >   
       
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-name" class="form-control" placeholder="Name" value="<?php echo $username ?>" onchange="checkname(this)" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-address" class="form-control" placeholder="Address" onchange="checkaddress(this)" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">City</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-city" class="form-control" onchange="checkcity(this)" placeholder="City" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Country</label>
                    <div class="col-sm-6">
                      <input type="text" name="transaction-country" class="form-control" onchange="checkcountry(this)" placeholder="Country" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Zipcode</label>
                    <div class="col-sm-6">
                      <input type="number"  name="transaction-zipcode" class="form-control" onchange="checkzipcode(this)" placeholder="Zipcode" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" name="transaction-email" class="form-control" value="<?php echo $email; ?>" onchange="checkmail(this)" id="inputEmail3" placeholder="Eamil" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name on card</label>
                    	<div class="col-sm-6">
                     <input type="text" class="form-control" name="transaction-cardname" onchange="checkcardname(this)" required="required">
                        </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Credit Card No</label>
                    <div class="col-sm-6">
                      <input type="number" name="transaction-credit" class="form-control" onchange="checkcard(this)" placeholder="Credit Card No" required>
                    </div>
                  </div>
                  
                  <div class="form-group" >
                    <label class="col-sm-2 control-label">Expire Date</label>
                    <div class="col-sm-3">
                      <select class="form-control" onchange="checkdate(this)" name="transaction-month" required >
                         <option>Month</option>
                      	<?php 
						for($i=1;$i<=12;$i++){?>
                           <option><?php echo $i; ?></option>
						  <?php }?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                      <select class="form-control" onchange="checkdate(this)" id="year" name="transaction-year" required>
                         <option>Year</option>
                      	<?php 
						for($i=2016;$i<=5000;$i++){?>
                           <option><?php echo $i; ?></option>
						  <?php }?>
                        </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Credit Security Code</label>
                    <div class="col-sm-6">
                      <input type="number" name="transaction-code" class="form-control" placeholder="Credit Security Code" onchange="cardcode(this)" required>
                    </div>
                  </div>
                  
                  <input type="hidden" value="<?php echo $userid; ?> " name="user-id" class="form-control"  required>
                  <input type="hidden" value="<?php $randomDigit = rand(0000,9999); $purchaseid = strtolower($randomDigit . "_" . $username); echo $purchaseid ; ?> " name="purchase-id" class="form-control"  required>
                  <input type="hidden" value="<?php echo $_SESSION['price']; ?> " name="price" class="form-control"  required>
                                    
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="update-transaction" class="btn btn-default">Purchase</button>
                    </div>
                  </div>                  
                </form>
                <?php } ?>