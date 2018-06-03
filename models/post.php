<?php
require_once './config.php';
class PostModel {
  protected $conn;
  public function __construct()
  {
    $this->conn = new PDO("mysql:host=" . Config::DB_HOST .";dbname=" . Config::DB_NAME, Config::DB_USER, Config::DB_PASS);
    $this->conn->exec("set names utf8");
  }
  public function getAll()
  {
    $res = $this->conn->query("SELECT * FROM posts");
    return $res->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getByID($id)
  {
    $res = $this->conn->query("SELECT (id) FROM posts");
    return $res->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create($title, $text, $user_id)
  {
    $stmt = $this->conn->prepare("INSERT INTO posts (title, text, user_id) VALUES (?, ?, ?)");
    $stmt->execute([$title, $text, $user_id]);
  }


}
