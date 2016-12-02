<?php require_once('core/init.php'); ?>
<?php 
//create topic obj
$topic=new Topic;
//get template and assign vars
$template=new Template('templates/frontpage.php');
// assign vars
$template->topics=$topic->getAllTopics();
//display templates
echo $template;
?>