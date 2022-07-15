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
            <h3> Faça um algoritmo para ler: número da conta do cliente, saldo, débito e crédito. Após, calcular e
                escrever o saldo atual (saldo atual = saldo - débito + crédito).</br> Também testar se saldo atual for maior
                ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'.
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
            <h2>CALCULAR O SALDO</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                   
                <h3>Informe o saldo  <input type="text" name="saldo" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe o credito    <input type="text" name="credito" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe o debito     <input type="text" name="debito" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
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
            <form action="http://localhost/menu_principal/menu1/exe4">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu1/exe6">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>