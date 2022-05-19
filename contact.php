<?php include_once("includes/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ria's</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
  <div id="navbar">
    <img src="img/Riapizzarialogo.png" height="200px">
    <h1>Ria's Pizzaria</h1>
    <a href="./index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="contact.php" class="huidig">Contact</a>
    <a href="login.php">login</a>
  </div>
  <div id="content">
      <form id="contactform" name="contactform" onsubmit="return validateForm()" action="php/create.php" method="post">
        <label >naam</label>
        <input type="text" maxlength="32" name="naam" >

        <label >email</label>
        <input type="text" maxlength="32" name="email" >

        <label >bericht</label>
        <textarea type="text" name="bericht" maxlength="255" ></textarea>

        <input type="submit" name="berichtsubmit" value="verstuur">
      </form>
  </div>

  <script src="js/script.js"></script>
</body>

</html>
