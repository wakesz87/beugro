<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['productid']) || empty($_POST['product']) || empty($_POST['productamount']))
        {
            echo ' Kérlek töltsd ki az összes mezőt! ';
        }
        else
        {
            $ProductId = $_POST['productid'];
            $Product = $_POST['product'];
            $ProductAmount = $_POST['productamount'];

            $query = " INSERT INTO products (product_id, product_name, product_amount) values('$ProductId','$Product','$ProductAmount')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:index.php");
            }
            else
            {
                echo ' Ha nem találsz hibát kérlek hívd a supportot! ';
            }
        }
    }
    else
    {
        header("location:dataentry.php");
    }



?>