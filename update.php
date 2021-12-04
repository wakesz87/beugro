<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
       
        $ProductNb = $_GET['ID'];
        $Product = $_POST['product_name'];
        $ProductAmount = $_POST['product_amount']; 
        $ProductId = $_POST['product_id'];
   

        $query = " update products set product_name = '".$Product."', product_amount='".$ProductAmount."',product_id='".$ProductId."' where product_nb='".$ProductNb."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }


?>