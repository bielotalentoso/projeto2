<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "projeto";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error){

    die("Erro: " . $conexao->connect_error);

}

echo "Conectado com sucesso!";


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "INSERT INTO cliente(nome, cpf, telefone, email)

VALUES('$nome', '$cpf', '$telefone', '$email')";

if($conexao->query($sql) === TRUE){

    echo "Atendimento enviado com sucesso!";

}else{

    echo "Erro ao salvar.";

}


?>