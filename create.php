<?php require "connection.php";

 if(isset($_POST['add'])){

    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];

    // echo $name;


   $sql = "INSERT INTO patients_info (name,age,address) VALUES (:name, :age, :address)";

   $query = $conn->prepare($sql);

   $query->bindParam(':name',$name, PDO::PARAM_STR);
   $query->bindParam(':age',$age, PDO::PARAM_STR);
   $query->bindParam(':address',$address, PDO::PARAM_STR);

   $result = $query->execute();

   header("location: index.php");

  }



  ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create table</title>

</head>

<body>
    <form method="POST">
        <div class=" form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>