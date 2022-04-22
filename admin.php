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


<body id="adminbody">
  <div id="navbar">
    <img src="img/Riapizzarialogo.png" height="200px">
    <h1>Ria's Pizzaria</h1>
    <a href="./index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="contact.php">Contact</a>
    <a href="" class="huidig">admin</a>
  </div>
  <div id="content" class="admincontent">
    <div class="formdiv">
      <p><a href="?logout=1"><button>Logout</button></a></p>
      <form id="createform" action="php/create.php" method="post">
        <h2>Nieuw item</h2><br>
        <label>tags</label><br>
        <input type="text" name="tag"><br>
        <label>product</label><br>
        <input type="text" name="product" required><br>
        <label>ingredienten</label><br>
        <input type="text" name="ingredienten"><br>
        <label>prijs</label><br>
        <input type="text" name="prijs" required><br>
        <input type="submit" name="submitknop" value="toevoegen">
      </form>
      <h2 id="berichtentitel">openstaande berichten</h2>

      <?php
        $sql = "SELECT * FROM berichten";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $res) { ?>
          <div id="berichten">
            <h5><?php echo $res["naam"]; ?></h5>
            <h5><?php echo $res["email"]; ?></h5>
            <h6><?php echo $res["bericht"]; ?></h6>
          </div>
          <a id="deletelink" href="php/berichtdelete.php?id=<?php echo $res["id"] ?>"><button>delete</button></a>
      <?php } ?>
    </div>
    <div class="formdiv">
      <h1>Menu aanpassen</h1>
      <?php
        $sql = "SELECT * FROM menukaart";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $res) { ?>
          <form id="updateform" action="php/update.php" method="post">
            <label><?php echo $res["id"]; ?></label>
            <input class="hidden" type="text" name="id" value="<?php echo $res["id"]; ?>" readonly>
            <input type="text" name="tag" value="<?php echo $res["tag"]; ?>">
            <input type="text" name="product" value="<?php echo $res["product"]; ?>">
            <input type="text" name="ingredienten" value="<?php echo $res["ingredienten"]; ?>">
            <input type="text" name="prijs" value="<?php echo $res["prijs"]; ?>">
            <input type="submit" name="submitknop" value="aanpassen">
          </form>
          <a href="php/update.php?id=<?php echo $res["id"] ?>"><button>delete</button></a>
      <?php } ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>