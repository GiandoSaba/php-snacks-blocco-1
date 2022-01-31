<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$message = 'Accesso negato';

if (!empty($_GET["name"]) && !empty($_GET["mail"]) && !empty($_GET["age"])) {
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    $checkName = strlen($name) > 3;
    $checkEmail = strpos($mail, '@') && strpos($mail, '.');
    $checkAge = is_numeric($age);

    if ($checkName && $checkEmail && $checkAge) {
        $message = 'Accesso riuscito';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $message ?></h1>
</body>

</html>