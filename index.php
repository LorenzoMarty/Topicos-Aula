<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tópicos Aula</title>
</head>

<body>
    <a href="cadastrarForm.html">Cadastrar</a>
    <?php

    include("conecta.php");

    $sql = "SELECT * FROM usuario";
    //executa o select
    $resultado = mysqli_query($conexao, $sql);

    //lista os itens
    echo '<table>
    <tr>
    <strong>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Opções</th>
    </strong>
    </tr>';

    while ($dados = mysqli_fetch_assoc($resultado)) {
        echo "<td> " . $dados['id_usuario'] . " </td>";
        echo "<td> " . $dados['email'] . "</td>";
        echo "<td><a href='editarForm.php?email=" . $dados['email'] . "&senha=" . $dados['senha'] . "'>" . "<img src='settings.png' widht='20' height='20'" . "</a>";
        echo " <a href='excluir.php?id_usuario=" . $dados['id_usuario'] . "'>" . "<img src='lixeira.png' widht='20' height='20'" . "</a></td>";
        echo '</tr>';
    }
    echo '</table>';

    ?>
</body>

</html>