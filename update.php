<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
       
       // $ProductId = $_POST['product_id'];
        $Product = $_POST['product_name'];
        $ProductAmount = $_POST['product_amount']; 
        $ProductId = $_GET['ID'];
   

        $query = " update records set product_name = '".$Product."', product_amount='".$ProductAmount."' where product_id='".$ProductId."'";
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