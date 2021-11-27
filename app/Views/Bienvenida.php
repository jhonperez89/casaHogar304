<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<title>Animal</title>
  

</head>
<body style="background-color:#9E9AC7;">
	<header >
	<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <div class="container-fluid">
    <a class="navbar-brand fuente" href="#">
	<i class="fas fa-paw"></i>
		Casa Hogar
	</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fuente" aria-current="page" href="#">Home</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link fuente" aria-current="page" href="<?=site_url('/productos/registros') ?>">registrar productos</a>
        </li>
		<li class="nav-item">
          <a class="nav-link fuente" aria-current="page" href="<?=site_url('/mascotas/registros') ?>">registrar Mascotas</a>
        </li>
       
      </ul>

    </div>
  </div>
</nav>
	</header>

	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col-12">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
 				 <div class="carousel-inner">
    				<div class="carousel-item active">
    				  <img src="<?= base_url('public/img/carusel8.jpg') ?>" class="d-block w-100" alt="...">
   				 </div>
  				  <div class="carousel-item">
    				  <img src="<?= base_url('public/img/carusel6.jpg') ?>" class="d-block w-100" alt="...">
   				 </div>
   				 <div class="carousel-item">
    				  <img src="<?= base_url('public/img/carusel7.jpg') ?>" class="d-block w-100" alt="...">
   				 </div>
		  </div>
 		 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
   			 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   				 <span class="visually-hidden">Previous</span>
  		</button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
				</div>

			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5">
			<div class="d-flex justify-content-center">
				<h2 style="color:#FFFFFF";>Casa Hogar Hacienda Verde</h2>
				
			</div>
		</div>
	</section>
		<div class="d-flex justify-content-center">
		<div class="mt-2">
		<p style="color:#FFFFFF";>Hogar para recibir y cuidar animales en abandondo, sin hogar, con enfermedades. Recuperando su bienestar y calidad de vida. </p>
		</div>
		</div>
		<section>
			<div class="container">
				<div class="row">
			<div class="d-flex justify-content-center">

					<div class="col-1 zoom">
					<img class="img-fluid w-100" src="<?= base_url('public/img/dog-icon.png') ?>" class=""  alt="">

					</div>
					<div class="col-1 zoom">
					<img class="img-fluid w-100" src="<?= base_url('public/img/cat-icon.png') ?>" alt="">

					</div>
					<div class="col-1 zoom">
					<img class="img-fluid w-100" src="<?= base_url('public/img/fish-icon.png') ?>" alt="">

					</div>
					<div class="col-1 zoom">
					<img class="img-fluid w-100" src="<?= base_url('public/img/horse-icon.png') ?>" alt="">

					</div>
					<div class="col-1 zoom">
					<img class="img-fluid w-100" src="<?= base_url('public/img/bird-icon.png') ?>" alt="">

					</div>
					
				</div>
			</div>

			</div>

		</section>

		<section class="fondoApp">

		</section>
		
		<section>
			<div class="comtainer mt-5">
				<div class="row">
					<div class="col-6">
					<img src="<?= base_url('public/img/portada1.jpg') ?>" class="d-block w-100" alt="...">
					</div>
					<div class="col-6">
						<p style="color:#FFFFFF";>Somos una fundacion  encargada de la adopcion, hogar de paso, centro veterinario y cuidado animal de todas las especies necesitadas de ayuda, promoviendo el cuidado animal en general. <br><br>
            Nos apoyamos con venta de productos y donativos que aportan a suplir los gastos economicos requeridos para el funcionamiento y cuidado de los animales. <br><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit a repellat nisi non tempora illo dolorum nostrum unde culpa! Voluptatibus corrupti perspiciatis quas architecto aperiam exercitationem sapiente assumenda! Est, in! <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed a mollitia similique, veritatis doloremque pariatur nulla modi sequi, exercitationem nam nesciunt est quia dolorum magni possimus ad quisquam, itaque sit. <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque qui et nulla fugit earum ullam error ipsum, quam dolorem, odio saepe exercitationem magnam neque soluta. Nihil facilis at rerum animi.</p>
					</div>
				</div>
			</div>
		</section>

		<section class ="mt-5">
			<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted "   >
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Siguenos en nuestras redes sociales.</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Proteccion de Datos:
          </h6>
          <p>
           Proteccion de datos personales en el municipio de medellin
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Ayudas
          </h6>
          <p>
            <a href="#!" class="text-reset">Alimentos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Medicamentos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Implementos de aseo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Voluntariado</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Horarios
          </h6>
          <p>
            <a href="#!" class="text-reset">Lunes a viernes 7:00am - 3:00pm</a>
          </p>
          <p>
            <a href="#!" class="text-reset">sabados 7:00 am - 2:30 pm</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Domingos y festivos 8:00 - 3:00 pm</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Medellin</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@casahogar.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</footer>
<!-- Footer -->
		</section>

	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>