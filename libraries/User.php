<?php 
class User{
	/*
	*	upload avatar
	*/
	public function uploadAvatar(){
	$allowedExts=array("gif","jpeg","jpg","png");
	$temp = explode(".",$_FILES["avatar"]["name"]);
	$extension=end($temp);
	
	if ((( $_FILES["avatar"]["type"] == "image/gif") 
		||	( $_FILES["avatar"]["type"] == "image/jpeg") 
		||	( $_FILES["avatar"]["type"] == "image/jpg") 
		||	( $_FILES["avatar"]["type"] == "image/p-jpeg") 
		||	( $_FILES["avatar"]["type"] == "image/x-png")
		||	( $_FILES["avatar"]["type"] == "image/png"))
		&&  ( $_FILES["avatar"]["size"] < 50000)
		&& 	in_array($extension, $allowedExts)){
			
			if($_FILES["avatar"]["error"] > 0){
				redirect('register.php', $_FILES["avatar"]["error"], 'error');
			}else{
			if(file_exists("images/avatars/".$_FILES["avatar"]["name"])){
				redirect("register.php","file already exist","error");
			}else{
				move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatars/" .$_FILES["avatar"]["name"]);
				return true;
			}
			}
		}else{
			redirect("register.php", "invalid file type", "error");
		}
		}
	
		/* user login
		*/
		public function login($username,$password){
			$this->db->query("SELECT * FROM users
								WHERE username=:username
								AND password=:password
								");
			//bind values
			$this->db->bind(':username',$username);
			$this->db->bind(':password',$password);
			
			$row=$this->db->single();
			
			//check rows
			if($this->db->rowCount() > 0){
				$this->setUserData($row);
				return true;
			}else{
				return false;
			}
		}
		
		
		/*
		* 	set uset data
		*/
		private function setUserData($row){
			$_SESSION['is_logged_in']=true;
			$_SESSION['user_id']= $row->id;
			$_SESSION['username']=$row->username;
			$_SESSION['name']= $row->name;
		}
		
		/*
		* 	logout
		*/
		
		public function logout(){
			unset($_SESSION['is_logged_in']);
			unset($_SESSION['user_id']);
			unset($_SESSION['username']);
			unset($_SESSION['name']);
			return true;
		}
		
}
?>