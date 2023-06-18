<!doctype html>
<html lang="en">

<head>
  <title>Actualizar alimentacion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <div class="container">
  <main>
 <!-- ========== Start FORM ========== -->

<?php

//print_r($_GET);

$id_alime = $_GET['id_alimentacion'];

include('..\connection\connection.php');

$query = "CALL p_vrdosAlimentacion($id_alime)";
$resul = mysqli_query($conn,$query);
$fila = mysqli_fetch_array($resul);

?>
<form action="up_alimenta.php" method="post">
    <div class="mb-3">
        <label for="input_tipo_alimento" class="form-label">Alimentación</label>
        <input type="text" class="form-control" id="input_tipo_alimento" value = "<?php echo $fila['tipo_alimento']?>" name ="tipo_alimento">
    </div>
      <input type = "hidden" value = "<?php echo $fila['id_alimentacion']?>" name = "id_alimentacion">
      <button type="submit" class="btn btn-secondary">Actualizar</button>

    </div>

</form>
  
  <!-- ========== End FORM ========== -->

  </main>
  </div>
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