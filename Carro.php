<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'portaria') {
    header('Location: index.php');
    exit;
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $ra = $_POST['ra'];
    $placacarro = $_POST['placacarro'];
   
    // Grava os dados do aluno no arquivo
    $dados = "$nome|$ra|$placacarro\n";
    file_put_contents('carro.txt', $dados, FILE_APPEND);
    }
//    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
//        $nome = $_POST["nome"];
//        $ra = $_POST['ra'];
//        $placamoto = $_POST['placamoto'];
        
        // Grava os dados do aluno no arquivo
//        $dados = "$nome|$ra|$placamoto\n";
//       file_put_contents('moto.txt', $dados, FILE_APPEND);
  
//    }

// Ler e exibir todos os cadastrados no arquivo.txt
//$alunos = [];
//if (file_exists('carro.txt')) {
//   $linhas = file('carro.txt', FILE_IGNORE_NEW_LINES);
//   foreach ($linhas as $linha) { 
//        list($nome, $ra, $placacarro) = explode('|', $linha);
//        $alunos[] = ['nome' => $nome, 'ra' => $ra, 'placacarro' => $placacarro];
//    }
    // Ordena os alunos em ordem alfabética
//   sort($alunos);
//}
//    elseif(file_exists('moto.txt')) {
//    $linhas = file('moto.txt', FILE_IGNORE_NEW_LINES);
//    foreach ($linhas as $linha) { 
//        list($nome, $ra, $placamoto) = explode('|', $linha);
//        $alunos[] = ['nome' => $nome, 'ra' => $ra, 'placamoto' => $placamoto];
//    }
    // Ordena os alunos em ordem alfabética
//    sort($alunos);
//}
?>