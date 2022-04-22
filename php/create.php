<?php
include_once("../includes/connect.php");

if(isset($_POST["submitknop"])){  
    $sql = "INSERT INTO menukaart (id, tag, product, ingredienten, prijs)
            VALUES (:id,:tag,:product,:ingredienten,:prijs)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":tag", $_POST['tag']);
    $stmt->bindParam(":product", $_POST['product']);
    $stmt->bindParam(":ingredienten", $_POST['ingredienten']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->execute();
    header("Location: ../admin.php");
}
elseif(isset($_POST["berichtsubmit"])){  
    $sql = "INSERT INTO berichten (naam, email, bericht)
            VALUES (:naam,:email,:bericht)";
    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->execute();
    header("Location: ../contact.php");
}
else{
    header("Location: ../index.php");
}
?>