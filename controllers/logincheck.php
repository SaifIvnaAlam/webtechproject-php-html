<?php
	session_start();
	function read() {
		$file = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
		$fr = fread($file, $fz);
		}
		fclose($file);
		return $fr;
		}
	
	if($_SERVER['REQUEST_METHOD']==='POST'){
		define("filepath", "../data/user.json");	
		$email = $_POST['email'];
		$password = $_POST['password'];
		$flag = false;


	$fileData = read();
    $users=json_decode($fileData);
	foreach($users as $user)
	{
	if($user->email === $email && $user->password === $password)
	$flag = true;
	}
	if($flag)
    {
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		setcookie($email, $email, time() + (60 * 30), "/");
		header('location: ../view/info.php');
		
    }
    else 
    {
		echo "invalid credentials!";
    }
	
	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	}
?>
