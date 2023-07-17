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

// DATI SNACK BONUS

$paragraph = "La montagna si erge imponente davanti a noi, con la sua maestosità e bellezza selvaggia. Il sole splende sulle cime, illuminando il paesaggio circostante. L'aria fresca riempie i nostri polmoni mentre camminiamo lungo il sentiero tortuoso. Il vento sibila tra gli alberi, trasportando con sé il profumo della natura. I colori vivaci dei fiori selvatici abbelliscono il percorso. Sentiamo il fruscio dell'acqua di un ruscello che scorre allegro tra le rocce. Gli uccelli cantano una melodia gioiosa, dando vita alla quiete del luogo. Ci sentiamo in sintonia con l'energia di questa meravigliosa creazione. Un'esperienza indimenticabile che rimarrà nel nostro cuore per sempre";

// LOGICA SNACK BONUS

$divided_paragraphs = explode('.', $paragraph);
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

    <div class="container rounded border border-info my-5 p-5">
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

        <!-- SNACK BONUS -->
        <hr class="my-5">
        <h1>SNACK BONUS</h1>
        <h2>Paragrafo originale:</h2>
        <p><?= $paragraph ?></p>
        <h2 class="mt-5">Paragrafo diviso:</h2>
        <?php foreach ($divided_paragraphs as $single_paragraph) : ?>
            <li><?= $single_paragraph ?></li>
        <?php endforeach ?>
    </div>
</body>

</html>