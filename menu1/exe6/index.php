<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 6</title>
</head>

<body>
    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 6</h2>
            <h3> Uma fruteira está vendendo frutas com a seguinte tabela de preços: </br><img src="exe6.png" alt="tabelaF"></br> Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$ 25,00, receberá
                ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler a quantidade (em Kg) de
                morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente.
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h3>CALCULAR O VALOR DAS FRUTAS</h3>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe os Kilos de morango  <input type="text" name="morango" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe os Kilos de maçã    <input type="text" name="maca" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <P class="pEnviar"><input class="btnEnviar" type="submit" value="Enviar"></p>
                <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado']) ? $_SESSION['resultado'] : '';
                    if ($resultado) {
                        echo $resultado;
                        session_destroy();
                    }
                    ?>
                </p>
            </form>
        </div>
    </div>
    <div class="btns">
        <div>
            <form action="http://localhost/menu_principal/menu1/exe5">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu1/exe7">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>