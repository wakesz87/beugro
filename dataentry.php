<?php 
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Új Tétel Bevételezése</title>
</head>

<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-white text-center py-4"> Új Tétel Bevételezése</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-4" placeholder=" Cikkszám " name="productid">
                                <input type="text" class="form-control mb-4" placeholder=" Termék " name="product">
                                <input type="text" class="form-control mb-4" placeholder=" Egység " name="productamount">

                                <div class="col text-center">
                                      <button class="btn btn-primary"  name="submit">Bevételezés</button>
                                </div>
                              
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>

</html>