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
            <h3> Faça um algoritmo para ler as 3 notas obtidas por um aluno nas 3 verificações e a média dos
                exercícios que fazem parte da avaliação. Calcular a média de aproveitamento, usando a fórmula abaixo e escrever o conceito do aluno de acordo com a tabela de conceitos mais abaixo: </br></br><img src="exe7-1.png" alt="tabelaF"></br></br> A atribuição de conceitos obedece a tabela abaixo:</br></br><img class="imgGeral" src="exe7-2.png" alt="tabelaF">
            </h3>
        </div>
        <div class="bloco1">
            <form action="script.php" method="GET">
                <h2>CALCULAR MÉDIA</h2>
                <p class="mensagemDeErroResultado">
                    <?php
                    $mensagemDeErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
                    if ($mensagemDeErro) {
                        echo $mensagemDeErro;
                        session_destroy();
                    }
                    ?>
                </p>
                <h3>Informe a nota da avaliação <input type="text" maxlength="2" name="nota1" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe a nota da avaliação <input type="text" maxlength="2" name="nota2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe a nota da avaliação <input type="text" maxlength="2" name="nota3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
                <h3>Informe a nota da avaliação <input type="text" maxlength="2" name="nota4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46"></h3>
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
            <form action="http://localhost/menu_principal/menu1/exe6">
                <P><input class="btn1" type="submit" value="ANTERIOR">
                <p>
            </form>
        </div>
        <div>
            <form action="http://localhost/menu_principal/menu1/exe8">
                <P><input class="btn1" type="submit" value="PROXIMO">
                <p>
            </form>
        </div>
    </div>
</body>

</html>