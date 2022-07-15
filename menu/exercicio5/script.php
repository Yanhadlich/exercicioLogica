<?php
session_start();
$codigo = $_GET['codigo'];
$salario = $_GET['salario'];
$aumento = 0;
$NovoSalario = 0;

// if(preg_match("/[a-zA-Z]/", $salario)){
//     $_SESSION['mensagemErro'] = 'O salario não deve conter letras!';
//     header('Location: index.php');
// }

if (!is_numeric($salario)){
    $_SESSION['mensagemErro'] = 'Formato incorreto de salário!';
    header('Location: index.php');
}

elseif($salario < 0){
    $_SESSION['mensagemErro'] = 'O numero deve ser maior que 0';
    header('Location: index.php');
}
elseif (!isset($codigo)){
    $_SESSION['mensagemErro'] = 'Informe um código';
    header('Location: index.php');
}

else{

    (float)$salario;

if ($codigo == '101'){
    $NovoSalario = $salario *1.1;
    $aumento = $NovoSalario - $salario;
    
}
else if ($codigo == '102'){
    $NovoSalario = $salario *1.2;
    $aumento = $NovoSalario - $salario;
    
}

else if ($codigo == '103'){
    $NovoSalario = $salario *1.3;
    $aumento = $NovoSalario - $salario;
    
}
else {
    $NovoSalario = $salario *1.4;
    $aumento = $NovoSalario - $salario;
    
}
$_SESSION['resultado'] = "O seu salário antigo é de R$".round($salario, 2)."</br>O seu novo salário é de R$".round($NovoSalario, 2)."</br> O aumento foi de R$".round($aumento, 2);
    header('Location: index.php');

}