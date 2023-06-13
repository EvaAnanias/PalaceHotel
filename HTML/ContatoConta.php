<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/StyleNav.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/StyleContato.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/StyleContatoConta.css"/>
    <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
    <title>Contato | PalaceHotel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light nav">
        <div class="container-fluid menu">
          <a class="navbar-brand imagem" href="#"><img class="color" src="../Imagens/Logo_PalaceHotel.png" alt="PalaceHotel 4,9 estrelas"></a>
          <div class="textos" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item color espaco">
                <a class="nav-link tag-a active color a" href="Home.php">Hospedagens</a>
              </li>
            <li class="nav-item color espaco">
                <a class="nav-link tag-a active color a" href="Conta.php">Conta</a>
            </li>
            <li class="nav-item contato color espaco">
                <a class="nav-link active color a bold" aria-current="page" href="ContatoConta.html">Contato</a>
            </li>
            <li class="nav-item color">
                <a class="nav-link tag-a color" href="Login.php">Sair</a>
            </li>
            </ul>
          </div>
        </div>
    </nav>
    <header class="row header_todo" >
    <div class="col-7 div_texto1">
        <p>Nossa portaria é aberta 24 horas por dia para melhor atendermos.</p>
        <p>Esta com algum ploblema em nosso sistema ou com alguma duvida? </p>
        <p>Entre em contato conosco que te responderemos em breve</p>
    </div>
    <div class="div_contato">
        <div class="mb-5 cor">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@example.com">
          </div>
          <div class="mb-5 cor">
            <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Continuar</button>
          </div>
    </div>
    </header>

</body>
</html>