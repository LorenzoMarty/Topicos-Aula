<?php
$email = $_GET['email'];
$senha = $_GET['senha'];

include("conecta.php");

$sql = "UPDATE usuario SET email = '$email', senha = '$senha' WHERE id_usuario= '$idU'";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}