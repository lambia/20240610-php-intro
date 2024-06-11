<?php
//per prima cosa creo le variabili che mi serviranno
$nome = "Luca";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP World</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <h1>Benvenuto in XAMPP</h1>

    <h2>Ciao, <?php echo $nome; ?></h2>
    
    <h3>La risposta è: <?php
        $x = 41;
        $y = 1;
        $risultato = $x + $y;
        echo $risultato;
    ?></h3>
    
</body>
</html>