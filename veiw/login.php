<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>log in</title>
</head>
<body>
<div>
	<h1>Log in page </h1>

	<form method="POST" action="../controllers/logincheck.php">

		<input type="email" name="email" placeholder="Email" >
		<br><br>
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="button", value='log in'>
	</form>
</div>
</body>
</html>