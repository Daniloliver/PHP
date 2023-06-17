<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $nota1 = $_REQUEST ['number1'] ?? "";
        $nota2 = $_REQUEST ['number2'] ?? "";
        $peso1 = $_REQUEST ['peso1'] ?? "";
        $peso2 = $_REQUEST ['peso2'] ?? "";

        $mediaS = ($nota1 + $nota2) / 2 ;
        $mediaP = ($peso1 * $nota1 + $peso2 * $nota2) / ($peso1 + $peso2); 

    ?>
    
    <main>
        <h1>Média do Aluno</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="request">
            <label for="nota1">Primeira Nota:</label>
            <input type="number" name="number1" id="number1" required value="<?=$nota1?>">
            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="peso1" required min="1" value="<?=$peso1?>">
            <label for="nota2">Segunda Nota:</label>
            <input type="number" name="number2" id="number2" required value="<?=$nota2?>">
            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="peso2" required min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular a Média">
        </form>
    </main>
    
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p> Analisando os valores $nota1 e $nota2</p> <br>";
            echo "<ul><li><strong>A média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaS, 2, ",", ".") . "</li>";
            echo "<li><strong>A média Aritmética Ponderada</strong> entre os valores é igual a " . number_format($mediaP, 2, ",", ".") . "</li></ul>";


        ?>
    </section
</body>
</html>