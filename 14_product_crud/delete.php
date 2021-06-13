<?php

$id = $_POST['id'] ?? null;

if(!$id) {
  header('Location: index.php');
  exit;
}

echo '<pre>';
var_dump($id);
echo '</pre>';