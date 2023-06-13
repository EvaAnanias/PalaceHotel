<?php

require('../PHP/Config/Connect.php');
session_start();

?>
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
  <link rel="stylesheet" type="text/css" href="../CSS/StyleHome.css" />
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <title>Home | PalaceHotel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid menu">
      <a class="navbar-brand imagem" href="#"><img class="color" src="../Imagens/Logo_PalaceHotel.png"
          alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item color espaco">
            <a class="nav-link tag-a active color a bold" href="#">Hospedagens</a>
          </li>
          <li class="nav-item color espaco">
            <a class="nav-link tag-a active color a" href="Conta.php">Conta</a>
          </li>
          <li class="nav-item contato color espaco">
            <a class="nav-link active color a" aria-current="page" href="ContatoConta.php">Contato</a>
          </li>
          <?php
          if (isset($_SESSION['idusuario'])) {
          ?>

          <li class="nav-item color">
            <a class="nav-link tag-a color" href="../PHP/Logout.php">Sair</a>
          </li>

          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <div>
    <form class="row form needs-validation espacamento" novalidate>
      <div class="col-md-4 altura">
        <label for="nome" class="form-label cor">Nome</label>
        <input type="text" class="form-control" id="nome" value="Milena">
      </div>
      <div class="col-md-4 altura">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-select" id="estado" required>
          <option selected disabled value="">Escolha</option>
          <option>São Paulo</option>
          <option>Paraná</option>
          <option>Santa Catarina</option>
          <option>Rio de Janeiro</option>
          <option>Bahia</option>
          <option>Porto Alegre</option>
        </select>
      </div>
      <div class="col-md-4 altura">
        <label for="cidade" class="form-label cor">Cidade</label>
        <select class="form-select" id="cidade" required>
          <option selected disabled value="">Escolha</option>
          <option>São Paulo</option>
          <option>Campinas</option>
          <option>Cuiaba</option>
          <option>Presidente Prudente</option>
        </select>
      </div>
      <div class="col-md-3 altura">
        <label for="datachegada" class="form-label cor">Dia de Chegada</label>
        <input type="date" class="form-control" id="datachegada" required>
      </div>
      <div class="col-md-3 altura">
        <label for="horachegada" class="form-label cor">Horário de Chegada</label>
        <input type="time" class="form-control" id="horachegada" required>
      </div>
      <div class="col-md-3 altura">
        <label for="datasaida" class="form-label cor">Dia de saída</label>
        <input type="date" class="form-control" id="datasaida" required>
      </div>
      <div class="col-md-3 altura">
        <label for="horachegada" class="form-label cor">Horário de Saída</label>
        <input type="time" class="form-control" id="horachegada" required>
      </div>
      <div class="col-md-4 altura">
        <label for="pessoas" class="form-label cor">Pessoas</label>
        <select class="form-select" id="pessoas" required>
          <option selected value="">1</option>
          <option>2</option>
          <option>3</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
      <div class="col-md-4 altura">
        <label for="quartos" class="form-label cor">Quartos</label>
        <select class="form-select" id="quartos" required>
          <option selected value="">1</option>
          <option>2</option>
          <option>3</option>
        </select>
      </div>
      <div class="col-md-4 altura">
        <label for="camas" class="form-label cor">Camas</label>
        <select class="form-select" id="camas" required>
          <option selected value="">1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="col-12 altura">
        <button class="btn btn-primary" type="submit">Agendar</button>
      </div>
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