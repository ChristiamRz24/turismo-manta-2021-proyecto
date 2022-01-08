<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle seleccion</title>
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
              <img src="../img/logo.png" alt="MANTA" width="120" onclick="goHome()" class="logo">
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
          <li class="breadcrumb-item"><a href="http://localhost/turismo_manta/src/pages/categorias.php">Categoría</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nombre elemento</li>
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
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about imagen-general" width="500" height="500" role="img" focusable="false">
                </div>
              </div>
            </div>
            <div class="container mb-5 imagenes-secundarias">
              <div class="row row-cols-3 row-cols-sm-4 row-cols-md-3 row-cols-lg-6 g-4">
                <!-- Contenedor imagenes -->
                <div class="col">
                  <!-- Imagen 1 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 2 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 3 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 4 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 5 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
                <div class="col">
                  <!-- Imagen 6 -->
                  <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about" width="100" height="100" role="img" focusable="false">
                </div>
              </div>
            </div>
            <h4 style="margin-left: 3.5%;">Ubicación</h4>
            <div class="col d-flex justify-content-center mb-5">
              <div style="width: 93%">
                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=374G+J5R,%20Manta+(Monumento%20Al%20Atun%20Manta)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                  <a href="https://www.gps.ie/car-satnav-gps/">Car Navigation Systems</a>
                </iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <!-- Contenedor detalles -->
            <h1 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
            <h5>Descripción:</h5>
            <p>Aliquam semper mauris sit amet lectus tempor aliquet. Duis cursus porta diam a commodo. Praesent massa diam, scelerisque at eros eget, convallis tempus libero. Quisque eu mattis augue. Nam ultricies nibh at ligula aliquam pulvinar. Sed dapibus dui dignissim, porta elit vulputate, varius augue. Quisque sit amet dolor vel libero volutpat scelerisque eget in eros. Nullam ultrices sodales gravida. Cras at lectus eu metus feugiat dapibus.</p>
            <h5>Horario de atención: </h5>
            <p>Sábados y domingos, de 11:00 a 0:00 horas</p>
            <h5>Precios:</h5>
            <p>$00.00</p>
            <a href="">
              Pagina web 
              <i class="fas fa-external-link-alt mb-4"></i>
            </a>
            <h5>Otros:</h5>
            <p>Phasellus euismod ultricies tellus. Pellentesque ac elit convallis, malesuada dolor sed, volutpat mauris. Pellentesque vulputate sapien lacus, eu viverra metus fringilla pellentesque. Etiam tempor pretium dolor quis vulputate. Fusce rhoncus elit at ante mattis, sed efficitur nunc consectetur. Curabitur purus diam, sollicitudin facilisis vestibulum ut, laoreet in elit. Maecenas eget bibendum nulla. <br> Mauris rhoncus faucibus eros ac maximus. Proin lacinia rhoncus tortor eu sagittis. Pellentesque sodales, nisl ut rutrum ullamcorper, lacus eros lacinia mi, dictum blandit nulla sapien at turpis. Praesent quis sapien nisl. Phasellus sit amet lectus eu augue pulvinar imperdiet. Aliquam aliquam convallis ipsum at bibendum. </p>
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
    box-shadow: 0px 20px 40px 0px rgb(0 0 0 / 30%);
  }
  .fa-external-link-alt{
    font-size: 13px;
  }
</style>
<script>
  function goHome() {
    window.location.href = "http://localhost/turismo_manta/";
  } 
</script>