<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 1</title>

</head>

<body>

    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 1</h2>
            <h3> Um saco de biscoitos contém 40 unidades que, de acordo com as
                informações do rótulo, equivalem a 10 porções. Ainda de acordo com o
                rótulo, uma porção possui 300 calorias. Baseado nessas informações, crie um algoritmo que permita ao usuário inserir o número de biscoitos
                que ele consumiu e imprima na tela a quantidade de calorias
                correspondentes.</h3>

        </div>
        <div class=bloco1>
            <form action="script.php" method="GET">
                <h2>CALCULAR CALORIA DO BISCOITO</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe a quantidade de Biscoitos <input type="number" name="biscoito"></h3>
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
            <form action="http://localhost/menu_principal/menu/">
                <P><input class="btn1" type="submit" value="Voltar Menu">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio2">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>