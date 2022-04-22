<?php 
include_once("includes/connect.php");
include_once("php/loginbackend.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
  <div id="navbar">
    <img src="img/Riapizzarialogo.png" height="200px">
    <h1>Ria's Pizzaria</h1>
    <a href="./index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="contact.php">Contact</a>
    <a href="login.php" class="huidig">login</a>
  </div>

  <div id="content">
    <form id="loginform" name="login" action="php/loginbackend.php" method="post">
        Username:  <input id="textbox" type="text" name="username" required><br/>
        Password:  <input id="textbox" type="password" name="password" required><br/>
        <input type="submit" name="submit" value="Submit" />
    </form>
  </div>

  <script src="js/script.js"></script>
</body>

</html>