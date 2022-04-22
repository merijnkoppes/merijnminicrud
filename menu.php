<?php include_once("includes/connect.php"); ?>

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
    <a href="menu.php" class="huidig">Menu</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">login</a>
  </div>

  <div id="content">
    <div id="menu">
      <input type="text" id="mySearch" onkeyup="zoekFunctie()" placeholder="Search.." title="Type in a category">
      <ul id="menulist">
        <?php
          $sql = "SELECT * FROM menukaart";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchALL();

          foreach ($result as $res) { ?>
            <li>
              <div id="item">
                <h6 class="hidden">
                  <?php echo $res["tag"];
                  echo $res["product"];
                  echo $res["ingredienten"];
                  ?>
                </h6>
                <div id="product">
                  <h2><?php echo $res["product"]; ?></h2>
                </div>
                <?php if (!$res["ingredienten"] == '') { ?>
                  <div id="ingredienten">
                    <h3><?php echo $res["ingredienten"]; ?></h3>
                  </div>
                <?php } ?>
                <div id="prijs">
                  <h3>€<?php echo $res["prijs"]; ?></h3>
                </div>
              </div>
            </li>
        <?php } ?>
      </ul>

    </div>
  </div>
  
  <script src="js/script.js"></script>
</body>

</html>