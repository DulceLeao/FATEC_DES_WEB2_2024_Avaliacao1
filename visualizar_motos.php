<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'portaria') {
    header('Location: cadastro_alunos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estacionamento FATEC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;}
    </style>
</head>
<body>

<center>
    <h1>Vizualizar motos cadastradas</h1>
<a href="dashboard.php"><input type="submit" value="Voltar"></a> <hr>
        <a href="moto.txt"></a>
        <?php 
        $handle = fopen("moto.txt", "r");
        while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
        }
        fclose($handle);
        ?>
    <br><br>    
    </center>

</body>
</html>