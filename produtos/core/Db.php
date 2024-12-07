<?php
class Db
{
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $db = "mauro_produtos";

  public function connect()
  {
    try {
      $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
