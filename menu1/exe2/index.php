<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 2</title>
</head>

<body>
    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">
        <div class="bloco2">
            <h2>EXERCÍCIO 2</h2>
            <h3> Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês,
                mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele
                efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas
                vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do
                vendedor. </h3>

        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR SALÁRIO</h2>
                <p class="mensagemDeErroResultado">
                <?php
                $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                if ($mensagemDeErro) {
                    echo $mensagemDeErro;
                    session_destroy();
                }
                ?>
                </p>
                <h3>Informe o numero de carros vendidos    <input type="number" name="carro_vendido"></h3>
                <h3>Informe o valor total das vendas    <input type="text" name="valor_venda" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe o salário do funcionário    <input type="text" name="salario" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe o valor por carro vendido   <input type="text" name="fixo_carro" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
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
            <form action="http://localhost/menu_principal/menu1/exe1">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu1/exe3">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>