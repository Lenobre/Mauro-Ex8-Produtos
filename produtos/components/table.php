<?php

function table(array $columns = ["Nome", "Pontuação", "Editar", "Apagar"], array $data = [])
{
?>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
      <tr class="text-xs text-gray-700 uppercase bg-gray-50">
        <?php
        foreach ($columns as $column):
        ?>
          <th scope="col" class="px-6 py-3">
            <?= $column ?>
          </th>
        <?php
        endforeach;
        ?>
      </tr>
      </thead>
      <tbody>
        <?php
        foreach ($data as $row):
          if (isset($row["id"])) {
            $currentItemID = $row["id"];

            unset($row["id"]);
          }
        ?>
          <tr class="bg-white border-b">
            <?php
            foreach ($row as $key => $cell):
            ?>
              <td class="px-6 py-4">
                <?= $cell ?>
              </td>
            <?php
            endforeach;
            ?>

            <td class="px-6 py-4">
              <a href="/produto.php?id=<?= $currentItemID ?? "" ?>" class="font-medium text-blue-600 hover:underline">Editar</a>
            </td>

            <td class="px-6 py-4">
              <form action="/produtoDelete.php" method="POST">
                <input type="hidden" name="id" value="<?= $currentItemID ?? "" ?>">

                <button type="submit" class="font-medium text-red-600 hover:underline">Apagar</button>
              </form>
            </td>
          </tr>
        <?php
        endforeach
        ?>
      </tbody>
    </table>
  </div>
<?php
}
