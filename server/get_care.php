<?php


include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='care'LIMIT 8");

$stmt->execute();


$care_products = $stmt->get_result();//[]




?>


