<?php

use app\classes\Validation;
use app\models\Post;
use app\models\Transaction;
use app\models\User;

$validation = new Validation;
$validate = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function () use ($transaction, $validate) {

	$transaction->model(User::class)->insert($validate);

	$transaction->model(Post::class)->insert([
		'title' => 'teste',
		'us' => 78,
		'description' => 'description teste',
	]);

});

// $validation = new Validation;
// $validate = $validation->validate($_POST);

// $user = new app\models\User;
// $cadastrado = $user->insert($validate);

// if ($cadastrado) {
// 	header('location:/');
// }