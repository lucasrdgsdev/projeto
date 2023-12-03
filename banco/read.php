<?php

include_once './banco/conexao.php';

$querySelect = $mysqli->query("select * from clientes");
while ($registros = $querySelect->fetch_assoc()):
    $id       = $registros['id'];
    $nome     = $registros['nome'];
    $fornecedor =$registros['fornecedor'];
    $email    = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
    echo "
    <td>$nome</td>
    <td>$fornecedor</td>
    <td>$email</td>
    <td>$telefone</td>
    <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>
    <td><a href='banco/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>
    ";
    echo "</tr>";

endwhile;
