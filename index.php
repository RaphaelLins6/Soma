<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de revisão</title>
</head>
<body>
    <form action="index.php" method="GET">
        n1 <input type="number" name="n1">
        n2 <input type="number" name="n2">
        <button type="submit">Enviar</button>
    </form>
    
    <?php

        $n1 = @$_GET['n1'];
        $n2 = @$_GET['n2'];
        $ns = $n1 + $n2;

        if($ns > 20){
            echo $ns + 8;
        }else{
            echo $ns - 5;
        }
?>
</body>
</html>