<?php require_once('core/init.php'); ?>
<?php 
//create topic object
$topic = new Topic;

//create user object
$user = new User;

//create validate object
$validate = new Validator;

if(isset($_POST['register'])){
	//create an array
	$data=array();
	$data['name']=$_POST['name'];
	$data['email']=$_POST['email'];
	$data['username']=$_POST['username'];
	$data['password']=md5($_POST['password']);
	$data['password2']=md5($_POST['password2']);
	$data['about']=$_POST['about'];
	$data['last_activity']=date("Y-m-d H:i:s");
	
	
	//required fields
	$field_array=array('name','email','username','password','password2');
	
	
	if($validate->isRequired($field_array)){
		if($validate->isValidEmail($data['email'])){
			if($validate->passwordsMatch($data['password'],$data['password2'])){
				//upload avatar image
	
					if($user->uploadAvatar()){
						$data['avatar']=$_FILES["avatar"]["name"];
					
					}else{
						$data['avatar']="noimage.png";
					}
					
					//register user
					if($user->register($data)){
						redirect('register.php','you are registered and can now log in','success');
					}else{
						redirect('register.php','something went wrong with registration','error');
					}
			} else {
				redirect('register.php','your password did not match','error');
			}
		}else{
			redirect('register.php','please use a valid email address','error');
		}	
	}else{
		redirect('register.php','please fill in all required fields','error');
	}	
	
	
}

//get template and assign vars
$template=new Template('templates/register.php');
// assign vars

//display templates
echo $template;
?>