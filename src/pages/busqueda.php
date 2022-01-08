<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de búsqueda</title>
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
          <li class="breadcrumb-item active" aria-current="page">Nombre búsqueda</li>
        </ol>
      </nav>
      <!-- Card -->
      <div class="container mb-5">
        <div class="card row d-flex">
          <div class="bg-image hover-overlay ripple col-lg-3 col-md-12 d-flex flex-column     justify-content-center" data-mdb-ripple-color="light">
            <img src="../img/about.jpg" alt="About" class="img-fluid mx-auto img-about imagen-general" width="500" height="500" role="img" focusable="false">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
            </a>
          </div>
          <div class="card-body col-lg-7 col-md-6">
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            <p>Aliquam semper mauris sit amet lectus tempor aliquet. Duis cursus porta diam a commodo. Praesent massa diam, scelerisque at eros eget, convallis tempus libero. Quisque eu mattis augue. Nam ultricies nibh at ligula aliquam pulvinar. Sed dapibus dui dignissim, porta elit vulputate, varius augue.</p>
            <h6>Categoría</h6>
          </div>
          <div class="card-footer d-flex flex-column">
            <button type="button" class="btn btn-primary">Ver detalles</button>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="bg-secondary text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white col-lg-2 col-md-6" href="#">Turismomanta.com</a>
        </div>
      </footer>
    </main>
  </body>
</html>
<style>
  main {
    background-color: #f6f6f6;
    height: 100vh;
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
  .card {
    flex-direction: row !important;
    border-radius: 15px;
  }
  .card,
  .card-body {
    margin: .5% 0px;
  }
  .bg-image > img{
    border-radius: 15px;
  }
  .card-footer {
    width: 15%;
  }
  footer {
    position: absolute;
    bottom: 0;
    width: 100%
  }
</style>
<script>
  function goHome() {
    window.location.href = "http://localhost/turismo_manta/";
  } 
</script>