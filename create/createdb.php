<?php


$con = mysqli_connect("localhost", "user", "password");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE products_dlm";
if (mysqli_query($con, $sql)) {
    echo "Sikerült";
}
else
{
    echo "Próbáld újra" . mysqli_error($con);
}

mysqli_close($con);
?>