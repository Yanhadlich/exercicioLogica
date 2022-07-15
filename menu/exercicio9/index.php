<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 9</title>
</head>

<body>
<?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 9</h2>
            <h3> o índice pluviométrico é uma medida em milímetros que resulta da
                quantidade total da precipitação de água num determinado local. Sabendo disso, escreva um algoritmo que permita ao usuário informar
                o índice pluviométrico de cada mês do ano. Após ler esses dados, o
                algoritmo deve exibir qual foi a precipitação total no ano (ou seja, a
                soma do índice pluviométrico de cada mês), a média de precipitação e
                quais foram os meses com os valores mais a precipitação (ou seja, quais foram os meses em que choveu mais e
                menos no ano).
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR A MEDIDA PLUVIAL</h2>
                <p class="mensagemDeErroResultado">
                <?php
                $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                if ($mensagemDeErro) {
                    echo $mensagemDeErro;
                    session_destroy();
                }
                ?>
                </p>
                <h3>Informe a medida pluvial dos mes 1  <input type="number" name="mes1"></h3>
                <h3>Informe a medida pluvial dos mes 2  <input type="number" name="mes2"></h3>
                <h3>Informe a medida pluvial dos mes 3  <input type="number" name="mes3"></h3>
                <h3>Informe a medida pluvial dos mes 4   <input type="number" name="mes4"></h3>
                <h3>Informe a medida pluvial dos mes 5   <input type="number" name="mes5"></h3>
                <h3>Informe a medida pluvial dos mes 6   <input type="number" name="mes6"></h3>
                <h3>Informe a medida pluvial dos mes 7   <input type="number" name="mes7"></h3>
                <h3>Informe a medida pluvial dos mes 8   <input type="number" name="mes8"></h3>
                <h3>Informe a medida pluvial dos mes 9   <input type="number" name="mes9"></h3>
                <h3>Informe a medida pluvial dos mes 10  <input type="number" name="mes10"></h3>
                <h3>Informe a medida pluvial dos mes 11  <input type="number" name="mes11"></h3>
                <h3>Informe a medida pluvial dos mes 12  <input type="number" name="mes12"></h3>
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
            <form action="http://localhost/menu_principal/menu/exercicio8">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/">
                <P><input class="btn1" type="submit" value="MENU">
                </p>
            </form>
        </div>
    </div>
</body>

</html>