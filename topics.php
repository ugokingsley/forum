<?php require_once('core/init.php'); ?>
<?php 
//create topics object
$topic=new Topic;
//get category from url
$category=isset($_GET['category']) ? $_GET['category']:null;
//get template and assign vars
$template=new Template('templates/topics.php');
//assign templates variable
if(isset($category)){
	$template->topics=$topic->getByCategory($category);
	$template->title='Posts In "'.$topic->getCategory($category)->name.'"';
}
if(!isset($category)){
		$template->topics=$topic->getAllTopics();
}

$template->totalTopics=$topic->getTotalTopics();
$template->totalCategories=$topic->getTotalCategories();

//display templates
echo $template;
?>