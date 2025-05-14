<?php

$nomeCliente = $_POST['nomeCliente'];
$produto1 = $_POST['PrimeiroProduto'];
$valor1 = $_POST['valor1'];
$produto2 = $_POST['produto2'];
$valor2 = $_POST['valor2'];

$totalGasto = $valor1 + $valor2;


$totalFormatado = number_format($totalGasto, 2, ',', '.');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Nota Fiscal</h1>
    <div class="nota-fiscal">
        <p><strong>Cliente:</strong> <?php echo $nomeCliente; ?></p>
        <p><strong>Produto 1:</strong> <?php echo $produto1; ?> - R$ <?php echo number_format($valor1, 2, ',', '.'); ?></p>
        <p><strong>Produto 2:</strong> <?php echo $produto2; ?> - R$ <?php echo number_format($valor2, 2, ',', '.'); ?></p>
        <hr>
        <p><strong>Total Gasto:</strong> R$ <?php echo $totalFormatado; ?></p>
       
    </div>
</body>
</html>