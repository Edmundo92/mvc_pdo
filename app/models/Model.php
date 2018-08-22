<?php 

namespace app\models;

use app\models\Connection;
use PDO;

//os outros models vao extender essa classe
abstract class Model{

    //protected $connection;
    protected $pdo;

    public function __constructor(){
        $this->connection = Connection::connect();
    }

    public function all(){
        $pdo = new PDO("mysql:dbname=curso_pdo;host=localhost", "root", "root");
        $sql = "select * from {$this->table}";
        $list = $pdo->prepare($sql);
        $list->execute();
        return $list->fetchAll();
    }

    public function find($field, $value){
        $pdo = new PDO("mysql:dbname=curso_pdo;host=localhost", "root", "root");
        $sql = "select * from {$this->table} where {$field} = ?";
        $list = $pdo->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete($field, $value){
        $pdo = new PDO("mysql:dbname=curso_pdo;host=localhost", "root", "root");
        $sql = "delete from {$this->table} where {$field} = ?";
        $delete = $pdo->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}