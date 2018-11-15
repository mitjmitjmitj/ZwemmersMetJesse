<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>

<?php

$teams = array(34,27,13,98,45,23,11);

foreach ($teams as $team) {
    $aantal = floor($team / 5);
    for ($i = 0 ; $i < $aantal ; $i++) {
        echo '+';
    }
    echo '<br>';
}

echo 'Joey';




?>


</div>

</body>
</html>