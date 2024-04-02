<?php
session_start();

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
        body{ font: 14px sans-serif;}
    </style>
</head>
<body>
    <center>
    <div class="page-header">
        <h1><strong>Cadastro de Alunos</strong></h1>
        <hr>
            <a href="dashboard.php"><input type="submit" value="Voltar"></a>
          
            <a href="logout.php"><input type="submit" value="Sair"></a>
    </div>
    <?php echo '<br><br>';?>
    
    <form action="Carro.php" method="POST">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="ra">Registro Acadêmico:</label>
        <input type="text" id="ra" name="ra" required><br><br>
        <label for="placa">Placa do carro:</label>
        <input type="text" id="placacarro" name="placacarro" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br><br>
    </center>
    <center>
        <!-- Botão para visualizar carros-->
        <a href="visualizar_carros.php" class="btn btn-primary">Visualizar carros</a>
    <br><br>
  
  

</body>
</html>
