<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "database.php";
require_once "functions.php";

$errors = [];

$title = '';
$price = '';
$description = '';
$product = [
  'image' => ''
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once "validate_product.php"

  if (empty($errors)) {

    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
VALUE(:title, :image, :description, :price, :date)");
    //Do not use "exec" instead of prepare to avoid sql injections!!!!

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', date('Y-m-d H:i:s'));
    $statement->execute();
    header('Location: index.php');
  }
}

?>

<?php include_once "views/partials/header.php" ?>

<p>
  <a href="index.php" class="btn btn-secondary">Home</a>
</p>
  <h1>Create new Product</h1>

  <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error) : ?>
        <div><?php echo $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Product Image</label>
      <br>
      <input type="file" name="image">
    </div>
    <div class="mb-3">
      <label>Product title</label>
      <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
    </div>
    <div class="mb-3">
      <label>Product Description</label>
      <textarea class="form-control" name="description" ><?php echo $description ?></textarea>
    </div>
    <div class="mb-3">
      <label>Product Price</label>
      <input type="number" name="price" step=".01" class="form-control" value="<?php echo $price ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php include_once "views/partials/footer.php" ?>