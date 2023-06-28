<?php
require 'database.php';
require 'inventory_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productName = $_POST['product_name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  if (addProduct($productName, $quantity, $price)) {
    echo 'Producto agregado exitosamente.';
  } else {
    echo 'Error al agregar el producto.';
  }
}
?>

<!-- Aquí va el formulario HTML para agregar un nuevo producto -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Producto</title>
</head>
<body>
  <h1>Agregar Producto</h1>
  <form action="add_product.php" method="POST" enctype="multipart/form-data">
    <label for="product_name">Nombre del producto:</label>
    <input type="text" name="product_name" id="product_name" required>

    <label for="quantity">Cantidad:</label>
    <input type="number" name="quantity" id="quantity" required>

    <label for="price">Precio:</label>
    <input type="number" step="0.01" name="price" id="price" required>

    <label for="product_image">Imagen del producto:</label>
    <input type="file" name="product_image" id="product_image">

    <button type="submit">Agregar</button>
  </form>
</body>
</html>

