<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 4</title>
</head>

<body>
    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 4</h2>
            <h3> Sabendo que há 60 segundos em um minuto, 3.600 segundos em
                uma hora e 86.400 segundo em um dia, crie um algoritmo que a partir
                de uma determinada quantidade de segundos fornecida pelo usuário, converte-a da seguinte maneira:</br></br>• Se a quantidade de segundos for maior ou igual a 60, o programa
                deverá exibir o número de minutos equivalente;</br></br> • Se a quantidade de segundos for maior ou igual a 3.600, o
                programa deverá exibir o número de horas equivalente.</br></br> • Se a quantidade de segundos for maior ou igual a 86.400, será
                exibir o número de dias equivalente.</h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR HORARIOS</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe uma quantidade de segundos <input type="number" name="segundos"></h3>
                <P class="pEnviar"><input class="btnEnviar" type="submit" value="Enviar"></p>
                <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado']) ? $_SESSION['resultado'] : '';
                    if ($resultado) {
                        echo $resultado;
                        session_destroy();
                    }
                    ?></p>
            </form>
        </div>
    </div>
    <div class="btns">
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio3">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio5">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>