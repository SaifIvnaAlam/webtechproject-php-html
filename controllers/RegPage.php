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

		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$firstname = sanitize($_POST['fname']);
			$lastname = sanitize($_POST['lname']);
			$password = sanitize($_POST['password']);
			$email = sanitize($_POST['email']);

			if (empty($firstname) or empty($lastname) ) {
				echo "Please fill up the form properly";
			}
			else {
				$filename = "../data/user.json";
				$file = fopen($filename, "w+");
				$data = array("firstname" => $firstname, "lastname" => $lastname, "email" => $email, "password"=>$password );
				$data = json_encode($data);
				fwrite($file, $data);
				fclose($file);

				echo "Data Saved Successfully";
			}
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<br><br>

	<a href="Form.php">Back</a> | <a href="Show_All.php">Show All</a>

</body>
</html>