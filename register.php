<?php
require_once "templates/header.php";
?>

<form action="config/register_process.php" class="container" method="POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" require>Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu email" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label" require>Nome</label>
      <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Digite seu nome" name="name">
    </div>
    <div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label">Sobrenome</label>
      <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Digite seu sobrenome" name="lastname">
    </div>
    <div>
    <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label" require>Senha</label>
      <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="Crie uma senha" name="pass">
    </div>
    <div class="mb-3">
        <input type="submit" value="Cadastrar" class="btn btn-dark form-control">
    </div>
    <div>
        <a href="login.php">Já tem uma conta? Faça login</a>
    </div>
</form>
<?php
require_once "templates/footer.php";
?>