<?php require "connection.php";

   $id = $_GET["id"];

   $sql = "DELETE from patients_info WHERE id=:id ";

   $query = $conn->prepare($sql);

   $query->bindParam(':id',$id, PDO::PARAM_STR);

   $result = $query->execute();

   header("location: index.php");

?>