<?php 

    require_once("connection.php");

    if(isset($_POST['add']))
    {
        $ProductNb = $_GET['Plus'];
        $ProductId = $_POST['product_id'];
        $Product = $_POST['product_name'];
        $ProductAmount = $_POST['product_amount'];

        $query = " update products set product_amount='".$ProductAmount."' where product_nb='".$ProductNb."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:storage.php");
        }
        else
        {
            echo 'Ha nem találsz hibát kérlek hívd a supportot! ';
        }
    }
    else
    {
        header("location:storage.php");
    }


?>