<?php
include '../PHP/Config/Connect.php';
session_start();

if (isset($_SESSION['nome'])) {
  $nome = $_SESSION['nome'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../CSS/StyleNav.css" />
  <link rel="stylesheet" type="text/css" href="../CSS/StyleConta.css" />
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Conta | PalaceHotel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid menu">
      <a class="navbar-brand imagem" href="#"><img class="color" src="../Imagens/Logo_PalaceHotel.png"
          alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item color espaco">
            <a class="nav-link tag-a active color a" href="Home.php">Hospedagens</a>
          </li>
          <li class="nav-item color espaco">
            <span style="font-weight: bold;"><a class="nav-link tag-a active color a bold" href="#">Conta</a></span>
          </li>
          <li class="nav-item contato color espaco">
            <a class="nav-link active color a" aria-current="page" href="ContatoConta.php">Contato</a>
          </li>
          <li class="nav-item color">
            <a class="nav-link tag-a color" href="Login.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="cor">
    <div class="nome">
      <p class="espaco">Olá,
        <?php echo $nome ?>
      </p>
    </div>
    <div class="reserva">
      <p class="espaco">Aparentemente você não tem nenhuma reserva hoje!</p>
    </div>
    <div class="col-md-4 div_conta tamanho">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="<?php echo $nome ?>">
    </div>
    <form action="../PHP/UpdatePassword.php" method="post">
      <div class="div_conta">
        <div class="input-group mb-3">
          <label for="senha" class="form-label col-md-12">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
          <span class="material-symbols-outlined input-group-text">
            key
          </span>
        </div>
      </div>
      <input type="submit" class="btn btn-primary btn-sm botao" value="Alterar senha">
    </form>
  </div>
  <footer>

  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>