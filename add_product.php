<?php
require 'database.php';
require 'inventory_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productName = $_POST['product_name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $imageURL = $_POST['image_url'];

  // Llamar a la función addProduct con la ruta de imagen
  if (addProduct($productName, $quantity, $price, $imageURL)) {
    echo 'Producto agregado exitosamente.';
  } else {
    echo 'Error al agregar el producto.';
  }
}

// Obtener los productos de la base de datos
$products = getProducts();

?>

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
  <form action="add_product.php" method="POST">
    <label for="product_name">Nombre del producto:</label>
    <input type="text" name="product_name" id="product_name" required>

    <label for="quantity">Cantidad:</label>
    <input type="number" name="quantity" id="quantity" required>

    <label for="price">Precio:</label>
    <input type="number" step="0.01" name="price" id="price" required>

    <label for="image_url">URL de la imagen:</label>
    <input type="text" name="image_url" id="image_url">

    <button type="submit">Agregar</button>
  </form>

  <!-- Botón para volver a la página anterior -->
  <button onclick="goBack()">Volver</button>

<script>
function goBack() {
  history.back();
}
</script>

  <h2>Productos Agregados</h2>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>URL de la Imagen</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
        <tr>
          <td><?php echo $product['product_name']; ?></td>
          <td><?php echo $product['quantity']; ?></td>
          <td><?php echo $product['price']; ?></td>
          <td><?php echo $product['image_url']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  
</body>
</html>





