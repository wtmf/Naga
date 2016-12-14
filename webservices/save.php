<?php

include '../db/queries.php';

$nome = $_POST['username'];
$email = $_POST['email'];

if($nome != '' && $email != ''){
	insertRow($nome, $email);
	header('location:../index.php?status=sucesso');
}else{
	header('location:../index.php?status=incompleto');
}








?>