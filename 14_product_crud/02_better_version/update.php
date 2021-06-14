<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "database.php";
require_once "functions.php";

$id = $_GET['id'] ?? null;

if(!$id) {
  header('Location: index.php');
  exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$title = $product['title'];
$price = $product['price'];
$description = $product['description'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  if (!$title) {
    $errors[] = 'Product title is required';
  }
  if (!$price) {
    $errors[] = 'Product price is required';
  }
  if (!is_dir('images')) {
    mkdir('images');
  }
  if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];


    if($image && $image['tmp_name']) {

      if($product['image']) {
        unlink($product['image']);
      }

      $imagePath = 'images/'.randomString(8).'/'.$image['name'];
      mkdir(dirname($imagePath));
      move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $statement = $pdo->prepare("UPDATE products SET title = :title, image = :image, description = :description, price = :price WHERE id = :id");

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':id', $id);

    $statement->execute();
    header('Location: index.php');
  }
}



?>

<?php include_once "views/partials/header.php" ?>

  <p>
    <a href="index.php" class="btn btn-secondary">Home</a>
  </p>
  <h1>Update product <b><?php echo $product['title'] ?></b></h1>

<?php

include_once "views/products/form.php";
include_once "views/partials/footer.php";

?>
