<?php include('core/init.php'); ?>
<?php 
if(isset($_POST['do_log_out'])){
	//create user object
	$user=new User;
	if($user->logout){
		redirect('index.php','you are now logged out','success');
	}else{
		redirect('index.php');
	}
}
?>