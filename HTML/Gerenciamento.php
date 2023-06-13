<?php
include '../PHP/Config/Connect.php';
session_start();

if(isset($_SESSION['idusuario'])){
  if (isset($_SESSION['tipoUsuario']) and $_SESSION['tipoUsuario'] == '1'){
    
$query = "SELECT id, nome, email FROM clientes WHERE id -+1 ORDER BY id;";
$result = $conn->query($query);


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
  <link rel="stylesheet" type="text/css" href="../CSS/StyleGerenciamento.css" />
  <link rel="icon" sizes="32x32" href="../Imagens/TelaPrincipal/placahotel.png">
  <title>Gerenciamento | PalaceHotel</title>
</head>
<style>
  .nav {
    background-color: black;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-light nav">
    <div class="container-fluid menu">
      <a class="navbar-brand imagem" href="#"><img class="color" width="250" height="60"
          src="../Imagens/logoGerenciador.jpeg" alt="PalaceHotel 4,9 estrelas"></a>
      <div class="textos" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item contato color espaco">
            <a class="nav-link active color a cor" style="color: #FFF;" aria-current="page"
              href="ContatoConta.php">Gerenciamento de Clientes</a>
          </li>
          <li class="nav-item color">
            <a class="nav-link tag-a color" href="Login.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row g-3 font">
    <div class="col-4 pesquisa">
      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
    </div>
  </div>
  
  <table class="table form">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">--</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
      <tr>
        <td>
          <?php echo $row['id']; ?>
        </td>
        <td>
          <?php echo $row['nome']; ?>
        </td>
        <td>
          <?php echo $row['email']; ?>
        </td>
        <td><a href="javascript: if(confirm('Tem certeza que deseja deletar esse usuario ?'))
               location.href='../PHP/DeleteUser.php?id=<?php echo $row['id']; ?>';"class="delete">Deletar</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <footer>

  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>
<?php }
} ?>