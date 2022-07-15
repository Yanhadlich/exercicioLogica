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
            <h3> Escreva um algoritmo para ler o número total de eleitores de um município, o número de votos
                brancos, nulos e válidos. Calcular e escrever o percentual que cada um representa em relação ao total
                de eleitores. </h3>

        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR VOTOS DO MUNICIPIO</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe a quantidade de pessoas no município <input type="number" name="municipio"></h3>
                <h3>Informe a quantidade de votos válidos <input type="number" name="validos"></h3>
                <h3>Informe a quantidade de votos nulos <input type="number" name="nulos"></h3>
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
            <form action="http://localhost/menu_principal/">
                <P><input class="btn1" type="submit" value="Voltar Menu">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu1/exe2">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>