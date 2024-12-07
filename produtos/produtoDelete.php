<?php

$id = isset($_POST["id"]) ? intval($_POST["id"]) : null;

if ($id == null)
  header("Location: index.php");

require_once("models/Produto.php");

$produto = new Produto();
$produto->delete($id);

header("Location: index.php");
