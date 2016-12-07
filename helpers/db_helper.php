<?php 
/*
* get the numb of replies per topic
*/
function replyCount($topic_id){
	$db=new Database;
	$db->query('SELECT * FROM replies WHERE topic_id=:topic_id');
	$db->bind(':topic_id',$topic_id);
	//assign rows
	$rows=$db->resultset();
	//get count
	return $db->rowCount();
}

//get categories

function getCategories(){
	$db=new database;
	$db->query('SELECT * FROM categories');
	//assign resultset
	$results = $db->resultset();
	return $results;
}

function userPostCount($user_id){
	$db=new Database;
	$db->query('SELECT * FROM topics WHERE user_id=:user_id');
	$db->bind(':user_id',$user_id);
	//assign rows
	$rows=$db->resultset();
	//get count
	$topic_count=$db->rowCount();
	$db->query('SELECT * FROM replies WHERE user_id=:user_id');
	$db->bind(':user_id',$user_id);
	//assign rows
	$rows=$db->resultset();
	//get count
	$reply_count=$db->rowCount();
	return $topic_count + $reply_count;
}
?>