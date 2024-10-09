<?php


include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='baby'LIMIT 4");

$stmt->execute();


$baby = $stmt->get_result();//[]




?>


