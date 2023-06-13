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
  <link rel="stylesheet" type="text/css" href="../CSS/StyleLogin.css" />
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <title>Login | PalaceHotel</title>

  <style>
    * {
      background-color: #FFFFFF;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid menu">
      <a class="navbar-brand imagem" href="Index.php"><img class="color" src="../Imagens/Logo_PalaceHotel_a.png"
          alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item color">
            <a class="nav-link tag-a color" href="Cadastro.php">Cadastre-se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="div_text">
    <p class="text1">Bem vindo ao PalaceHotel</p>
    <p class="text2">Faça login para acessar a plataforma</p>
  </div>
  <div class="login a">

    <form class="a" action="../PHP/Login.php" method="post">
      <div class="size a">
        <div class="mb-3 a">
          <label for="exampleFormControlInput1" class="form-label a">E-mail:</label>
          <input type="email" class="form-control input_a" id="exampleFormControlInput1" name="email" placeholder="name@example.com"
            required>
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label a senha">Senha:</label>
        <input type="password" class="form-control input_b" id="inputPassword" name="senha" required>
        <a href="Tela_Principal.html"><button type="submit" class="btn btn-primary mb-3 botton"
            href="Home.php">Continuar</button></a>
      </div>
    </form>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>