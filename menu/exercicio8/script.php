<?php
session_start();
$dolar = $_GET['dolar'];
$cent1 = $_GET['1cent'];
$cent5 = $_GET['5cent'];
$cent10 = $_GET['10cent'];
$cent25 = $_GET['25cent'];
$cent50 =$_GET['50cent'];

if (!is_numeric($dolar)){
    $_SESSION['mensagemErro'] = 'A cotação do dolar não deve conter letras!';
    header('Location: index.php');
}
elseif ($dolar <= 0 || $cent1 < 0 || $cent5 < 0 || $cent10 < 0 || $cent25 < 0 || $cent50 < 0){
    $_SESSION['mensagemErro'] = 'O valor não pode ser menor que 0';
    header('Location: index.php');
}
else{
$total = $cent1 * 0.01;
$total = $total + ($cent5 * 0.05);
$total = $total + ($cent10 * 0.10);
$total = $total + ($cent25 * 0.25);
$total = $total + ($cent50 * 0.50);
$total = number_format($total, 2);
if ($total > (float)$dolar){
    $_SESSION['resultado'] = "O Valor inserido foi maior que a cotacao do dolar";
    header('Location: index.php');
}
else if ($total < (float)$dolar) {
    $_SESSION['resultado'] = "O Valor inserido foi menor que a cotacao do dolar";
    header('Location: index.php');
}
else if ($total == (float)$dolar) {
    $_SESSION['resultado'] = "PARABENS VOCE ACERTOU A COTACAO DO DOLAR";
    header('Location: index.php');
}

}
