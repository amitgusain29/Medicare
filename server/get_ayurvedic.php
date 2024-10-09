<?php


include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='ayurvedic'LIMIT 4");

$stmt->execute();


$ayurvedic = $stmt->get_result();//[]




?>


