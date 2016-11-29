<?php require_once('core/init.php'); ?>
<?php 
//get template and assign vars
$template=new Template('templates/frontpage.php');
// assign vars
$template->heading = 'This is the template heading';
//display templates
echo $template;
?>