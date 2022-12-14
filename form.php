<?php
if(isset($_POST["Submit"])){
    setcookie('username', $_POST["username"],time()+7200);
    session_start();
    $_SESSION["username"] = $_POST["username"];

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE["username"])){
    echo "Cookies: Hello ".$_COOKIE["username"]."!<br>";
}
session_start();
if(isset($_SESSION["username"])){
    echo "Session: Hello ".$_SESSION["username"]."!<br>";
}
?>
<form action="form.php" method="POST">
    <input type="text" name="username"> 
    <input type="reset" value="Reset">
    <input type="submit" value="Get" name="Submit">
</form>
</body>
</html>