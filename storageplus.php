<?php

require_once("connection.php");
$ProductNb = $_GET['GetPlus'];
$query = " select * from products where product_nb='".$ProductNb."'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) 
{
    $ProductNb = $row['product_nb'];
    $ProductId = $row['product_id'];
    $Product = $row['product_name'];
    $ProductAmount = $row['product_amount'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Készlet hozzáadása</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-primary text-white text-center py-3">Készlet hozzáadása</h3>
                    </div>
                    <div class="card-body">

                        <form action="count.php?Plus=<?php echo $ProductNb ?>" method="post">
                           <input type="text" class="form-control mb-4" placeholder=" Egység " name="productamount" value="<?php echo $ProductAmount ?>">
                           <div class="col text-center">
                            <button class="btn btn-primary" name="add">Hozzáadás</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>