<?php
session_start();

$produto = $_GET['produto'];
$preco = $_GET['preco'];

if (!is_numeric($preco)){
    $_SESSION['mensagemErro'] = 'O valor do produto não deve conter letras!';
    header('Location: index.php');
}

elseif($preco < 0){
    $_SESSION['mensagemErro'] = 'O valor do produto deve ser menor que 0';
    header('Location: index.php');
}

elseif (preg_match("/[0-9]/", $produto) || $produto == ""){
    $_SESSION['mensagemErro'] = 'O nome do produto não deve conter numeros e não pode estar vazio';
    header('Location: index.php');
}

elseif (!preg_match("/[a-zA-Z]/", $produto)){
    $_SESSION['mensagemErro'] = 'O nome do produto só pode conter letras';
    header('Location: index.php');
}
else {
    $_SESSION['resultado'] = "O valor do ".$produto." é de R$".$preco."<br/>";
    $preco = $preco * 0.95;
    $_SESSION['resultado1'] =  "Na 2ª semana o valor é de R$" .round($preco, 2)."<br/>";
    $preco = $preco * 0.95;
    $_SESSION['resultado2'] =  "Na 3ª semana o valor é de R$" .round($preco, 2)."<br/>";
    $preco = $preco * 0.95;
    $_SESSION['resultado3'] =  "Na 4ª semana o valor é de R$" .round($preco, 2)."<br/>";
    $preco = $preco * 0.95;
    $_SESSION['resultado4'] =  "Na 5ª semana o valor é de R$" .round($preco, 2)."<br/>";
    $preco = $preco * 0.95;
    $_SESSION['resultado5'] =  "Na 6ª semana o valor é de R$" .round($preco, 2)."<br/>";
    
header('Location: index.php');
}