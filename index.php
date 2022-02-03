<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require_once ("perro.php");
    require_once ("gato.php");

    $gato = new gato();
    $perro = new perro();

    $perro -> comer();
    $perro -> dormir();

    echo "<hr>";

    $gato -> comer();
    $gato -> dormir();
    
    ?>
</body>
</html>