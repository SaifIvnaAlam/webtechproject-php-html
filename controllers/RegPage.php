<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ragpage Page</title>
</head>
<body>

<h1>REGISTRATION PAGE</h1>

	<?php 
		define("filepath", "../data/user.json");		
		$flag = false;
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			if(empty($_POST['fname'])){
				echo "Field can' be empty";
				$flag = true;
			}
			if(empty($_POST['lname'])){
				echo "Field can' be empty";
					$flag = true;
			}
			if(empty($_POST['email'])){
				$lnameError = "Field can' be empty";
					$flag = true;
			}
			if(empty($_POST['password'])){
				echo "Field can' be empty";
					$flag = true;
			}
			if(!$flag){
			$firstname = sanitize($_POST['fname']);
			$lastname = sanitize($_POST['lname']);
			$password = sanitize($_POST['password']);
			$email = sanitize($_POST['email']);

				$fileData = read();
				if(empty($fileData))
				{
					$data[]=array("firstname" => $firstname, "lastname" => $lastname, "email" => $email, "password"=>$password );
				}
				else{
					$data = json_decode($fileData);
					array_push($data, array("firstname" => $firstname, "lastname" => $lastname, "email" => $email, "password"=>$password ));
				}
				$data_encode = json_encode($data);
				write("");
				$res = write($data_encode);
				if ($res) {
					echo "Registration Done Successfully";
				}
				else{
					echo "Registration Failed";
				}
			}
			}
		

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		function write($content) {
			$file = fopen(filepath, "w");
			$fw = fwrite($file, $content . "\n");
			fclose($file);
			return $fw;
			}
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
	?>

	<br><br>

	<a href="Form.php">Back</a> | <a href="Show_All.php">Show All</a>

</body>
</html>