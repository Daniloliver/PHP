<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        
        <?php
            $num = mt_rand(0, 100);
            echo "<p>Gerando número aleatório entre 0 e 100...<br> O valor gerado foi <strong>$num</strong></p>";
        ?>
   
        <button onclick="document.location.reload()">&#x1f504;Gerar outro</button>
       
    </main>
</body>
</html>