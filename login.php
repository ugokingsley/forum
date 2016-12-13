<?php include('core/init.php'); ?>
<?php 
if(isset($_POST['do_login'])){
	//get vars
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	//create a new user object
	$user=new User;
	if($user->login($username,$password)){
		redirect('index.php','You have been logged in','success');
	}else{
		redirect('index.php','that login is not valid','error');
	}
}else{
	redirect('index.php');
}
?>