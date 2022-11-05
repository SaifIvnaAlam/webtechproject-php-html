<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php
    session_start();
    echo "Welcome" . " " .$_SESSION['email']; 
    ?>
    <br>
    <a href="../controllers/logout.php">Logout</a>
</body>
</html>