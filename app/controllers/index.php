<?php

use app\models\User;

$users = new User;
$users = $users->all();

$template->add('home'); // é o mesmo que está abaixo
//require '../app/views/home.php';