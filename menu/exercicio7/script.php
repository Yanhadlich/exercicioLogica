<?php
session_start();

$homem1 = $_GET['homem1'];
$homem2 = $_GET['homem2'];
$mulher1 = $_GET['mulher1'];
$mulher2 = $_GET['mulher2'];

$maiorhomem = 0;
$menorHomem = 0;
$menorMulher = 0;
$maiorMulher = 0;

if ($homem1 <= 0 || $homem2 <= 0 || $mulher1 <= 0 || $mulher2 <= 0){
    $_SESSION['mensagemErro'] = 'A idade deve ser maior que 0';
    header('Location: index.php');
}
elseif ($homem1 == $homem2 || $mulher1 == $mulher2){
    $_SESSION['mensagemErro'] = 'A idade dos dois homens e/ou das duas mulheres não podem ser iguais';
    header('Location: index.php');
}
else {
if ($homem1 < $homem2) {
    $maiorhomem = $homem2;
    $menorHomem = $homem1;
}
else{
    $maiorhomem = $homem1;
    $menorHomem = $homem2;
}

if ($mulher1 < $mulher2){
    $menorMulher = $mulher1;
    $maiorMulher = $mulher2;
}
else {
    $menorMulher = $mulher2;
    $maiorMulher = $mulher1;
}

$soma1 = $maiorhomem + $menorMulher;
$soma2 = $menorHomem + $maiorMulher;

$_SESSION['resultado'] = "A soma do homem mais velho com a mulher mais nova é igual a ".$soma1." anos <br/> A soma do homem mais novo com a mulher mais velha é igual a ".$soma2." anos";
header('Location: index.php');
}