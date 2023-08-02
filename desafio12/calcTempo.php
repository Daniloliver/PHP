<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcTempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET ['seg'] ?? 0 ;
    
    
    ?>

    <main>
        <h2>Calculadora do tempo</h2>

        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg"  value="<?=$total?>" required min="0" step="1">
            
            <input type="submit" value="Calcular">
        </form>
    </main>
    <!-- Numbers do tipo float é aconselhavel utilizar o underline antes das casas decimais -->
    <?php
        $sobra = $total; 
        $semana = intdiv($total, 604_800);
        $sobra = $total % 604_800;

        $dia = intdiv($sobra, 86_400);
        $sobra = $sobra % 86_400;

        $hora = intdiv($sobra, 3_600);
        $sobra= $sobra % 3_600;

        $minuto = intdiv($sobra, 60);
        $sobra = $sobra % 60;

        $segundo = $sobra;



    ?>

    <section>
        <h2>Totalizando tudo</h2>
        
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>

        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>