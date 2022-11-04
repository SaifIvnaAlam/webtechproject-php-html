<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['email'];
		$password = $_POST['password'];

		if($username != null && $password != null){

			$status = login($username, $password);
			if($status){
				$_SESSION['status'] = 'true';
				if(isset($_POST['remember']))
				{
					$_SESSION['utype'] = $usertype;
					$_SESSION['username'] = $username;

				 header('location: ../view/info.php');
				}
				
		}
		else
		{
		echo "invalid credentials!";
		}
	}
}
?>
