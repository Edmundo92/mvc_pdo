<?php 

namespace app\models;
use PDO;

class Connection{
    
    public static function connect(){
        $config = require "../config.php";
        
        $pdo = new PDO("mysql:host={$config['db']['localhost']};dbname={$config['db']['dbname']};charset={$config['db']['charset']};", $config['db']['username'], $config['db']['password']);;
        dd($pdo);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        // return new PDO("mysql:dbname=curso_pdo;host=localhost", "root", "root");
    }
}


/**
 * 
 * $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
 * "PDO::FETCH_OBJ" - este parametro diz a php que eu quero que me retorne um objecto e dessa forma quando 
 * eu for apresentar os meus dados na view, eu vou acessar da seguinte forma:
 * ex: foreach($users as $user){
 *          <?=  $user->id ?>
 *          <?=  $user->name ?>   
 *     }  
 *
 * 
 * Se eu retirar ou simplesmente n colocar, estariei dizendo que quero como retorno um array e vou acessar
 * da seguinte forma:
 *      foreach($users as $user){
 *          <?=  $user['id'] ?>
 *          <?=  $user['name'] ?>   
 *     }  
 * 
 *   <?= ?> - representa um echo
 */