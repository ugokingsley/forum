<?php require_once('core/init.php'); ?>
<?php 
//create topic object
$topic=new Topic;
//get id from url
$topic_id=$_GET['id'];

//get template and assign vars
$template=new Template('templates/topic.php');
//assign vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;
//display template
echo $template;
?>