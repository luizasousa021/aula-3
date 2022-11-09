<?php
// PASSO = 1 pagar os dados da tela
$nome = $_POST["nome"];
$email = $_POST["emial"];
$telefone = $_POST["telefone"];
$dtcadastro = date("Y-m-d");// padrão do banco


// Passo 2 - Montar a conexão com o banco de dados
include_once'./conexao.php';

// Passo 3 - Montar o sql de gravar no banco


?>