<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP World</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <h1>Hello PHP World!</h1>
    <h2>Inserisci i tuoi dati e PHP ricambierà il saluto</h2>

    <form action="elabora.php" method="GET">

        <input type="text" placeholder="Scrivi il tuo nome" name="nome">
        <input type="text" placeholder="Scrivi il tuo cognome" name="cognome">

        <button type="submit">Invia</button>

    </form>
    
</body>
</html>