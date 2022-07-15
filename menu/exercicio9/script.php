<?php

session_start();
$mes = [];
$mes[] = '';
$mes[] = $_GET['mes1'];
$mes[] = $_GET['mes2'];
$mes[] = $_GET['mes3'];
$mes[] = $_GET['mes4'];
$mes[] = $_GET['mes5'];
$mes[] = $_GET['mes6'];
$mes[] = $_GET['mes7'];
$mes[] = $_GET['mes8'];
$mes[] = $_GET['mes9'];
$mes[] = $_GET['mes10'];
$mes[] = $_GET['mes11'];
$mes[] = $_GET['mes12'];
$total = 0;
$maior = 0;
$menor = $mes[1];
$mesMaior = 0;
$mesMenor = 0;
$validator = 0;
for ($i = 0; $i <=12; $i++){
    if ( $mes[$i] < 0){
      $validator = $i;
    }
}

if($validator > 0){
    $_SESSION['mensagemErro'] = 'A medida do mes '.$validator.' deve ser maior que 0';
    header('Location: index.php');
}

else{
for ($i = 1; $i <=12; $i++){
    $total = $total + (float)$mes[$i];
    if ($maior <=  (float)$mes[$i]){
        $maior =  (float)$mes[$i];
        $mesMaior = $i;
    }
    if ($menor >= (float)$mes[$i]){
        $menor = (float)$mes[$i];
        $mesMenor = $i;
    }

}

$media = $total / 12;

$_SESSION['resultado'] = "A quantidade total do ano é de ".round($total, 2). "ml <br/>A média anual é de ".round($media, 2). "ml <br/>O mês que menos choveu é o mes ".$mesMenor." com ".round($mes[$mesMenor], 2)."ml <br/>O mês que mais choveu é o mes ".$mesMaior." com ".round($mes[$mesMaior])."ml <br/>";
header('Location: index.php');
}