<?php


$con = mysqli_connect("localhost", "user", "password", "products_dlm");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE storage_dlm
( ".
            "B INT NOT NULL, ".
            "K INT NOT NULL, ".
            "Összesen INT NOT NULL, ".
            "PRIMARY KEY ( Összesen )); ";

if (mysqli_query($con, $sql)) {
    echo "Sikerült";
}
 else {
    echo "Próbáld újra" . mysqli_error($con);
}

mysqli_close($con);
?>
