<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=etec_23064','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Conectado");
}catch(PDOException $e) {
    echo 'Erro: '. $e->getMessage();
    echo("Não Conectado"); 
}


?>
