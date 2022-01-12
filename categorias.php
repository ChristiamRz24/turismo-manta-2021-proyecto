<?php
    require './config/config.php';
    require './config/conexion.php';
    $db = new Database();
    $conexion = $db->conectarDB();

    //Validar que el id y el token sean correctos
    $id = isset($_GET['id']) ? $_GET['id'] : '';
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
        if ($id == "00001") {
          $tabla = "comidas_tipicas";
          $tabla_alt = "Comidas típicas";
        } else if ($id == "00002") {
          $tabla = "Distracciones";
        } else if ($id == "00003") {
          $tabla = "Hospedaje";
        } else if ($id == "00004") {
          $tabla = "Playas";
        } else if ($id == "00005") {
          $tabla = "Publicidad";
        } else if ($id == "00006") {
          $tabla = "Restaurantes";
        } else if ($id == "00007") {
          $tabla = "sitios_de_interes";
          $tabla_alt = "Sitios de interes";
        }

        //Realizar la consulta
        $text = "select * from " . strtolower($tabla);
        $sql = $conexion->prepare($text);
        //echo $text;
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($id == "00001" || $id == "00007") { ?>
      <title><?php echo $tabla_alt; ?></title>
    <?php } else { ?>
      <title><?php echo $tabla; ?></title>
    <?php } ?>
    <!-- CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <main>
      <!-- Header -->
      <header class="text-white header d-flex justify-content-center">
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
      <!-- Background info -->
      <div class="background-image-container">
        <div class="background-item">
          <img src="./src/img/carrusel/manta.jpg" alt="">
            <div class="carousel-caption">
              <?php if($id == "00001" || $id == "00007"){ ?>
                <h1><?php echo $tabla_alt; ?></h1>
              <?php } else {?>
                <h1><?php echo $tabla; ?></h1>
              <?php } ?>
            </div>
        </div>
      </div>
      <!-- Divider -->
      <div class="mb-5"></div>
      <!-- Breadcums -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/turismo_manta">Inicio</a></li>
          <?php if($id == "00001" || $id == "00007"){ ?>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $tabla_alt; ?></li>
          <?php } else {?>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $tabla; ?></li>
          <?php } ?>
        </ol>
      </nav>
      <!-- Contenedor cartas -->
      <div class="container mb-2">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
          <!-- Card start -->
          <?php foreach($resultado as $row){ ?>
            <?php
              $id_elemento = $row['id_' . strtolower($tabla)];
              $nombre_elemento = $row['nombre_' . strtolower($tabla)];
              if(strlen($nombre_elemento) > 21) {
                $nombre_elemento = substr($nombre_elemento , 0, 18) . "...";
              }
              $descripcion_elemento = $row['descripcion_' . strtolower($tabla)];
              if ($id != "00001") {
                $descripcion_elemento = substr($descripcion_elemento, 3, 83) . "...";
                $desc_short = substr($descripcion_elemento, 3, 4);
                //Formatear entradas sin descripción
                if ($desc_short == "Dire" || $desc_short == "imad" || $desc_short == "Opci") {
                  $descripcion_elemento = "Si descripción...";
                }
              }
              $img_route = "./src/img/" . strtolower($tabla) . "/" . $id_elemento . "/otras/principal.jpg";
            ?>
            <div class="col mb-5">
              <div class="card text-center shadow-0 card-entry">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="<?php echo $img_route; ?>" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">
                  <?php if ($id == "00001") { ?>
                    <h5 href=""><?php echo $nombre_elemento; ?></h5>
                  <?php } else { ?>
                    <a href="./detalles.php?id=<?php echo $id_elemento; ?>&categoria=<?php echo strtolower($tabla); ?>&token=<?php echo hash_hmac('sha1', $id_elemento, KEY_TOKEN); ?>"><?php echo $nombre_elemento; ?></a>
                  <?php } ?>
                  </h5>
                  <p class="card-text"><?php echo $descripcion_elemento; ?></p>
                </div>
                <?php if ($id == "00001" || $id == "00007") { ?>
                  <div class="card-footer"><?php echo $tabla_alt; ?></div>
                <?php } else { ?>
                  <div class="card-footer"><?php echo $tabla; ?></div>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
          <!-- Card end -->
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
  .logo {
    cursor: pointer;
  }
  .text-end > a {
    color: #fff;
  }
  .header {
    position: relative;
  }
  .header > div > div {
    margin-top: 1em;
  }
  .carousel-caption {
    top: 40%;
    bottom: auto;
  }
  .background-image-container {
    width: 100%; 
    overflow: hidden;
    top:-32px;
  }
  header > div {
    position: absolute;
    z-index: 10;
    width: 100%;
  }
  .background-item > img {
    width: 100%;
    height: 625px;
    filter: brightness(50%);
  }
  .breadcrumb-item > a {
    text-decoration: none;
    color: #000;
    font-weight: 600;
  }
  .breadcrumb{
    margin-top: -25px;
    margin-left: 9%;
    margin-bottom: 20px;
  }
  .card {
    height: 100%;
  }
  .card-title > a {
    color: #000 !important;
    text-decoration-line: none
  }
  .card-title > a:hover {
    color: #5a5a5a !important;
  }
  .card-entry {
    border-radius: 15px;
  }
  .card-entry:hover {
    border-color: #fff !important;
    box-shadow: 0px 20px 40px 0px rgb(0 0 0 / 30%);
    transition: .2s linear;
  }
  .bg-image > img{
    width: 90%;
    height: 155px;
    object-fit: fill;
    border-radius: 15px;
    margin-top: 15px;
  }
  .card-footer {
    color: #d52016;
  }
</style>
<script>
  function goHome() {
    window.location.href = "http://localhost/turismo_manta/";
  } 
</script>