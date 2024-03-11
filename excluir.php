<?php

$idU = $_GET['id_usuario'];

include("conecta.php");

$sql = "DELETE * FROM usuario WHERE id_usuario= '$idU'";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}