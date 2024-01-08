<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora</title>
    <style>
        *{
            text-align: center;
        }
        body{
            font-size: 15pt;
        }
    </style>
</head>
<body>
    <?php 
    date_default_timezone_set('America/Sao_Paulo');


    echo "<h1>A Data Hoje É: </h1>" . date("d/m/Y");

    echo "<br>";echo "<br>";
    
    echo "<h1>A Hora Agora É: </h1>" . date("H:i:s");
    
    ?>
</body>
</html>