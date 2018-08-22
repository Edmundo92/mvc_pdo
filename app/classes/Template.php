<?php

namespace app\classes;

class Template{ 
    private $view;

    public function add($view){
        $this->view = $view;
        //dd($this->view);
    }

    public function load(){
        return "../app/views/{$this->view}.php";
    }

    public function master($master){
        return "../app/views/{$master}.php"; 
        //dd("../app/views/{$master}.php");
    }
}