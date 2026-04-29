<?php 
    include "menu.php";

if ((isset($_GET["nome"]))&&(isset($_GET["idade"]))){
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    
    echo "<p>O nome digitado foi: {$nome} e ele tem {$idade} anos</p>";
    
}else {
    echo "<p>Nenhum nome digitado";
}
?>   