<?php
session_start();

$n1 = (float)$_GET['numero1'];
$n2 = (float)$_GET['numero2'];

if ($n2 <= 0 || $n1 <= 0) {
    $_SESSION['mensagemErro'] = 'O numero precisa ser diferente de 0';
    header('Location: index.php');
} else {
    $total = $n1 / $n2;
    $_SESSION['resultado'] = "O resultado da divisão é de " . $total;
    header('Location: index.php');
}
