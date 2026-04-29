<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços de repetição</title>
</head>
<body>
    <?php
    include "menu.php";
    ?>
    <h1>Laços de repetição</h1>
    <h2>FOR</h2>
    <?php
        for( $i=1; $i<=10; $i++){
            echo "<p> o valor de i é {$i} </p>";
        }
    ?>
    <h2>WHILE</h2>
    <?php
    $i = 1;
    while ( $i <= 10){
        echo"<p>O valor de i é {$i} </p>";
        $i++;
    }
    ?>
</body>
</html>