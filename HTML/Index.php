<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../CSS/StyleNav.css" />
  <link rel="stylesheet" type="text/css" href="../CSS/StyleIndex.css" />
  <title>Palace Hotel</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid menu">
      <a class="navbar-brand imagem" href="#"><img class="color" src="../Imagens/Logo_PalaceHotel.png"
          alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item contato color">
            <a class="nav-link active color" aria-current="page" href="ContatoPrincipal.php">Contato</a>
          </li>
          <li class="nav-item color">
            <a class="nav-link tag-a color" href="Login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="div_text">
    <div class="div_text1">
      <p class="text1">O nosso hotel esta espalhado por várias cidades da região!</p>
    </div>
    <div class="div_text2">
      <p class="text2">Venha se hospedar num dos nossos hoteis.
        Estamos abertos 24h por dia para melhor atendermos!</p>
    </div>
  </div>
  <div>
    <div id="carouselExampleIndicators" class="carousel slide cor_slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../Imagens/Slide/imagem_1.png" class="d-block w-100"
            alt="Cidades de Presidente prudente e Paranapiacaba">
        </div>
        <div class="carousel-item">
          <img src="../Imagens/Slide/imagem_2.png" class="d-block w-100" alt="Cidades de São paulo e Campinas">
        </div>
        <div class="carousel-item">
          <img src="../Imagens/Slide/imagem_3.png" class="d-block w-100" alt="Cidades de Rio de Janeiro e Niterói">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="cor">
    <div class="div_beneficios">
      <div class="div_cafe">
      </div>
      <div class="div_wi-fi">
      </div>
      <div class="div_restaurante">
      </div>
      <div class="div_esta">
      </div>
    </div>
  </div>
  <footer>
    <div>

    </div>
  </footer>





  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>