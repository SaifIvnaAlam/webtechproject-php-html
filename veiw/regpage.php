<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration page</title>
</head>
<body>
<div>
	<h1>Registration page </h1>

	<form method="POST" action="../controllers/Regpage.php">
		<input type="text" name="fname" placeholder="First Name">
		<br><br>
		<input type="text" name="lname" placeholder="Last Name">
		<br><br>
		<input type="email" name="email" placeholder="Email" >
		<br><br>
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="submit">
	</form>
</div>
</body>
</html>