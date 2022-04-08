<?php

$database = new Database();
$db = $database->getConnection();

$JsonPost = $_POST;

$depth = $_POST['depth'];
$width = $_POST['width'];
$length = $_POST['length'];
$CustomerID = $_SESSION['user_id'];


$CartController = new CartController($db);


if (!empty($depth) && !empty($width) && !empty($length)) {
    $MetresSquaredController = new MetresSquaredController($width, $length, $depth, '0', $_POST['price']);
    $Total_Price = $MetresSquaredController->area;

    $CartController->total_price = $Total_Price;
    $CartController->product_values = json_encode($JsonPost);
    $CartController->customer_id = $CustomerID;

    $AddToCart = $CartController->addToCartAction();

} else {
    header("Location: ../index");
}