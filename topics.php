<?php require_once('core/init.php'); ?>
<?php 
//create topics object
$topic=new Topic; 

//get category from url
$category=isset($_GET['category']) ? $_GET['category']:null;

//get user from url
$user_id=isset($_GET['user']) ? $_GET['user']:null;

//get template and assign vars
$template=new Template('templates/topics.php');
//assign templates variable
if(isset($category)){
	$template->topics=$topic->getByCategory($category);
	$template->title='Posts In "'.$topic->getCategory($category)->name.'"';
}


//check for user filter
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}


if(!isset($category) && !isset($user_id)){
		$template->topics=$topic->getAllTopics();
}

$template->totalTopics=$topic->getTotalTopics();
$template->totalCategories=$topic->getTotalCategories();

//display templates
echo $template;
?>