<?php
session_start();
$saldo = $_GET['saldo'];
$credito = $_GET['credito'];
$debito = $_GET['debito'];

if (!is_numeric($saldo) || !is_numeric($credito) || !is_numeric($debito)){
    $_SESSION['mensagemErro'] = 'O valor não deve conter letras!';
    header('Location: index.php');
}
elseif ($credito < 0) {
    $_SESSION['mensagemErro'] = 'O crédito não pode ser negativo!';
    header('Location: index.php');
}
else{
$saldoAtual = (float)$saldo - (float)$debito + (float)$credito;

if ($saldoAtual >= 0) {
    $_SESSION['resultado'] = "Seu saldo é de R$".round($saldoAtual, 2)."<br/>Saldo Positivo";
    header('Location: index.php');
}
else {
    $_SESSION['resultado'] = "Seu saldo é de R$".round($saldoAtual, 2)."<br/>Saldo Negativo";
    header('Location: index.php');
}
}
