<?php

$database = new Database();
$db = $database->getConnection();

$CartController = new CartController($db);

if (!empty($_SESSION['user_id']) && !empty($_POST['id'])) {
    $Request = $CartController->deleteCartItem($_POST['id'], $_SESSION['user_id']);
    print_r($Request);
}else{
    echo "Başarısız";
    header("Location: ../index");
}