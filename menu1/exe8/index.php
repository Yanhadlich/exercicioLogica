<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 8</title>
</head>

<body>
<?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>

    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 8</h2>
            <h3> Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido
                um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado
                da divisão do primeiro valor lido pelo segundo valor lido. (utilizar a estrutura REPITA)</br></br> Acrescentar uma mensagem de 'VALOR INVÁLIDO' no exercício [08] caso o segundo valor
                informado seja ZERO.
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULADORA DE DIVISÕES</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe um numero   <input type="number" name="numero1"></h3>
                <h3>Informe um numero   <input type="number" name="numero2"></h3>
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
            <form action="http://localhost/menu_principal/menu1/exe7">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/">
                <P><input class="btn1" type="submit" value="MENU">
                <p>
            </form>
        </div>
    </div>
</body>

</html>