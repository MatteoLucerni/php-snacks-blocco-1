<?php
// SNACK 2 LOGICA 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$message = 'Accesso negato';

if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
    $message = 'Accesso consentito';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>SNAKS: Result</title>
</head>

<body>
    <div class="container pt-5 text-center">
        <h1><?= $message ?></h1>
        <br>
        <a class="btn btn-primary" href="index.php">Torna alla homepage</a>
    </div>
</body>

</html>