<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="\menu_principal\style.css">
    <link rel="stylesheet" href="\menu_principal\estilo.css">
    <title>Exercicio 6</title>
</head>

<body>
    <?php require_once('C:\xampp\htdocs\menu_principal\header.php') ?>
    <div class="linha">

        <div class="bloco2">
            <h2>EXERCÍCIO 6</h2>
            <h3>A empresa de leilões Arremate Certo disponibiliza seu site para que
                qualquer pessoa possa vender seus produtos on line. Para que nenhum
                produto fique encalhado, ele só pode ser anunciado durante 6 semanas. Nesse período, seu preço cai 5% por semana, até que uma venda seja
                concretizada. Por exemplo, um produto que esteja sendo vendido por
                R$ 100.00 na primeira semana passa a custar R$ 100 x 0.95 = R$ 95.00
                na segunda semana e R$ 95,00 x 0.95 = R$ 90.25 na terceira semana. Construa um programa onde o usuário informe o valor do preço de um
                item e o computador escreva a como esse valor evolui ao longo das 6
                semanas.
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>COLOQUE UM PRODUTO A VENDA</h2>
                <p class="mensagemDeErroResultado">
                <?php
                $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                if ($mensagemDeErro) {
                    echo $mensagemDeErro;
                    session_destroy();
                }
                ?>
                </p>
                <h3>Informe o produto   <input type="text" name="produto"></h3>
                <h3>informe o valor do produto  <input type="text" name="preco" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
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
                     <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado1']) ? $_SESSION['resultado1'] : '';
                    if ($resultado) {
                        echo $resultado;
                        
                    }
                    ?>
                     </p>
                <p class="mensagemDeErroResultado">
                    <?php
                   $resultado = isset($_SESSION['resultado2']) ? $_SESSION['resultado2'] : '';
                    if ($resultado) {
                        echo $resultado;
                       
                    }
                    ?>
                </p>
                <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado3']) ? $_SESSION['resultado3'] : '';
                    if ($resultado) {
                        echo $resultado;
                        
                    }
                    ?>
                </p>
                <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado4']) ? $_SESSION['resultado4'] : '';
                    if ($resultado) {
                        echo $resultado;
                        
                    }
                    ?>
                
                </p>
                
                <p class="mensagemDeErroResultado">
                    <?php
                    $resultado = isset($_SESSION['resultado5']) ? $_SESSION['resultado5'] : '';
                    if ($resultado) {
                        echo $resultado;
                        
                    }
                    ?>
                
                </p>
            </form>
        </div>
    </div>

    <div class="btns">
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio5">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu/exercicio7">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>