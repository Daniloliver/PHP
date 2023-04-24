<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_POST['num'] ?? 0;
        $quadrada = sqrt($num);
        $cubica = $num ** (1 / 3);
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="post">
            <label for="numero">Número:</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular as Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php 

            
            echo "<p> Analisando o <strong>Número $num </strong> temos:";
            echo "<ul>";
            echo "<li> A sua Raiz Quadrada é <strong>" .  number_format($quadrada, 3, ",") . "</strong></li>";
            echo "<li> A sua Raiz Cubica é <strong>" . number_format($cubica, 3, ",") . "</strong></li>";
            echo "</ul>";
        ?>

    </section>
</body>
</html>