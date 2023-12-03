<?php 
session_start();
include_once 'includes/header.php';
include_once 'includes/menu.php';
?>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Pesquisa de fornecedores</h5><hr>
        <p class="light">
        Você pesquisou por 
            <?php 
                include_once './banco/conexao.php';
                $busca = $_GET['pesquisa'];
                echo '<b>'.$busca.'</b>';
            ?>
        </p>
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Cliente</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Fornecedor</th>
                        <th>Conferente</th>
                        <th>Data cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once './banco/conexao.php';
                        $busca = $_GET['pesquisa'];
                        $encontrouResultados = false; // Variável para rastrear se resultados foram encontrados

                        $querySelect = $mysqli->query("
                            SELECT * FROM clientes WHERE nome LIKE '%$busca%' ".
                            "OR fornecedor LIKE  '%$busca%'
                        ");
                        
                        while($registros = $querySelect->fetch_assoc()):
                            $encontrouResultados = true; // Defina como verdadeiro, pois encontrou resultados
                            $id           = $registros['id'];
                            $nome         = $registros['nome'];
                            $email        = $registros['email'];
                            $telefone     = $registros['telefone'];
                            $fornecedor   = $registros['fornecedor'];
                            $conferente   = $registros['conferente'];
                            $created      = $registros['created_at'];

                            echo "<tr>";
                            echo "
                            <td>$id</td>
                            <td>$nome</td>
                            <td>$email</td>
                            <td>$telefone</td>
                            <td>$fornecedor</td>
                            <td>$conferente</td>
                            <td>$created</td>
                            <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>
                            <td><a href='banco/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
                           echo "</tr>";
                            
                        endwhile;

                        // Verificar se nenhum resultado foi encontrado e exibir mensagem de erro
                        if (!$encontrouResultados) {
                            echo "<tr><td colspan='7'>Nenhum resultado encontrado.</td></tr>";
                            echo "<tr><td colspan='7'><a href='consultas.php' class='btn blue'>Nova Pesquisa</a></td></tr>";
                        }
                        
                    ?>

                    
                </tbody>
            </table>
    </div>
</div>


<?php include_once 'includes/footer.php' ?>
