<?php
session_start();
$macas = $_GET['macas'];

if($macas <= 0 || $macas == ""){
    $_SESSION['mensagemErro'] = 'O valor não pode ser menor que 0';
    header('Location: index.php');
}
else{
if ($macas >= 12){
    $_SESSION['resultado'] = "As macas ficaram por R$".$macas;
    header('Location: index.php'); 
}
else {
    $macas = $macas * 1.30;
    $_SESSION['resultado'] = "As macas ficaram por R$".$macas;
    header('Location: index.php');
}
}