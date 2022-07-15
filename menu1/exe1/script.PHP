<?php
session_start();

$municipio = $_GET['municipio'];
$votosValidos = $_GET['validos'];
$votosNulos = $_GET['nulos'];
$validator = (float)$votosNulos + (float)$votosValidos;
if ($municipio <= 0 || $votosNulos <= 0){
    $_SESSION['mensagemErro'] = 'O numero deve ser maior que 0';
    header('Location: index.php');
}

elseif ($validator > $municipio){
    $_SESSION['mensagemErro'] = 'O numero de votos validos e nulos são maior que a quantidade de pessoas do municipio';
    header('Location: index.php');
}

else{
$votosBrancos = $municipio - ($votosNulos + $votosValidos);

$validos = ($votosValidos * 100) / $municipio;
$nulos =  ($votosNulos * 100) / $municipio;
$branco = ($votosBrancos * 100) / $municipio;

$_SESSION['resultado'] = "Os votos validos representam ".round($validos,2)."% <br/>Os votos nulos representam ".round($nulos,2)."% <br/>Os votos branco representam ".round($branco,2)."% <br/>";
header('Location: index.php');
}