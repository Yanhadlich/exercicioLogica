<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 7</title>
</head>

<body>
<?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 7</h2>
            <h3>Escreva um algoritmo que leia as idades de 2 homens e de 2
                mulheres (considere que as idades dos homens serão sempre
                diferentes entre si, bem como as das mulheres). Calcule e escreva a
                soma das idades do homem mais velho com a mulher mais nova, e o
                produto das idades do homem mais novo com a mulher mais velha.
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR IDADES</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe a idade do prmeiro homem    <input type="number" name="homem1"></h3>
                <h3>Informe a idade do segundo homem    <input type="number" name="homem2"></h3>
                <h3>informe a idade da primeira mulher  <input type="number" name="mulher1"></h3>
                <h3>Informe a idade da segunda mulher   <input type="number" name="mulher2"></h3>
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
            <form action="http://localhost/menu_principal/menu/exercicio6">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio8">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>