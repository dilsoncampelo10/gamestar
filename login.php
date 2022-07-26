<?php
require_once "templates/header.php";
require_once "dao/UserDaoMysql.php";
require_once "config/connect.php";

$userdao = new UserDaoMysql($conn);

$user = $userdao->findById($id);

?>

<form action="" class="container">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea2" class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
    </div>
 
    <div class="mb-3">
        <input type="submit" value="Entrar" class="btn btn-dark form-control">
    </div>
    <div>
        <a href="register.php">Ainda não tem uma conta? cadastre-se</a>
    </div>
</form>
<?php
require_once "templates/footer.php";
?>