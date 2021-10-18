<?php

require_once("connection.php");

if(isset($_GET['Del']))
{
    $ProductId = $_GET['Del'];
    $query = " DELETE FROM products WHERE product_id = '".$ProductId."'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        header("location:index.php");
    }
    else
    {
        echo ' Ha nem találsz hibát kérlek hívd a supportot!';
    }
}
else
{
    header("location:index.php");
}
?>