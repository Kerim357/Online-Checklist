<?php

class BaseDao{

  private $conn;

  /**
  * constructor of dao class
  */
  public function __construct(){
    $servername = "localhost";
    $username = "freedb_Kerim357";
    $password = "JndTK8xruWayYD#";
    $schema = "freedb_onlinechecklist";
    $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  /**
  * Method used to read all todo objects from database
  */
  public function get_all(){
    $stmt = $this->conn->prepare("SELECT * FROM User");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function get_by_id($id){
    $stmt = $this->conn->prepare("SELECT * FROM User WHERE userId = :id");
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return reset($result);
  }

  /**
  * Method used to add todo to the database
  */
  public function add($User){
    $stmt = $this->conn->prepare("INSERT INTO User (name,password,title) VALUES (:name, :password,:title)");
    $stmt->execute($User);
    $User['id'] = $this->conn->lastInsertId();
    return $todo;
  }

  /**
  * Delete todo record from the database
  */
  public function delete($id){
    $stmt = $this->conn->prepare("DELETE FROM User WHERE userId=:id");
    $stmt->bindParam(':id', $id); // SQL injection prevention
    $stmt->execute();
  }

  /**
  * Update todo record
  */
  public function update($User){
    $stmt = $this->conn->prepare("UPDATE User SET name=:name, title=:title WHERE userId=:id");
    $stmt->execute($User);
    return $User;
  }

}

?>
