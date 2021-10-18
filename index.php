<?php

require_once("header.php");
require_once("connection.php");
$query = " SELECT * FROM products ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cikktörzs</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>

                            <td> Cikkszám </td>
                            <td> Termék </td>
                            <td> Egység </td>
                            <td> Szerkesztés </td>
                            <td> Törlés </td>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            $ProductId = $row['product_id'];
                            $Product = $row['product_name'];
                            $ProductAmount = $row['product_amount'];
                        ?>
                            <tr>
                                <td><?php echo $ProductId ?></td>
                                <td><?php echo $Product ?></td>
                                <td><?php echo $ProductAmount ?></td>
                                <td><a href="edit.php?GetID=<?php echo $ProductId ?>">Szerkesztés</a></td>
                                <td><a href="delete.php?Del=<?php echo $ProductId ?>">Törlés</a></td>
                            </tr>



                        <?php
                        }
                        ?>


                    </table>
                    <div class="col text-center">
                        <form action="dataentry.php">
                            <button class="btn btn-primary" type="submit">Új Tétel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>