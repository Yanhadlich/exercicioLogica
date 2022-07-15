<?php
session_start();

$biscoito = $_GET['biscoito'];

if ($biscoito <= 0){
    $_SESSION['mensagemErro'] = 'O numero deve ser maior que 0';
    header('Location: index.php');
}

else{
$resultado = $biscoito * 30;
$_SESSION['resultado'] = 'A quantidade de caloria ingerida é de '.$resultado. 'cal';
header('Location: index.php');
}