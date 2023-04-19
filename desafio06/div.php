<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
        // 0 não é divisor

        $result = intdiv ($dividendo,  $divisor);
        $quociente = $result;
        $resto = $dividendo % $divisor;
    
    ?>
       
    <main>
        <h1>Anatomia da divisão</h1>

        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="d2" id="d2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>          
    

        
    </main> 

    <section>
        <table class="divisao">
            <!-- TR EM HTML SÃO LINHA -->
            <!-- TD SÃO ONDE SERÃO INSERIDOS OS DADOS -->
            <tr> 
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>               
            </tr>
        </table>
    </section>
</body>
</html>