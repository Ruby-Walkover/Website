<?php
 session_start();
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
<header>
<nav>
<a href="#">
<img src="img/logo.jpg" alt="logo" width="500" height="500">
</a>
    <ul>
        <li><a href="index.php"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
<div>
<?php 
    if(isset($_SESSION['userId'])){
        echo '<form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">logout</button>
        </form>';
    }
    else {
        echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">login</button>
    </form>
    <a href="signup.php">Signup</a>';
    }
?>
    
</div>
</nav>
</header>