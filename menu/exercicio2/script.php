<?php
session_start();

$homens = $_GET['homem'];
$mulheres = $_GET['mulher'];

if ($homens < 0 || $mulheres < 0){
    $_SESSION['mensagemErro'] = 'O quantidade de alunos(as) deve ser maior que 0';
    header('Location: index.php');
}
else{
$total = $homens + $mulheres;
$Htotal = ($homens * 100) / $total;
$Mtotal = ($mulheres * 100) / $total;
$_SESSION['resultado'] = "Os homens representam ".round($Htotal, 2)."% e as mulheres represntam ".round($Mtotal, 2)."%";
header('Location: index.php');
}