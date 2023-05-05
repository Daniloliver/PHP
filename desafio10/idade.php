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
        $nasc = $_GET ['nasc'];
        $atual = date("Y");
        $ano = $_GET ['atual'] ?? $atual;
       
    ?>
    <main>
        <h2>Calculando sua idade</h2>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">

            <label for="nasc">Em que ano voçê nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" value="<?=$nasc?>" max="<?=$atual?>">

            <label for="atual">Quer saber sua idade em que ano ? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="atual" id="atual" min="1900" value="<?=$atual?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
             $idade = $ano - $nasc;
        ?>
        <h2>Resultado Final</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>