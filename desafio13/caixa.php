<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style/style.css">

    <style>
        .notas{
            height: 60px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    
    ?>

    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.8em"><sup>*</sup>Notas disponíveis: R$100, R$50, $RS10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $saque;

        // Notas de 100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // Notas de 50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // Notas de 10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // Notas de 5
        $tot5 = floor($resto / 5);
        
    ?>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="notas"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="notas"> x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="notas"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="notas"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>