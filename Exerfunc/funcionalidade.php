<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>1</h2>

    <?php
    function exibirCabecalho()
    {
        echo "<h1>Sistema de Gestão Escolar</h1>";
    }

    exibirCabecalho();
    ?>

    <h2>2</h2>

    <?php

    function exibirLog()
    {
        echo "<h3>Log: O sistema iniciou com sucesso em - " . date('d/m/Y') . "</h3>";
    }

    exibirLog();

    ?>

    <h2>3</h2>

    <?php

    function exibirDivisor()
    {
        echo "<br>" . str_repeat("-", 50) . "<br>";
    }

    exibirDivisor();

    ?>

    <br>
    <h2>4</h2>


    <?php


    function exibirNome($nome)
    {
        echo "© 2024 - Desenvolvido por $nome";
    }


    exibirNome("Bernardo Lang da Fonseca Ribeiro");

    ?>

    <h2>5</h2>

    <?php

    $nome = "Bernardo";
    function exibirOi($nome)
    {

        echo "<p> Olá $nome, seja bem vindo ao painel</p>";
    }

    exibirOi($nome);

    ?>

    <h2>6</h2>

    <?php

    $base = 5;
    $altura = 7;

    function exibirTriangulo($base, $altura)
    {
        echo "<p>Sua base é $base, e sua altura é $altura</p>";
        echo "<p>À Área do seu triangulo é: " . ($base * $altura / 2) . "</p>";
    }

    exibirTriangulo($base, $altura);

    ?>

    <h2>7</h2>

    <?php

    $valor = 3345;

    function formatarMoeda($valor)
    {
        $valorFormatado = number_format($valor, 2, ',', '.');
        echo "<p>Valor: R$ $valorFormatado</p>";
    }

    formatarMoeda($valor);

    ?>

    <h2>8</h2>

    <?php
    function imprimirListaCompras($itens)
    {
        echo "<ul>\n";
        foreach ($itens as $item) {
            echo "    <li>" . htmlspecialchars($item) . "</li>\n";
        }
        echo "</ul>\n";
    }


    $compras = ["Leite", "Pão", "Ovos", "Frutas"];
    imprimirListaCompras($compras);
    ?>

    <h2>9</h2>

    <?php
    function ExibirFuncao()
    {
        $versao = "v1.0.2";
        return $versao;
    }

    $versao = ExibirFuncao();
    echo "<p>Você esta usando a versão: $versao</p>"

    ?>

    <h2>10</h2>

    <?php

    function exibirCupom()
    {
        $cupom = rand(1000, 9999);
        return $cupom;
    }

    $meuCupom = exibirCupom();
    echo "Seu código promocional é: $meuCupom";

    ?>

    <h2>11</h2>

    <?php
    $conexao = true;
    function verificarConexao()
    {
        global $conexao;
        if ($conexao) {
            return true;
        } else {
            return false;
        }
    }


    if (verificarConexao()) {
        echo "Conectado";
    } else {
        echo "Erro";
    }

    ?>

    <h2>12</h2>

    <?php

    function obterFusoHorario()
    {
        return date_default_timezone_get();
    }


    $fuso = obterFusoHorario();
    echo "Fuso horário do servidor: " . $fuso;
    ?>

    <h2>13</h2>

    <?php

    function calcularIdade($anoNascimento)
    {
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;
        return $idade;
    }

    $anoDeNascimento = 1995;
    $idade = calcularIdade($anoDeNascimento);

    echo "Você tem $idade anos";
    ?>

    <h2>14</h2>

    <?php

    function calcularDesconto($preco, $percentualDesconto)
    {
        $desconto = ($preco * $percentualDesconto) / 100;
        $precoComDesconto = $preco - $desconto;
        return $precoComDesconto;
    }

    $precoProduto = 200.00;
    $descontoPercentual = 15;

    $novoPreco = calcularDesconto($precoProduto, $descontoPercentual);
    echo "o preço do produto sem desconto é R$ $precoProduto";
    echo " e o preço do produto com desconto é R$ " . number_format($novoPreco, 2, ',', '.');
    ?>

    <h2>15</h2>

    <?php

    function validarEmail($email)
    {
        if (str_contains($email, '@')) {
            return true;
        } else {
            return false;
        }
    }

    $emailTeste = "usuario@example.com";

    if (validarEmail($emailTeste)) {
        echo "E-mail válido!";
    } else {
        echo "E-mail inválido!";
    }
    ?>

    <h2>16</h2>

    <?php
    function celsiusParaFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * 9 / 5) + 32;
        return $fahrenheit;
    }


    $temperaturaCelsius = 25;
    $temperaturaFahrenheit = celsiusParaFahrenheit($temperaturaCelsius);

    echo "$temperaturaCelsius °C equivale a $temperaturaFahrenheit °F";
    ?>

</body>

</html>