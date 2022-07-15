<?php
session_start();

$ovo = $_GET['ovo'];
$total = 0.0;
if ($ovo < 0) {
        $_SESSION['mensagemErro'] = 'O quantidade de ovo deve ser maior que 0';
        header('Location: index.php');
} else {

        while ($ovo >= 12) {
                $ovo = $ovo - 12;
                $total = $total + 3.25;
        };
        $total = $total + ($ovo * 0.45);


        $_SESSION['resultado'] = "Sua compra ficou no valor de R$" . $total;
        header('Location: index.php');
}
