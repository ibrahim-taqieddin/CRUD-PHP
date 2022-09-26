<?php require "connection.php";

   $id = $_GET["id"];

   //    echo $id;
   
   $sql ="SELECT * FROM patients_info WHERE ID=$id";
   
   $getData = $conn->query($sql);
   
   $patient = $getData->fetchAll(PDO::FETCH_OBJ);
   
//    print_r($patient);
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

    <form method="POST">
        <div class=" form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $patient[0]->NAME?>">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?php echo $patient[0]->AGE?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $patient[0]->ADDRESS?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">update</button>
    </form>

</body>

</html>

<?php 
   if(isset($_POST['update'])){

    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];

    // echo $name;


    $sql = "UPDATE patients_info SET name=:name, age=:age, address=:address WHERE ID=$id";

   $query = $conn->prepare($sql);

   $query->bindParam(':name',$name, PDO::PARAM_STR);
   $query->bindParam(':age',$age, PDO::PARAM_STR);
   $query->bindParam(':address',$address, PDO::PARAM_STR);

   $result = $query->execute();

   header("location: index.php");

  }
  ?>