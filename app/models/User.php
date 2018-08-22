<?php 

namespace app\models;

class User extends Model{

    protected $table = "users";

    public function insert($attributes){
        $sql = "insert into {$this->table}(name, email, password) values (:name, :email, :password)";
        $insert = $this->connection->prepare($sql);
    }
}