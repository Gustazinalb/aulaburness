<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario php</title>
</head>
<body>
    <?php
        require "menu.php";
    ?>
    <h1>Formulario de cadastro</h1>
    <form name="form1" method="get" action="ex3.php">
        <label for="nome">preencha com o nome completo: </label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="idade">digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <br>
        <button type="submit">enviar dados</button>
    </form>
</body>
</html>