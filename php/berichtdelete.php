<?php
include_once("../includes/connect.php");

if(isset($_GET)){  
    $sql = "DELETE FROM berichten
            WHERE id =:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
}


header("Location: ../admin.php");
?>