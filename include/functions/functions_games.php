<?php
	//create a function to retrieve
	function get_games()
	{
		global $conn;
		$sql = 'SELECT * FROM game Order BY game_date DESC ';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}

	//create a function to retrieve  
	function get_games_id($gameid)
	{
		global $conn;
		$sql = 'SELECT *  FROM game WHERE game_id= :id ';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $gameid);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}//create a function to retrieve  
	function get_games_user($userid)
	{
		global $conn;
		$sql = 'SELECT * FROM game WHERE user_id= :id ';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $userid);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve top_games
	function top_games()
	{
		global $conn;
		$sql = 'SELECT * FROM game ORDER BY game_rating DESC LIMIT 3 ';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching  game name and game id
	function find_game($gamename,$gameid)
	{
		global $conn;
		$sql = 'SELECT * FROM game WHERE game_name = :name || game_id= :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $gamename);
		$statement->bindValue(':id', $gameid);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the total number of matching usernames
	function count_gamename($gamename)
	{
		global $conn;
		$sql = 'SELECT * FROM game WHERE game_name = :name';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $gamename);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		$statement->closeCursor();	
		return $count;
	}

	//create a function to add a new game with image
	function add_game_image($gamename, $gametype, $gamerating, $gamedes, $gamedate, $gameimage, $gamelink,$userid,$release,$price)
	{
		global $conn;
		$sql = "INSERT INTO game (game_name, game_type, game_rating, game_description, game_date,game_image, game_link, user_id, game_release_date, game_price) VALUES ( :gamename, :gametype, :gamerating, :gamedes, :gamedate, :gameimage, :gamelink, :userid, :release, :price)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $gamename);
		$statement->bindValue(':gametype', $gametype);
		$statement->bindValue(':gamerating', $gamerating);		
		$statement->bindValue(':gamedes', $gamedes);
		$statement->bindValue(':gamedate', $gamedate);
		$statement->bindValue(':gameimage', $gameimage);
		$statement->bindValue(':gamelink', $gamelink);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':release', $release);
		$statement->bindValue(':price', $price);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new game with image
	function update_game_image($gamename, $gametype, $gamerating, $gamedes, $gamedate, $gameimage, $gamelink,$userid,$release,$gameid,$price)
	{
		global $conn;
		$sql = "UPDATE game SET  game_name= :gamename, game_type = :gametype, game_rating= :gamerating, game_description= :gamedes, game_date= :gamedate, game_image= :gameimage, game_link= :gamelink, user_id= :userid, game_release_date=:release, game_price=:price   where game_id= :gameid";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $gamename);
		$statement->bindValue(':gametype', $gametype);
		$statement->bindValue(':gamerating', $gamerating);		
		$statement->bindValue(':gamedes', $gamedes);
		$statement->bindValue(':gamedate', $gamedate);
		$statement->bindValue(':gameimage', $gameimage);
		$statement->bindValue(':gamelink', $gamelink);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':release', $release);
		$statement->bindValue(':gameid', $gameid);
		$statement->bindValue(':price', $price);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to add a new game without image
	function add_game($gamename, $gametype, $gamerating, $gamedes, $gamedate, $gamelink,$userid,$release,$price)
	{
		global $conn;
		$sql = "INSERT INTO game (game_name, game_type, game_rating, game_description, game_date, game_link, user_id, game_release_date, game_price) VALUES ( :gamename, :gametype, :gamerating, :gamedes, :gamedate, :gamelink, :userid, :release, :price)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $gamename);
		$statement->bindValue(':gametype', $gametype);
		$statement->bindValue(':gamerating', $gamerating);		
		$statement->bindValue(':gamedes', $gamedes);
		$statement->bindValue(':gamedate', $gamedate);
		$statement->bindValue(':gamelink', $gamelink);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':release', $release);
		$statement->bindValue(':price', $price);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new game without image
	function update_game($gamename, $gametype, $gamerating, $gamedes, $gamedate, $gamelink,$userid,$release,$gameid,$price)
	{
		global $conn;
		$sql = "UPDATE game SET  game_name= :gamename, game_type = :gametype, game_rating= :gamerating, game_description= :gamedes, game_date= :gamedate, game_link= :gamelink, user_id= :userid, game_release_date=:release, game_price=:price  where game_id= :gameid";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $gamename);
		$statement->bindValue(':gametype', $gametype);
		$statement->bindValue(':gamerating', $gamerating);		
		$statement->bindValue(':gamedes', $gamedes);
		$statement->bindValue(':gamedate', $gamedate);
		$statement->bindValue(':gamelink', $gamelink);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':release', $release);
		$statement->bindValue(':gameid', $gameid);
		$statement->bindValue(':price', $price);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}

	//create a function to delete
	function delete_game($gameid, $gamename)
	{
		global $conn;
	$sql = "DELETE FROM game where game_name = :gamename || game_id= :gameid ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $gamename);
		$statement->bindValue(':gameid', $gameid);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to delete
	function delete_game_id($gameid)
	{
		global $conn;
	$sql = "DELETE FROM game where game_id= :gameid ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gameid', $gameid);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to search
	function search_game($id, $name)
	{
		global $conn;
	$sql = "SELECT * FROM game where game_name = :gamename || game_id= :gameid ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':gamename', $name);
		$statement->bindValue(':gameid', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
	
	//create a function to update add in cart 
	function add_cart($id,$userid,$gameid,$quantity)
	{
		global $conn;
		$sql = "INSERT INTO cart (games_purchased_id,user_id,game_id,quantity) VALUES (:id,:userid,:gameid,:quantity)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':gameid', $gameid);
		$statement->bindValue(':quantity', $quantity);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	function add_cart_puchased($id,$userid,$gameid,$quantity)
	{
		global $conn;
		$sql = "INSERT INTO games_purchase (games_purchased_id,user_id,game_id,quantity) VALUES (:id,:userid,:gameid,:quantity)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':gameid', $gameid);
		$statement->bindValue(':quantity', $quantity);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	function add_cart_purchaseid($id,$gamepurchaseid)
	{
		global $conn;
		$sql = "UPDATE games_purchase SET purchase_id=:id where games_purchased_id= :gamepurchaseid";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':gamepurchaseid', $gamepurchaseid);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update add in cart 
	function get_cartid($id)
	{
		global $conn;
		$sql = "SELECT games_purchased_id FROM cart where user_id=:id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;			
	}	
	function get_cart($id)
	{
		global $conn;
		$sql = "SELECT *,game.game_name,game.game_price FROM cart INNER JOIN game ON game.game_id=cart.game_id where cart.user_id=:id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;			
	}	//create a function to retrieve the total number of matching usernames
	function count_gameid($id)
	{
		global $conn;
		$sql = 'SELECT * FROM cart WHERE game_id = :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		$statement->closeCursor();	
		return $count;
	}//create a function to retrieve the total number of matching usernames
	function quantity_gameid($id)
	{
		global $conn;
		$sql = 'SELECT  quantity FROM cart WHERE game_id = :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();		
		return $result;
	}
	function remove_gameid($id)
	{
		global $conn;
		$sql = 'Delete FROM cart WHERE game_id = :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();	
		return $result;
	}
	function remove_gameid_purchased($id,$purchaseuser)
	{
		global $conn;
		$sql = 'Delete FROM games_purchase WHERE game_id = :id && games_purchased_id=:purchaseuser ';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':purchaseuser', $purchaseuser);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();	
		return $result;
	}
	function delete_purchase_user($id)
	{
		global $conn;
		$sql = 'Delete FROM cart WHERE user_id = :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();	
		return $result;
	}
?>