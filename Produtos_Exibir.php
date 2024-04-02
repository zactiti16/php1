<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e calcula o preço de venda do produto</title>
</head>
<body>
    <?php
    echo "<h3>EXIBE E CALCULA O PREÇO DE VENDA DO PRODUTO</h3>";
    echo "<hr>";
    // Recupera os dados informados nas caixas de texto e armazena nas variáveis
    $codigo = $_POST["codigo"];
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $PrecoCusto = $_POST["Precocusto"];
    $PercAumento = $_POST["PercentualAumento"];

    echo "Código: " .$codigo;
    echo "<br>Descrição: " .$descricao;
    echo "<br>Marca: " .$marca;
    echo "<br>Preço de Custo: " .$PrecoCusto;
    echo "<br>% de aumento: " .$PercAumento . "%";
    echo "<hr>";

    echo "<marquee behavior='alternate'>Desenvolvido por Cleber - &copy; 2024</marquee>";

    ?>
</body>
</html>