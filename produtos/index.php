<?php
require_once("components/table.php");
require_once("models/Produto.php");

$title = "Produtos";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <h1 class="text-2xl font-bold">Produtos</h1>

      <div class="mt-2">
        <?php
        $product = new Produto();
        $products = $product->getAll();

        table(["Nome", "Descrição", "Preço", "URL", "Editar", "Apagar"], $products);
        ?>
      </div>
    </div>
  </div>
</body>

</html>