<?php
$array = [ "Luca", "Giuseppe", "Massimiliano", "Dihep" ];

$utente = [
    "nome" => "Luca",
    "cognome" => "Lambiase",
    "eta" => 34
];

$studenti = [
    [
        "nome" => "Luca",
        "cognome" => "Lambiase",
        "eta" => 34
    ],
    [
        "nome" => "Giuseppe",
        "cognome" => "De Rosa",
        "eta" => 24
    ],
    [
        "nome" => "Francesco",
        "cognome" => "Falcone",
        "eta" => 31
    ]
];


$chiave = "cognome";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h2>Esempio array</h2>

    <pre>
        <?= var_dump($array); ?>
    </pre>

    <h2>Stampa valore specifico (0)</h2>
    <p><?= $array[0] ?></p>

    <h2>Esempio array associativo</h2>

    <pre><?= var_dump($utente); ?></pre>

    <h2>Stampa valore specifico (nome)</h2>
    <p><?= $utente["nome"] ?></p>

    <h2>Stampa valore specifico (chiave da variabile)</h2>
    <p><?= $utente[$chiave] ?></p>

    <h2>Esempio array di array associativi</h2>
    
    <pre><?= var_dump($studenti); ?></pre>

    <h2>Recupero lo studente all'indice 1</h2>

    <pre><?= var_dump($studenti[1]); ?></pre>

    <h2>Recupero una proprietà dello studente all'indice 1</h2>

    <p><?= $studenti[1]["cognome"] ?></p>

    <h2>Stampo tutti gli studenti</h2>

    <ul>
    <?php
    foreach($studenti as $studente) {
        echo "<li>" . $studente["nome"] . " " .  $studente["cognome"] . "</li>";
    }
    ?>
    </ul>

    <h2>Stampo tutte le proprietà di uno studente</h2>

    <ul>
    <?php
    foreach($studenti[0] as $key => $valore) {
        echo "<li>" . $key . ": " . $valore . "</li>";
    }
    ?>
    </ul>

</body>

</html>