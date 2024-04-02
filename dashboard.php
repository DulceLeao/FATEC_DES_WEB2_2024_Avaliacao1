<?php

session_start(); // startar a session

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'portaria') {
    header('Location: index.php');
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
        body{ font: 16px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><strong>Controle do Estacionamento da FATEC Araras</strong></h1>
        <br><br>
        <p><h3>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h3></p>
            <br><br>
            <a href="cadastro_alunos_carro.php"><input type="submit" value="Cadastro de Carro"></a>
            <a href="visualizar_carros.php"><input type="submit" value="Visualizar Carros"></a>
            <br><br>
            <a href="cadastro_alunos_moto.php"><input type="submit" value="Cadastro de Moto"></a>            
            
            <a href="visualizar_motos.php"><input type="submit" value="Visualizar Motos"></a>
            <br><br>
            <a href="logout.php"><input type="submit" value="Sair"></a>
    </div>
</body>
</html>
