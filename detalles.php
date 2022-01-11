<?php
    require './config/config.php';
    require './config/conexion.php';
    $db = new Database();
    $conexion = $db->conectarDB();

    //Validar que el id y el token sean correctos
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $tabla = isset($_GET['categoria']) ? $_GET['categoria'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';

    if($id == '' || $token == ''){
      echo "Error! Petición errónea.";
      exit;
    } else {
      $token_temp = hash_hmac('sha1', $id, KEY_TOKEN);
      if($token != $token_temp){ //Validar que no haya sido alterado
          echo "Error! Petición errónea.";
          exit;
      } else { //Si esta todo correcto se realiza la consulta
        //Realizar la consulta
        $text = "select * from " . strtolower($tabla) . " where id_" . strtolower($tabla) . " = '" . $id . "';";
        $sql = $conexion->prepare($text);
        //echo $text;
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultado as $row) {
          $id_categoria = $row['id_categoria'];
          $titulo = $row['nombre_' . strtolower($tabla)];
          $dir_map = $row['direccion_' . strtolower($tabla)];
          $descripcion = $row['descripcion_' . strtolower($tabla)];
        }
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo; ?></title>
    <!-- CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <main>
      <!-- Header -->
      <header class="text-white header d-flex justify-content-center bg-secondary">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <img src="./src/img/logo.png" alt="MANTA" width="120" onclick="goHome()" class="logo">
              <div class="me-lg-auto"></div>
              <div class="text-end">
                <!-- Facebook -->
                <a class="btn m-1" href="#!" role="button">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Twitter -->
                <a class="btn m-1" href="#!" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <!-- Instagram -->
                <a class="btn m-1" href="#!" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </header>
      <!-- Divider -->
      <div class="mb-5"></div>
      <!-- Breadcums -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/turismo_manta">Inicio</a></li>
          <li class="breadcrumb-item">
            <a href="./categorias.php?id=<?php echo $id_categoria; ?>&token=<?php echo hash_hmac('sha1', $id_categoria, KEY_TOKEN); ?>">
              <?php echo ucwords($tabla); ?>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
        </ol>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Contenedor imagen -->
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-12 mb-3">
                  <!-- Imagen general -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about imagen-general" width="500" height="500" role="img" focusable="false">
                </div>
              </div>
            </div>
            <div class="container mb-5 imagenes-secundarias">
              <div class="row row-cols-3 row-cols-sm-4 row-cols-md-3 row-cols-lg-6 g-4">
                <!-- Contenedor imagenes -->
                <div class="col">
                  <!-- Imagen 1 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 2 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 3 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 4 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 5 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 6 -->
                  <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
              </div>
            </div>
            <h4 style="margin-left: 3.5%;">Ubicación</h4>
            <div class="col d-flex justify-content-center mb-5">
              <div style="width: 93%">
                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $dir_map; ?>">
                  <a href="https://www.gps.ie/car-satnav-gps/">Car Navigation Systems</a>
                </iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <!-- Contenedor detalles -->
            <h1 class="mb-4"><?php echo $titulo; ?></h1>
            <h5>Descripción:</h5>
            <!-- Text description -->
            <?php echo $descripcion; ?>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="bg-secondary text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="#">Turismomanta.com</a>
        </div>
      </footer>
    </main>
  </body>
</html>
<style>
  main {
    background-color: #f6f6f6;
  }
  a {
    text-decoration: none;
    color: #000;
    font-weight: 600;
  }
  .breadcrumb{
    margin-top: -25px;
    margin-left: 10.5%;
    margin-bottom: 20px;
  }
  .logo {
    cursor: pointer;
  }
  .text-end > a {
    color: #fff;
  }
  .header > div > div {
    margin-top: 1em;
    margin-bottom: 1em;
  }
  .imagen-general {
    width: 100%;
    border-radius: 15px;
  }
  .imagenes-secundarias > div > div > img {
    border-radius: 5px;
  }
  .imagenes-secundarias > div > div > img:hover {
    cursor: pointer;
    filter: brightness(70%);
  }
  .fa-external-link-alt{
    font-size: 13px;
  }
  .img-precios {
    border-radius: 5px;
  }
</style>
<script>
  function goHome() {
    window.location.href = "http://localhost/turismo_manta/";
  } 
</script>