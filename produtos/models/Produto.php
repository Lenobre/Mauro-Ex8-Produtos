<?php
require_once("core/Db.php");

class Produto
{
  private $table = "produtos";
  private $db;

  public function __construct()
  {
    $db = new Db();
    $this->db = $db->connect();
  }

  public function exist(int $id)
  {
    $sql = "SELECT id FROM $this->table WHERE id = :id";

    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetch();
    return $result ? true : false;
  }

  public function get(int $id)
  {
    $sql = "SELECT * FROM $this->table WHERE id = :id";

    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM $this->table";

    $stmt = $this->db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function delete(int $id)
  {
    $sql = "DELETE FROM $this->table WHERE id = :id";

    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    // Usar exec aqui não dá certo, pois vai retornar true(Se executado sem erros), mas não necessariamente indicar que deletou
    return $stmt->rowCount() > 0;
  }
}
