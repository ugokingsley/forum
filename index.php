<?php require_once('core/init.php'); ?>
<?php 
//create topic obj
$topic=new Topic;
//get template and assign vars
$template=new Template('templates/frontpage.php');
// assign vars
$template->topics=$topic->getAllTopics();
$template->totalTopics=$topic->getTotalTopics();
$template->totalCategories=$topic->getTotalCategories();
//display templates
echo $template;
?>