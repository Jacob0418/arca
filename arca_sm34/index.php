<!doctype html>
<html lang="en">

<head>
  <title>Arca</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
      
  <nav class="navbar navbar-dark bg-dark bg-opacity-9 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ARCA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h2>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <div class="mb-3">
          <li>
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Historiales</h5>
          </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="historial\clasificacion._log.php">Clasificación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial\alimentacion_log.php">Alimentación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial\habitat_log.php">Hábitat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial\animal_log.php">Animales</a>
          </li>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  </header>
  <main>
    <?php

    //print_r($_GET);
    include('connection\connection.php');

    $query = "call arca.p_contaAlimentacion()";
    $result = mysqli_query($conn,$query);
    $aliment = mysqli_fetch_array($result);

    ?>

  <?php

  //print_r($_GET);
  include('connection\connection.php');

  $query1 = "call arca.p_contaClasificacion()";
  $result1 = mysqli_query($conn,$query1);
  $clasf = mysqli_fetch_array($result1);

  ?>

<?php

//print_r($_GET);
include('connection\connection.php');

$query2 = "call arca.p_contaHabitat()";
$result2 = mysqli_query($conn,$query2);
$hab = mysqli_fetch_array($result2);

?>

<?php

//print_r($_GET);
include('connection\connection.php');

$query3 = "call arca.p_contaAnimal()";
$result3 = mysqli_query($conn,$query3);
$anim = mysqli_fetch_array($result3);

?>
  <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-3 col-lg-3">
          <div class="card border-info" style="width: 17rem;">
            <img src="imagenes/8718538.gif" class="card-img-top" alt="coronado">
            <div class="card-body">
              <h5 class="card-title text-info">CLASIFICACIÓN</h5>
              <p class="card-text text-black">TOTAL = <?php echo $clasf['total']; ?></p>
              <a href="clasificacion.php" class="btn btn-info text-light">Ir a Clasificación</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="card border-secondary" style="width: 17rem;">
            <img src="imagenes/chirivia.gif" class="card-img-top" alt="holaaaa">
            <div class="card-body">
              <h5 class="card-title text-secondary">ALIMENTACIÓN</h5>
              <p class="card-text text-black">TOTAL = <?php echo $aliment['total']; ?></p>
              <a href="alimentacion.php" class="btn btn-secondary">Ir a Alimentación</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="card border-success" style="width: 17rem;">
            <img src="imagenes/casa-de-gato.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-success">HÁBITAT</h5>
              <p class="card-text text-black">TOTAL = <?php echo $hab['total']; ?></p>
              <a href="habitat.php" class="btn btn-success">Ir a Hábitat</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="card border-danger" style="width: 17rem;">
            <img src="imagenes/diente-de-sable.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-danger">ANIMALES</h5>
              <p class="card-text text-black">TOTAL = <?php echo $anim['total']; ?></p>
              <a href="animal.php" class="btn btn-danger">Ir a Animales</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>