<?php
//Per prima cosa, recupero i dati passati nella query string
//lettura veloce: https://it.wikipedia.org/wiki/Query_string
//esempio: http://localhost/pagina?chiave=valore&nome=luca&cognome=lambiase
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];

//preparo la stringa in anticipo, così l'html resta più leggibile
$nomecognome = $nome . " " . $cognome; 

//cosa fa ucfirst??
$nomecognomecorretti = ucfirst($nome) . " " . ucfirst($cognome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h1>Hello, <?php echo $nomecognome; ?></h1>
    <h2>Hello, <?php echo $nomecognomecorretti; ?></h2>
    
</body>
</html>