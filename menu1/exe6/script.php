<?php
session_start();

$morango = $_GET['morango'];
$macas = $_GET['maca'];

if (!is_numeric($morango) || !is_numeric($macas)) {
    $_SESSION['mensagemErro'] = 'O valor não deve conter letras!';
    header('Location: index.php');
} elseif ((float)$morango < 0 || (float)$macas < 0) {
    $_SESSION['mensagemErro'] = 'O valor não pode estar vazio ou abaixo de 0!';
    header('Location: index.php');
} else {
    $kiloTotal = $macas + $morango;
    $preco;
    if ($macas > 5) {
        $macas = $macas * 1.5;
    } else {
        $macas = $macas * 1.8;
    }
    if ($morango > 5) {
        $morango = $morango * 2.20;
    } else {
        $morango = $morango * 2.50;
    }
    $preco = $morango + $macas;

    if ($preco >= 25 || $kiloTotal >= 8) {
        $preco = $preco * 0.90;
    }
    $_SESSION['resultado'] = "O Valor total ficou de R$" . $preco;
    header('Location: index.php');
}
