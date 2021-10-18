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
                            <td> # </td>
                            <td> Cikkszám </td>
                            <td> Termék </td>
                            <td> Egység </td>
                            <td> Raktárkészlet + </td>
                            <td> Raktárkészlet - </td>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $ProductNb = $row['product_nb'];
                            $ProductId = $row['product_id'];
                            $Product = $row['product_name'];
                            $ProductAmount = $row['product_amount'];
                        ?>
                            <tr>
                                <td><?php echo $ProductNb ?></td>
                                <td><?php echo $ProductId ?></td>
                                <td><?php echo $Product ?></td>
                                <td><?php echo $ProductAmount ?></td>
                                <td><a href="storageplus.php?GetPlus=<?php echo $ProductNb ?>">Hozzáadás</a></td>
                                <td><a href="storageminus.php?Del=<?php echo $ProductNb ?>">Kivonás</a></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>