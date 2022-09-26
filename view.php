<?php require "./connection.php";

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
    <title></title>
</head>

<body>


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p class="card-text"></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>