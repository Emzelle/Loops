<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Act 2</h1>
    <form method="post">
        <label for="password">Please enter the password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Submit">
    </form>
    <div>
<?php
$password = "password123";

do {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $check = trim($_POST['password']);

    if ($check === $password) {
        echo "Access Granted";
        break;
    } else {
        echo "please try again";
    }
    }
} while ($password = "");
?>
</div>
</body>
</html>
