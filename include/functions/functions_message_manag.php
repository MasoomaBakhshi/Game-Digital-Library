<?php
	//create a function to retrieve
	function get_messages()
	{
		global $conn;
		$sql = 'SELECT * FROM message Order BY message_id DESC';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	
	function find_message($messageid)
	{
		global $conn;
		$sql = 'SELECT * FROM message WHERE message_id= :messageid';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':messageid', $messageid);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	function find_reply($messageid)
	{
		global $conn;
		$sql = 'SELECT * FROM reply WHERE message_id= :messageid';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':messageid', $messageid);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		$statement->closeCursor();	
		return $count;
	}

	//create a function to add a new message
	function add_message($messagename, $messageemail, $messagesubject, $messagearea)
	{
		global $conn;
		$sql = "INSERT INTO message (message_name, message_email, message_subject, message_area) VALUES ( :messagename, :messageemail, :messagesubject, :messagearea)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':messagename', $messagename);
		$statement->bindValue(':messageemail', $messageemail);
		$statement->bindValue(':messagesubject', $messagesubject);		
		$statement->bindValue(':messagearea', $messagearea);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to add a new reply
	function add_reply($id, $userid, $messagesubject, $messagearea)
	{
		global $conn;
		$sql = "INSERT INTO reply (message_id, user_id, message_subject, message_reply) VALUES ( :id, :userid, :messagesubject, :messagearea)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':messagesubject', $messagesubject);		
		$statement->bindValue(':messagearea', $messagearea);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to delete
	function delete_message($messageid)
	{
		global $conn;
	$sql = "DELETE FROM message where message_id= :messageid ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':messageid', $messageid);
		$statement->execute();
		$result = $statement->rowCount();
		$statement->closeCursor();
		return $result;			
	}
?>