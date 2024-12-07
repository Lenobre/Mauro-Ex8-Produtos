<?php
$teamID = isset($_GET["id"]) ? $_GET["id"] : null;

if (!$teamID)
  header("Location: index.php");

require_once("components/table.php");
require_once("models/Produto.php");

$team = new Produto();

if (!$team->exist($teamID))
  header("Location: index.php");

$title = "Ver Produto";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <div class="flex">
        <h1 class="text-2xl font-bold">Produto</h1>

        <a href="index.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ml-auto">Voltar página</a>
      </div>

      <div class="mt-2">
        <form class="grid grid-cols-8 gap-2">
          <?php
          $currentTeam = $team->get($teamID);
          ?>

          <div class="mb-5 col-span-4">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
            <input type="text" id="nome" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["nome"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-4">
            <label for="foto_url" class="block mb-2 text-sm font-medium text-gray-900">URL da Foto</label>
            <input type="text" id="foto_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["foto_url"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-6">
            <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900">Descrição</label>
            <textarea id="descricao" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly><?= $currentTeam["descricao"] ?></textarea>
          </div>

          <div class="mb-5 col-span-2">
            <label for="preco" class="block mb-2 text-sm font-medium text-gray-900">Preço</label>
            <input type="text" id="preco" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["preco"] ?>" readonly />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>