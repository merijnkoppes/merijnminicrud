<?php
include_once("../includes/connect.php");

if(isset($_POST["submitknop"])){  
  $sql = "UPDATE menukaart 
  SET product = :product, tag = :tag, ingredienten = :ingredienten, prijs = :prijs
  WHERE id = :id";
  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":id", $_POST['id']);
  $stmt->bindParam(":tag", $_POST['tag']);
  $stmt->bindParam(":product", $_POST['product']);
  $stmt->bindParam(":ingredienten", $_POST['ingredienten']);
  $stmt->bindParam(":prijs", $_POST['prijs']);
  $stmt->execute();   
}

if(isset($_GET)){  
  $sql = "DELETE FROM menukaart
          WHERE id = :id";
  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":id", $_GET['id']);
  $stmt->execute();
}

header("Location: ../admin.php");
?>