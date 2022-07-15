<?php
session_start();
$salario = $_GET['salario'];
$carros = $_GET['carro_vendido'];
$valorVendas = $_GET['valor_venda'];
$valorFixoCarro = $_GET['fixo_carro'];

if (!is_numeric($salario) || !is_numeric($valorFixoCarro) || !is_numeric($valorVendas)){
    $_SESSION['mensagemErro'] = 'O valor não deve conter letras!';
    header('Location: index.php');
}
elseif ($salario < 0 || $carros < 0 || $valorVendas < 0 || $valorFixoCarro < 0) {
    $_SESSION['mensagemErro'] = 'O valor não pode ser menor que 0';
    header('Location: index.php');
}

else {
$comissaoFixa = $carros * (float)$valorFixoCarro;
$comissao = (float)$valorVendas * 0.05;

$salarioAtual = (float)$salario + $comissao + $comissaoFixa;

$_SESSION['resultado'] = "O salario atual do funcionário é de R$".$salarioAtual;
header('Location: index.php');
}