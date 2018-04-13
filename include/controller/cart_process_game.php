<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_games.php');
    require_once ('../../include/functions/functions_users.php');

	if(isset($_SESSION['user']))
	{$mainuser=find_user();
    $user=username($mainuser);
	foreach($user as $row){ $userid=$row['user_id'];
	$username=$row['user_name'];}
	$gameid = $_GET['game_id'];
	$number=quantity_gameid($gameid);
	foreach( $number as $row){$quantity=$row['quantity'];}
	$count=count_gameid($gameid);
	if($count >= 1){
		$quantity++;
		 $finduser=get_cartid($userid);
		 foreach($finduser as $row){ $purchaseid=$row['games_purchased_id'];}
		 $remove2 =remove_gameid_purchased($gameid,$purchaseid);
		 if($remove2)
		 {$remove=remove_gameid($gameid); }		 
		 }
		else
		$quantity=1;
	if($_SESSION['cart']=="" && !isset($_SESSION['cart']) ){
		$randomDigit = rand(000,999);
		$id = strtolower($randomDigit.$username);
		$_SESSION['cart']=$id;
		}		
	$res2=add_cart_puchased($_SESSION['cart'],$userid,$gameid,$quantity);
		if($res2)
		{
	$res=add_cart($_SESSION['cart'],$userid,$gameid,$quantity);				
	$_SESSION['success'] = 'Game is added successfully in the cart.';
	redirect('..\..\public\pages\games-info.php');
	}
	else 
	{
	$_SESSION['error'] = 'Game did not add successfully in the cart.Please try again';
	redirect('..\..\public\pages\games-info.php');
	}
	
	}
	else {$_SESSION['error'] = 'Please login to buy Games.';
	redirect('..\..\public\pages\login.php');
		}
	?>