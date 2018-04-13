<?php
	//create a function to retrieve
	function get_users_admin()
	{
		global $conn;
		$sql = 'SELECT * FROM user where user_type="Admin" Order BY user_id DESC';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}//create a function to retrieve
	function get_users_members()
	{
		global $conn;
		$sql = 'SELECT * FROM user where user_type="Authorized Member" Order BY user_id DESC';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching usernames
	function username($username)
	{
		global $conn;
		$sql = 'SELECT * FROM user WHERE user_name = :username';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}//create a function to retrieve the matching usernames
	function username_admin($username)
	{
		global $conn;
	$sql = 'SELECT * FROM user WHERE user_name = :username AND user_type="Admin"' ;
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching usernames
	function get_user_id($id)
	{
		global $conn;
		$sql = 'SELECT * FROM user WHERE user_id = :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching usernames and id
	function find_username($username,$id)
	{
		global $conn;
		$sql = 'SELECT * FROM user WHERE user_name = :username || user_id= :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching usernames and id
	function addlog ($id,$date)
	{
		global $conn;
		$sql = "INSERT INTO user_log (user_id,log_date) VALUES (:id, :date)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':date', $date);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the matching usernames and id
	function getlog ($id)
	{
		global $conn;
		$sql = "SELECT * FROM user_log WHERE user_id = :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the total number of matching usernames
	function count_username($username)
	{
		global $conn;
		$sql = 'SELECT * FROM user WHERE user_name = :username';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		$statement->closeCursor();	
		return $count;
	}

	//create a function to add a new user with image
	function add_user_image($name, $username, $email, $password, $type,$image)
	{
		global $conn;
		$sql = "INSERT INTO user (name, user_name, user_email, user_password, user_type,user_image) VALUES (:name,  :username, :email, :password, :type, :image)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':password', $password);
		$statement->bindValue(':type', $type);
		$statement->bindValue(':image', $image);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new user with image
	function update_user_image($name, $username, $email, $password, $type,$image,$id)
	{
		global $conn;
		$sql = "UPDATE user SET  name= :name, user_name = :username, user_email= :email, user_password= :password, user_type= :type,user_image= :image where user_id= :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':password', $password);
		$statement->bindValue(':type', $type);
		$statement->bindValue(':image', $image);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to add a new user without image
	function add_user($name, $username, $email, $password, $type)
	{
		global $conn;
		$sql = "INSERT INTO user (name, user_name, user_email, user_password, user_type) VALUES (:name,  :username, :email, :password, :type)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':password', $password);
		$statement->bindValue(':type', $type);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new user without image
	function update_user($name, $username, $email, $password, $type,$id)
	{
		global $conn;
		$sql = "UPDATE user SET  name= :name, user_name = :username, user_email= :email, user_password= :password, user_type= :type where user_id= :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':email', $email);		
		$statement->bindValue(':password', $password);
		$statement->bindValue(':type', $type);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}

	//create a function to delete
	function delete_user($id, $username)
	{
		global $conn;
	$sql = "DELETE FROM user where user_name = :username || user_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to delete
	function delete_member($id)
	{
		global $conn;
	$sql = "DELETE FROM user where user_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to search
	function search_user($id, $username)
	{
		global $conn;
	$sql = "SELECT * FROM user where user_name = :username || user_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}

	//create a function to login
	function login($username, $password)
	{
		global $conn;
		$sql = 'SELECT * FROM user WHERE user_name = :username AND user_password = :password';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		$count = $statement->rowCount();	
		return $count;
	}
?>