<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre categoría</title>
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
      <!-- Background info -->
      <div class="background-image-container">
        <div class="background-item">
          <img src="../img/bg-2.jpg" alt="">
            <div class="carousel-caption">
              <h1>Nombre de categoría</h1>
            </div>
        </div>
      </div>
      <!-- Divider -->
      <div class="mb-5"></div>
      <!-- Breadcums -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/turismo_manta">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Categoría</li>
        </ol>
      </nav>
      <!-- Contenedor cartas -->
      <div class="container mb-2">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
          <!-- Card start -->
          <div class="col mb-5">
            <div class="card text-center shadow-0 card-entry">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Nombre carta</a> 
                </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
              </div>
              <div class="card-footer">Categoría</div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card text-center shadow-0 card-entry">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Nombre carta</a> 
                </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
              </div>
              <div class="card-footer">Categoría</div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card text-center shadow-0 card-entry">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Nombre carta</a> 
                </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
              </div>
              <div class="card-footer">Categoría</div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card text-center shadow-0 card-entry">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Nombre carta</a> 
                </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
              </div>
              <div class="card-footer">Categoría</div>
            </div>
          </div>
          <!-- Cards end -->
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
  .card-title > a {
    text-decoration-line: none
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