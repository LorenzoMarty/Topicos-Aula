<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

include("conecta.php");

$sql = "INSERT INTO usuario(email, senha) VALUES ('$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}