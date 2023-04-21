<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_POST['sal'] ?? 0;
        const MINIMO = 1380.00;

        $qtdMinimo = intdiv ($salario, MINIMO); 
        $resto = $salario % MINIMO;

    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            echo "<p> O seu <strong> R$ $salario </strong> equivale a <strong> $qtdMinimo salários mínimos</strong> + R$ $resto </p>";
        
        ?>
    </section>
</body>
</html>