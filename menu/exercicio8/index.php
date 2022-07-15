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
            <h3> Jogo do dólar. Construa um algoritmo onde o usuário informa o valor
                do dólar no câmbio atual e um certo número de moedas de 1, 5, 10, 25 e
                50 centavos de real. Se o valor total das moedas for o necessário para
                comprar exatamente um dolar, o programa deve parabenizar o usuário
                por ganhar o jogo. Caso contrário, o programa deve exibir uma
                mensagem indicando se o valor inserido foi maior ou menor do que o
                necessário. </br></br>Exemplo: </br>
                <h4>Se o dólar estiver a R$ 3.78, e o usuário informar 3 moedas de 1 centavo, uma de 5 centavos, duas de 10 centavos, duas de 25 centavos e 6 de 50 centavos, ele ganha o jogo. O mesmo aconteceria se ele informasse 3 moedas de 1 centavo, 13 de 25 centavos e uma de cinquenta centavos</h4>
            </h3>
        </div>

        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>JOGO DO DOLAR</h2>
                <h3>Informe a cotação do dolar <input type="text" name="dolar" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>1 centavo <input type="number" name="1cent"></h3>
                <h3>5 centavos <input type="number" name="5cent"></h3>
                <h3>10 centavos <input type="number" name="10cent"></h3>
                <h3>25 centavos <input type="number" name="25cent"></h3>
                <h3>50 centavos <input type="number" name="50cent"></h3>
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
            <form action="http://localhost/menu_principal/menu/exercicio7">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio9">
                <P><input class="btn1" type="submit" value="PROXIMO">
                </p>
            </form>
        </div>
    </div>
</body>

</html>