<?php


$con = mysqli_connect("localhost", "user", "password", "products_dlm");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE products
( ".
            "product_nb INT NOT NULL AUTO_INCREMENT, ".
            "product_id INT NOT NULL, ".
            "product_name VARCHAR(100) NOT NULL, ".
            "product_amount INT DEFAULT NULL, ".
            "PRIMARY KEY ( product_nb )); ";

if (mysqli_query($con, $sql)) {
    echo "Sikerült";
}
 else {
    echo "Próbáld újra" . mysqli_error($con);
}

mysqli_close($con);
?>
