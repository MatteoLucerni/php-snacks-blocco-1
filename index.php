<?php
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>
    <ul>
        <?php foreach ($partite as $partita) : ?>
            <li><?= $partita['squadra_casa'] ?> - <?= $partita['squadra_ospite'] ?> | <?= $partita['punti_casa'] ?>-<?= $partita['punti_ospite'] ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>