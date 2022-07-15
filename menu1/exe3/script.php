<?php
session_start();

$grausF = (float)$_GET['grausF'];

$celcius = ($grausF - 32) / 9;
$celcius = $celcius * 5;

$_SESSION['resultado'] = "A sua medida em celcius é ".round($celcius,1)."ºC";
header('Location: index.php');
