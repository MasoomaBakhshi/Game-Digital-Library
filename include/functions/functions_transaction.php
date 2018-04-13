<?php
	//create a function to retrieve
	function get_purchase()
	{
		global $conn;
		$sql = 'SELECT * FROM purchase Order BY purchase_id DESC';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve with id
	function get_purchaseid($id)
	{
		global $conn;
		$sql = 'SELECT * FROM purchase where purchase_id= :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	function get_purchase_detail($id)
	{
		global $conn;
	$sql = 'SELECT games_purchase.* , game.* FROM games_purchase INNER JOIN game ON games_purchase.game_id=game.game_id where purchase_id=:id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	function get_purchase_user($id)
	{
		global $conn;
	$sql = 'SELECT DISTINCT user.user_name FROM games_purchase INNER JOIN user ON games_purchase.user_id=user.user_id where purchase_id=:id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to add a purchase
	function add_purchase($id,$name, $email, $address, $city, $country, $zipcode, $Creditno, $code, $month, $year, $cardname,$userid,$price )
	{
		global $conn;
		$sql = "INSERT INTO purchase (purchase_id,name, email, address, city, country, zipcode, creditno, code, month, year, cardname, user_id, price) VALUES (:id,:name, :email, :address, :city, :country, :zipcode, :Creditno, :code, :month, :year, :cardname, :userid, :price)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':address', $address);
		$statement->bindValue(':city', $city);
		$statement->bindValue(':country', $country);
		$statement->bindValue(':zipcode', $zipcode);
		$statement->bindValue(':Creditno', $Creditno);
		$statement->bindValue(':code', $code);
		$statement->bindValue(':month', $month);
		$statement->bindValue(':year', $year);
		$statement->bindValue(':cardname', $cardname);	
		$statement->bindValue(':userid', $userid);	
		$statement->bindValue(':price', $price);		
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update purchase 
	function update_purchase($name, $email, $address, $city, $country, $zipcode, $Creditno, $code, $month, $year, $cardname,$id)
	{
		global $conn;
		$sql = "UPDATE purchase SET  name= :name, email= :email, address= :address, city= :city, country= :country, zipcode= :zipcode,  creditno= :Creditno, code= :code, month= :month, year= :year, cardname= :cardname where purchase_id= :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':address', $address);
		$statement->bindValue(':city', $city);
		$statement->bindValue(':country', $country);
		$statement->bindValue(':zipcode', $zipcode);
		$statement->bindValue(':Creditno', $Creditno);
		$statement->bindValue(':code', $code);
		$statement->bindValue(':month', $month);
		$statement->bindValue(':year', $year);
		$statement->bindValue(':cardname', $cardname);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}

	//create a function to delete
	function delete_purchase($id)
	{
		global $conn;
	$sql = "DELETE FROM purchase where purchase_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
?>