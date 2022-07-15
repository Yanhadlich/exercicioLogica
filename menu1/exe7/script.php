<?php
session_start();

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

if(preg_match("/[a-zA-Z]/", $nota1) || preg_match("/[a-zA-Z]/", $nota2) || preg_match("/[a-zA-Z]/", $nota3) || preg_match("/[a-zA-Z]/", $nota4)){
    $_SESSION['mensagemErro'] = 'O valor não deve conter letras!';
    header('Location: index.php');
}
elseif (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)){
    $_SESSION['mensagemErro'] = 'O valor não deve conter letras!';
    header('Location: index.php');
}

elseif ((float)$nota1 < 0 || (float)$nota2 < 0 || (float)$nota3 < 0 || (float)$nota4 < 0){
    $_SESSION['mensagemErro'] = 'O valor não pode ser menor que 0!';
    header('Location: index.php');
}

elseif ((float)$nota1 > 10 || (float)$nota2 > 10 || (float)$nota3 > 10 || (float)$nota4 > 10){
    $_SESSION['mensagemErro'] = 'O valor não pode ser maior que 10!';
    header('Location: index.php');
}

else{
$media = ((float)$nota1 + (float)$nota2 * 2 + (float)$nota3 * 3 + (float)$nota4) / 7;

if ($media >= 9){
    $_SESSION['resultado'] = "Sua média foi de ".round($media, 1)."<br/> Obteve conceito A";
    header('Location: index.php');
}

elseif ($media >= 7.5 && $media < 9){
    $_SESSION['resultado'] = "Sua média foi de ".round($media, 1)."<br/> Obteve conceito B";
    header('Location: index.php');
}

elseif ($media >= 6 && $media < 7.5){
    $_SESSION['resultado'] = "Sua média foi de ".round($media, 1)."<br/> Obteve conceito C";
    header('Location: index.php');
}

else {
    $_SESSION['resultado'] = "Sua média foi de ".round($media, 1)."<br/> Obteve conceito D";
    header('Location: index.php');
}
}