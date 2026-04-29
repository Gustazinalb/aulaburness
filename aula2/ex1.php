<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula de php</title>
</head>
<body>
    <?php
        require "menu.php";
    ?>
    <h1>Aula de PHP</h1>
    <?php
        $nome = "Gustavo Henrique de Souza Albuquerque";
        $cidade = 'Campo Mourão';

        echo "<p>O nome digitado foi: " .$nome. "</p>";
        echo "<p>O nome digitado foi: {$nome}</p>";
        echo '<p>O nome digitado foi: {$nome}</p>';
        echo '<p>O nome digitado foi: ' .$nome. '</p>';
        echo "<p>O {$nome} mora em {$cidade} </p>";
    ?>    
</body>
</html>