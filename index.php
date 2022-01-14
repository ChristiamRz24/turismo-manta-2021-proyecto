<?php
    require './config/config.php';
    require './config/conexion.php';
    $id_imagen = 0; //Para cargar las imágenes de las diferentes categorías
    $db = new Database();
    $conexion = $db->conectarDB();
    //Consulta preparada
    $sql = $conexion->prepare("select id_categoria, nombre_categoria from categoria order by id_categoria");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    //Consulta para las cartas
    $sql2 = $conexion->prepare("select id_hospedaje, nombre_hospedaje, descripcion_hospedaje, nombre_categoria
    from categoria inner join hospedaje on hospedaje.id_categoria = categoria.id_categoria 
    where id_hospedaje = '00001' or id_hospedaje = '00002' or id_hospedaje = '00006' or id_hospedaje = '00008'
    order by id_hospedaje limit 4;");
    $sql2->execute();
    $resultado2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turismo MANTA</title>
    <link rel="shortcut icon" href="./src/img/favicon/favicon.png">
    <!-- CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <main>
      <!-- Header -->
      <header class="p-3 text-white header d-flex justify-content-center">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <img src="./src/img/logo.png" alt="MANTA" width="120" class="logo">
              <div class="me-lg-auto"></div>
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a href="#categorias" class="nav-link text-white">Categorías</a>
                </li>
                <li class="nav-item">
                  <a href="#sobre-manta" class="nav-link text-white">Sobre Manta</a>
                </li>
                <li class="nav-item">
                  <a href="#entradas-destacadas" class="nav-link text-white">Entradas destacadas</a>
                </li>
              </ul>
              <div class="text-end">
                <!-- Facebook -->
                <a class="btn m-1" href="https://www.facebook.com/MunicipioManta/" role="button">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Twitter -->
                <a class="btn m-1" href="https://twitter.com/Municipio_Manta?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <!-- Instagram -->
                <a class="btn m-1" href="https://www.instagram.com/municipiomanta/?hl=es" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </header>
      <!-- Carrousel -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./src/img/carrusel/muelle.jpg" alt="">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Grandes actividades de exportación e importación</h1>
                <p>Manta cuenta con el primer puerto turístico, marítimo y pesquero del Ecuador</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./src/img/carrusel/playa.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Turismo seguro en los 13 balnearios de Manta</h1>
                <p>La Policía Nacional brinda seguridad las 24 horas al día mediante patrullaje preventivo</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./src/img/carrusel/manta.jpg" alt="">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>También se la conoce como San Pablo de Manta</h1>
                <p>Disfruta y vive la mejor experiencia de la naturaleza, playas, deportes de aventura y su vida nocturna</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Search -->
      <section class="search-sec">
        <div class="container">
          <form action="#" method="post" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 p-0 d-flex justify-content-center">
                    <input type="text" class="form-control search-slt" placeholder="Digite un nombre">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 p-0 d-flex justify-content-center">
                    <select class="form-control search-slt" id="selectCategory">
                      <?php foreach($resultado as $row){ ?>
                        <?php
                          $id_categoria = $row['id_categoria'];
                          $nombre_categoria = $row['nombre_categoria'];
                        ?>
                        <option hidden selected>Seleccione una categoría</option>
                        <option value="<?php echo $id_categoria; ?>"><?php echo $nombre_categoria; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 p-0 d-flex justify-content-center">
                    <button type="button" class="btn btn-danger wrn-btn">
                      <i class="fas fa-search"></i>
                      &nbsp; Buscar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Divider -->
      <div class="mb-5"></div>
      <div class="container">
        <!-- Categorías -->
        <div class="container">
          <h1 class="mb-5" id="categorias">Categorías</h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Card start -->
            <?php foreach($resultado as $row){ ?>
              <?php
                $id_categoria = $row['id_categoria'];
                $nombre_categoria = $row['nombre_categoria'];
                $id_imagen = $id_imagen + 1;
                $src = "./src/img/categorias/Categoria-" . "$id_imagen" . ".jpg";
              ?>
              <div class="col">
                <div class="card card-category">
                  <img src="<?php echo $src; ?>" class="image-entry">
                  <a
                    class="txt-hidden" id-categoria="<?php echo $id_categoria; ?>"
                    href="./categorias.php?id=<?php echo $id_categoria; ?>&token=<?php echo hash_hmac('sha1', $id_categoria, KEY_TOKEN); ?>"
                  >Ver Detalles</a>
                  <div class="card-body d-flex justify-content-center">
                    <h5><?php echo $nombre_categoria; ?></h5>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- Cards end -->
          </div>
        </div>
        <!-- Divider -->
        <div class="mb-5"></div>
        <!-- Soobre Manta -->
        <div class="row mb-5" id="sobre-manta">
          <div class="col-md-5">
            <img src="./src/img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="500" height="500" role="img" focusable="false">
          </div>
          <div class="col-md-7 d-flex flex-column justify-content-center div-about">
            <h2 class="mb-4">Sobre MANTA</h2>
            <p class="lead">Es llamada "La Puerta del Pacífico" por ser uno de los principales puertos para la economía ecuatoriana. En el censo de 2010 tenía una población de 217.553 habitantes, lo que la convierte en la séptima ciudad más poblada del país. La ciudad es el núcleo del área metropolitana de Manabí Centro, junto con la capital provincial, Portoviejo; la conurbación está constituida además por ciudades y parroquias rurales cercanas.</p>
          </div>
        </div>
        <!-- Entradas destacadas -->
        <div class="container mb-4">
          <h1 class="mb-4" id="entradas-destacadas">Entradas destacadas</h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Card start -->
            <?php foreach($resultado2 as $row2){ ?>
              <?php
                $id_card = $row2['id_hospedaje'];
                $Category_card = $row2['nombre_categoria'];
                $nombre_card = $row2['nombre_hospedaje'];
                if(strlen($nombre_card) > 21) {
                  $nombre_card = substr($nombre_card , 0, 18) . "...";
                }
                $description_card = substr(($row2['descripcion_hospedaje']), 3, 83) . "...";
                $img_route = "./src/img/" . strtolower($Category_card) . "/" . $id_card . "/otras/principal.jpg";
              ?>
              <div class="col mb-5">
                <div class="card card-entry text-center shadow-0">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="<?php echo $img_route; ?>" class="img-fluid img-entry" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a href="./detalles.php?id=<?php echo $id_card; ?>&categoria=<?php echo strtolower($Category_card); ?>&token=<?php echo hash_hmac('sha1', $id_card, KEY_TOKEN); ?>"><?php echo $nombre_card; ?></a> 
                    </h5>
                    <p class="card-text"><?php echo $description_card; ?></p>
                  </div>
                  <div class="card-footer"><?php echo $Category_card; ?></div>
                </div>
              </div>
            <?php } ?>
            <!-- Cards end -->
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
    <!-- JavaScript Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<style>
  .card-footer {
    border-radius: 0 0 15px 15px !important;
    background-color: #fffaf5 !important;
  }
  .img-entry {
    height: 155px !important;
  }
  .card-title > a {
    color: #000 !important;
  }
  main, .card-category {
    background-color: #f6f6f6;
  }
  .logo {
    cursor: pointer;
  }
  .nav-item > a:hover {
    color: #212529 !important;
  }
  .text-end > a {
    color: #fff;
  }
  .header {
    position: relative;
  }
  .carousel {
    top:-32px;
  }
  .carousel-inner {
    width: 100%; 
    overflow: hidden;
  }
  header > div {
    position: absolute;
    z-index: 10;
    width: 100%;
  }
  .carousel-item > img {
    width: 100%;
    height: 625px;
  }
  .card-category {
    border: 0px;
    position: relative;
    line-height: 0;
  }
  .card-category > img,
  .img-about {
    height: 150px;
    border-radius: 15px;
    box-shadow: 0px 20px 40px 0px rgb(0 0 0 / 30%);
  }
  .txt-hidden {
    border-radius: 15px;
    padding: 75px 0; /* Mitad de la imagen */
    color: #fff;
    text-align: center;  
    background: #000;
    transition: opacity .2s linear;
    cursor: pointer;  
    position: absolute;
    right: 0;
    left: 0;
    opacity: 0;
    text-decoration: none;
  }
  .txt-hidden:hover {
    opacity: .40;
    color: #fff;
  }
  .img-about {
    width: 500px;
    height: 500px;
    object-fit: fill;
  }
  .div-about {
    padding-left: 60px;
  }
  .card-title > a {
    text-decoration-line: none
  }
  .card-entry {
    border-radius: 15px;
    height: 100%;
  }
  .card-entry:hover {
    border-color: #fff !important;
    box-shadow: 0px 20px 40px 0px rgb(0 0 0 / 30%);
    transition: .2s linear;
  }
  .bg-image > img{
    width: 90%;
    border-radius: 15px;
    margin-top: 15px;
  }
  .card-footer {
    color: #d52016;
  }
  #categorias, 
  #entradas-destacadas {
    font-weight: bold;
  }
  /* Buscador */
  .search-sec{
    padding: 1.5rem;
    margin-top: -31.8px;
  }
  .search-slt{
    margin: 0.3rem;
    padding-left: 30px;
    display: block;
    width: 90%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius: 30px;
  }
  .wrn-btn{
    margin: 0.3rem;
    width: 90%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius: 30px;
  }
  @media (min-width: 992px){
    .search-sec{
      position: relative;
      background: rgba(26, 70, 104, 0.51);
    }
  }
  @media (max-width: 992px){
    .search-sec{
      background: #1A4668;
    }
  }
</style>
