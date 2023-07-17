<?php
// DATI SNACK 1
$partite = [
    [
        'squadra_casa' => 'Juventus',
        'squadra_ospite' => 'Milan',
        'punti_casa' => 2,
        'punti_ospite' => 1
    ],
    [
        'squadra_casa' => 'Inter',
        'squadra_ospite' => 'Roma',
        'punti_casa' => 3,
        'punti_ospite' => 0
    ],
    [
        'squadra_casa' => 'Napoli',
        'squadra_ospite' => 'Lazio',
        'punti_casa' => 1,
        'punti_ospite' => 1
    ],
    [
        'squadra_casa' => 'Barcelona',
        'squadra_ospite' => 'Real Madrid',
        'punti_casa' => 2,
        'punti_ospite' => 2
    ],
    [
        'squadra_casa' => 'Bayern Monaco',
        'squadra_ospite' => 'Borussia Dortmund',
        'punti_casa' => 3,
        'punti_ospite' => 1
    ]
];
// DATI SNACK 2

// DATI SNACK 3

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Snacks</title>
</head>
<style>
    h1 {
        text-align: center;
        margin-bottom: 50px;
    }

    input {
        margin-bottom: 20px;
    }
</style>

<body>

    <div class="container rounded border border-info mt-5 p-5">
        <!-- SNACK 1 -->
        <h1>SNACK 1</h1>
        <ul>
            <?php foreach ($partite as $partita) : ?>
                <li><?= $partita['squadra_casa'] ?> - <?= $partita['squadra_ospite'] ?> | <?= $partita['punti_casa'] ?>-<?= $partita['punti_ospite'] ?></li>
            <?php endforeach ?>
        </ul>

        <!-- SNACK 2 -->
        <hr class="my-5">
        <h1>SNACK 2</h1>

        <form action="result.php" method="GET">
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome">
            <input class="form-control" type="email" name="mail" id="mail" placeholder="E-mail">
            <input class="form-control" type="number" name="age" id="age" placeholder="Età">
            <input class="btn btn-primary" type="submit" value="ACCEDI">
        </form>

        <!-- SNACK 3 -->
    </div>
</body>

</html>