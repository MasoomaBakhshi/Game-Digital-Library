<?php
	//create a function to retrieve
	function get_blogs()
	{
		global $conn;
		$sql = 'SELECT * FROM blog ORDER BY blog_date DESC';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
		//create a function to retrieve
	function get_blogs_new()
	{
		global $conn;
		$sql = 'SELECT * FROM blog ORDER BY blog_date DESC LIMIT 4';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
		//create a function to retrieve
	function get_blogs_news()
	{
		global $conn;
		$sql = 'SELECT * FROM blog where blog_type="News" ORDER BY blog_date DESC LIMIT 4 ';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve
	function get_blogs_blogs()
	{
		global $conn;
		$sql = 'SELECT * FROM blog where blog_type="Blog" ORDER BY blog_date DESC LIMIT 4 ';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
		//create a function to retrieve the matching  blog name and blog id
	function find_blog($id)
	{
		global $conn;
		$sql = 'SELECT * FROM blog WHERE blog_id= :id';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
		//create a function to retrieve the matching  blog name and blog id
	function find_blog_user($name)
	{
		global $conn;
		$sql = 'SELECT * FROM blog WHERE blog_author = :name';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	//create a function to retrieve the total number of matching usernames
	function count_blogname($name)
	{
		global $conn;
		$sql = 'SELECT * FROM blog WHERE blog_name = :name';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		$statement->closeCursor();	
		return $count;
	}

	//create a function to add a new blog with image
	function add_blog_image($name, $date,$author,$des,$link,$img,$brief,$userid,$type)
	{
		global $conn;
		$sql = "INSERT INTO blog (blog_name, blog_date, blog_author, blog_des,blog_link, blog_image, blog_brief , user_id, blog_type) VALUES ( :name, :date, :author, :des, :link,:image, :brief, :userid , :type)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':author', $author);		
		$statement->bindValue(':des', $des);
		$statement->bindValue(':link', $link);
		$statement->bindValue(':image', $img);
		$statement->bindValue(':brief', $brief);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':type', $type);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to add a new blog with image
	function add_blog($name, $date,$author,$des,$link,$brief,$userid,$type)
	{
		global $conn;
		$sql = "INSERT INTO blog (blog_name, blog_date, blog_author, blog_des,blog_link, blog_brief, user_id, blog_type) VALUES ( :name, :date, :author, :des, :link, :brief, :userid, :type)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':author', $author);		
		$statement->bindValue(':des', $des);
		$statement->bindValue(':link', $link);
		$statement->bindValue(':brief', $brief);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':type', $type);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new blog 
	function update_blog($name, $date,$author,$des,$link,$id,$brief,$userid,$type)
	{
		global $conn;
		$sql = "UPDATE blog SET  blog_name= :name, blog_date = :date, blog_author = :author, blog_des = :des, blog_link =:link, blog_brief=:brief, user_id= :userid, blog_type= :type where blog_id= :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':author', $author);		
		$statement->bindValue(':des', $des);
		$statement->bindValue(':link', $link);
		$statement->bindValue(':brief', $brief);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':type', $type);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to update a new blog with image
	function update_blog_image($name, $date,$author,$des,$link,$id,$img,$brief,$userid,$type)
	{
		global $conn;
		$sql = "UPDATE blog SET  blog_name= :name, blog_date = :date, blog_author = :author, blog_des = :des , blog_link =:link, blog_image= :img, blog_brief=:brief, user_id= :userid, blog_type= :type   where blog_id= :id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':author', $author);		
		$statement->bindValue(':des', $des);
		$statement->bindValue(':link', $link);
		$statement->bindValue(':brief', $brief);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':id', $id);
		$statement->bindValue(':img', $img);
		$statement->bindValue(':type', $type);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to delete
	function delete_blog($id)
	{
		global $conn;
	$sql = "DELETE FROM blog where blog_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to search
	function search_blog($id, $name)
	{
		global $conn;
	$sql = "SELECT * FROM  blog where blog_name = :name || blog_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	//create a function to search
	function add_comment($userid, $blogid, $des, $date)
	{
		global $conn;
	$sql = "INSERT INTO comment (user_id,  blog_id,comment_date, comment_area) VALUES ( :userid, :blogid, :date, :des)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':userid', $userid);
		$statement->bindValue(':blogid', $blogid);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':des', $des);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	function get_comment($blogid)
	{
		global $conn;
	    $sql ="SELECT user.user_name,user.user_image, comment.comment_area, comment.comment_id,comment.comment_date FROM user INNER JOIN comment USING(user_id) where comment.blog_id=:id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $blogid);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;			
	}
	function delete_comment($id)
	{
		global $conn;
	$sql = "DELETE FROM comment where comment_id= :id ";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;	}
		function get_comment_blog($id){
			global $conn;
	    $sql ="SELECT blog_id FROM comment where comment_id=:id";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;	
		}
	?>