<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNasc = $_GET ['ano_nasc'];
        $anoDigitado = $_GET ['idade_ano'];
        $idade = $anoDigitado - $anoNasc;
    
    
    ?>
    <main>
        <h2>Calculando sua idade</h2>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano voçê nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" required>
            <label for="idade_ano">Quer saber sua idade em que ano ? (atualmente estamos em <strong>2023</strong>)</label>
            <input type="number" name="idade_ano" id="idade_ano" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoDigitado?>!</p>
    </section>
</body>
</html>