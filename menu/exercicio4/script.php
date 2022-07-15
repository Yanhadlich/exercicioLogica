<?php
session_start();

$segundos = $_GET['segundos'];
$minutos = 0;
$horas = 0;
$dias = 0;


if ($segundos <= 0){
    $_SESSION['mensagemErro'] = 'O segundo deve ser maior que 0';
    header('Location: index.php');
}

else{
if ($segundos >= 60){
    while ($segundos >= 86400){
        $dias++;
        $segundos = (int)$segundos - 86400;
    } 
     
    while ($segundos >= 3600){
        $horas++;
        $segundos = (int)$segundos - 3600;
    }

    while ($segundos >= 60){
        $minutos++;
        $segundos = (int)$segundos - 60;
    }
    $_SESSION['resultado'] = "Equivalente a ".$dias." Dia ".$horas."h ".$minutos."min" ;
    header('Location: index.php');
}
else {
    $_SESSION['resultado'] = "Essa é a quantidade de ".$segundos."seg";
    header('Location: index.php');
}
}
