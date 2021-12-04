<?php

require_once("connection.php");
$ProductId = $_GET['GetID'];
$query = " select * from products where product_id='".$ProductId."'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) 
{
   
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
    <title>Szerkesztés</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-primary text-white text-center py-3">Cikkszám szerkesztése</h3>
                    </div>
                    <div class="card-body">

                        <form action="update.php?ID=<?php echo $ProductNb ?>" method="post">
                            <input type="number" class="form-control mb-4" placeholder=" Cikkszám " name="productid" value="<?php echo $ProductId ?>">
                            <input type="text" class="form-control mb-4" placeholder=" Termék " name="product" value="<?php echo $Product ?>">
                            <input type="number" step="1" class="form-control mb-4" placeholder=" Egység " name="productamount" value="<?php echo $ProductAmount ?>">
                            <div class="col text-center">
                            <button class="btn btn-primary" name="update">Szerkesztés</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    