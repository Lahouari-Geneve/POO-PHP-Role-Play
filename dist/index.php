<?php

require_once '../src/config/loader.php';

use \App\Test;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Play</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e0632129c8.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php

    $class = new Test();

    $afficher = $class->test();

    var_dump($afficher);

    ?>

    <script src="js/script.js"></script>
</body>

</html>