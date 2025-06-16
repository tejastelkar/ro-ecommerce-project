<?php
session_start();

$rawData = file_get_contents('php://input');
$cart = json_decode($rawData, true);

if ($cart) {
  $_SESSION['cart'] = $cart;
  echo json_encode(['status' => 'success']);
} else {
  echo json_encode(['status' => 'error', 'message' => 'Invalid cart']);
}
?>
