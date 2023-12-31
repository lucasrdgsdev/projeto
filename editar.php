<?php 
 session_start();
 include_once 'includes/header.php';
 include_once 'includes/menu.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php
 include_once 'banco/conexao.php';
 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
 $_SESSION['id'] = $id;
 $querySelect = $mysqli->query("SELECT * FROM clientes WHERE id='$id'");

 while($registros = $querySelect->fetch_assoc()):
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];
    $fornecedor = $registros['fornecedor'];
    $conferente    = $registros['conferente'];
endwhile;

?>
 <!-- FORMULARIO DE CADASTRO -->
 <div class="row container">
        <p>&nbsp;</p>
        <form action="banco/update.php" method="post" class="col s12">
          <fieldset class="formulario" style="padding: 15px">
              <legend>
                  <img src="img/teste.png" alt="[image]" width="150">
              </legend>
            <h5 class="light center">Alteração</h5>

            <?php include 'includes/edit_inputs.php'; ?>
            <!-- BOTÕES -->
            <div class="input-field col s12">
                <input type="submit" value="alterar" class="btn blue">
            
                <a href="consultas.php" class="btn red">cancelar</a>
            </div>
          </fieldset>
        </form>
    </div>
<?php include_once 'includes/footer.php' ?>