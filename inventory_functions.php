<?php

function addProduct($productName, $quantity, $price) {
  global $conn;
  
  $sql = "INSERT INTO inventory (product_name, quantity, price) VALUES (:product_name, :quantity, :price)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':product_name', $productName);
  $stmt->bindParam(':quantity', $quantity);
  $stmt->bindParam(':price', $price);
  
  return $stmt->execute();
}

function updateQuantity($productId, $quantity) {
  global $conn;
  
  $sql = "UPDATE inventory SET quantity = :quantity WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':quantity', $quantity);
  $stmt->bindParam(':id', $productId);
  
  return $stmt->execute();
}

function deleteProduct($productId) {
  global $conn;
  
  $sql = "DELETE FROM inventory WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $productId);
  
  return $stmt->execute();
}

?>
