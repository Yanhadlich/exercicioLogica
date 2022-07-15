<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 5</title>
</head>

<body>
    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">

        <div class="bloco2">
            <h2>EXERCÍCIO 5</h2>
            <h3>Uma empresa concederá um aumento de salário aos seus
                funcionários, variável de acordo com o cargo, conforme a tabela abaixo. Faça um algoritmo que leia o salário e o cargo de um funcionário e
                calcule o novo salário. Se o cargo do funcionário não estiver na tabela, ele deverá, então, receber 40% de aumento. Mostre o salário antigo, o
                novo salário e a diferença</h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR AUMENTO DE FUNCIONÁRIO</h2>
                <h3>Código e funções</h3>
                <input class="radio" type="radio" name="codigo" value="101">101 - Gerente - 10%</br>
                <input class="radio" type="radio" name="codigo" value="102">102 - Engenheiro - 20%</br>
                <input class="radio" type="radio" name="codigo" value="103">103 - Técnico - 30%</br>
                <input class="radio" type="radio" name="codigo" value="200">200 - Outros - 40%</br>
                <h3>Informe o salário do funcionário <input type="text" name="salario" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
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
            <form action="http://localhost/menu_principal/menu/exercicio4">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio6">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>