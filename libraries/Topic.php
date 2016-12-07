<?php 
class Topic{
	//init the DB vars
	private $db;
	/** constructor
	*/
	public function __construct(){
		$this->db=new Database;
	}
	//get all topics
	public function getAllTopics(){
		$this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM topics
		INNER JOIN users
		ON topics.user_id=users.id
		INNER JOIN categories
		ON topics.category_id=categories.id
		ORDER BY create_date DESC
		");
	//assign the sesult set
	$results=$this->db->resultset();
	return $results;
	}
	
	//get by categories
	public function getByCategory($category_id){
		$this->db->query("SELECT topics.*,categories.*,users.username,users.avatar,categories.name FROM topics
		INNER JOIN categories
		ON topics.category_id=categories.id
		INNER JOIN users
		ON topics.user_id=users.id
		WHERE topics.category_id=:category_id
		");
	$this->db->bind(':category_id',$category_id);
	//assign the sesult set
	$results=$this->db->resultset();
	return $results;
	}
	
	
	//get total numb of topics
	
	public  function getTotalTopics(){
		$this->db->query('SELECT * FROM topics');
		$rows=$this->db->resultset();
		return $this->db->rowCount();
	}
	
	//get total categories
	
	public  function getTotalCategories(){
		$this->db->query('SELECT * FROM categories');
		$rows=$this->db->resultset();
		return $this->db->rowCount();
	}
	
/*
*	get category by id
*/	
public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id=:category_id");
		$this->db->bind(':category_id',$category_id);
		//assign row
		$row=$this->db->single();
		return $row;
}
	//get total replies
	
	public  function getTotalReplies($topic_id){
		$this->db->query('SELECT * FROM replies WHERE topic_id='.$topic_id);
		$rows=$this->db->resultset();
		return $this->db->rowCount();
	}
	
	public function getTopic($id){
		$this->db->query("SELECT topics.*,users.username,users.name,users.avatar FROM topics
		INNER JOIN users
		ON topics.user_id=users.id
		WHERE topics.id=:id
		");
		$this->db->bind(':id',$id);
		$row=$this->db->single();
		return $row;
	}
	
	public function getReplies($topic_id){
		$this->db->query("SELECT replies.*,users.* FROM replies
		INNER JOIN users
		ON replies.user_id=users.id
		WHERE replies.topic_id=:topic_id
		ORDER BY create_date ASC
		");
		$this->db->bind(':topic_id',$topic_id);
		//assign result set
		$results=$this->db->resultset();
		return $results;
	}
}
?>