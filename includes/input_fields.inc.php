<?php
    if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
    endif;
?>

<!-- CAMPO NOME -->
<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nome" id="nome" maxlength="50" required autofocus>
    <label for="nome">Nome do Responsável</label>
</div>
<!-- CAMPO EMAIL -->
<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    <input type="email" name="email" id="email" maxlength="50" required>
    <label for="email">Email do Fornecedor</label>
</div>
<!-- CAMPO TELEFONE -->
<div class="input-field col s12">
    <i class="material-icons prefix">phone</i>
    <input type="tel" name="telefone" id="telefone" maxlength="15" required>
    <label for="telefone">Telefone do Fornecedor</label>
</div>
<!-- CAMPO FORNECEDOR -->
<div class="input-field col s12">
    <i class="material-icons prefix">store</i>
    <input type="text" name="fornecedor" id="fornecedor" maxlength="35" required>
    <label for="fornecedor">Fornecedor</label>
</div>
<!-- CAMPO CONFERENTE -->
<div class="input-field col s12">
    <i class="material-icons prefix">assignment</i>
    <input type="text" name="conferente" id="conferente" maxlength="35" required>
    <label for="conferente">Conferente</label>
</div>