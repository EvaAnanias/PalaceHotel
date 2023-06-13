<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../CSS/StyleNav.css" />
  <link rel="stylesheet" type="text/css" href="../CSS/StyleCadastro.css" />
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <title>Cadastre-se | PalaceHotel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid">
      <a class="navbar-brand imagem" href="Index.php"><img width="170" height="30" class="color"
          src="../Imagens/LogoCadastrar.png" alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item color">
            <p class="nav-link tag-a color text_p">Já possui o cadastro?</p>
          </li>
          <li class="nav-item color">
            <a class="nav-link tag-a color" href="../HTML/Login.php">Faça login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div>
    <div class="div_text1">
      <p class="p1">Para poder acessar nossa plataforma é preciso se cadastrar.</p>
    </div>
    <div class="div_text2">
      <p class="p2">Caso haja alguma dúvida entre com <a href="ContatoPrincipal.php">contato</a> com a nossa equipe!</p>
    </div>
    <header>
      <div class="div_header">
        <form method="post" action="../PHP/Register.php">
          <div class="mb-3">
            <label for="exampleInputNome1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleInputNome1" name="name" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
              required>
            <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com ninguém.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </header>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>