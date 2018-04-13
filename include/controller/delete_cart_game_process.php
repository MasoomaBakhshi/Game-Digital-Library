<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_games.php');
    require_once ('../../include/functions/functions_users.php');
?>

<?php
	$id = $_GET['game_id'];
	$result = remove_gameid($id);
	$result2 =remove_gameid_purchased($id,$_SESSION['cart']);
	
	if($result || $result2)
	{
		$_SESSION['success'] = 'Game is deleted from cart successfully.';
		redirect('..\..\public\pages\cart.php');
	}
	else
	{
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		redirect('..\..\public\pages\cart.php');
	}
?>
