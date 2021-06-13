<?php

$id = $_GET['id'] ?? null;

if(!$id) {
  header('Location: index.php');
}
exit;