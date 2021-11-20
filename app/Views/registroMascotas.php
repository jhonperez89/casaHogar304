<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
    <title>Document</title>
</head>
<body style="background-color:#9E9AC7;">
<header>
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
          <a class="nav-link fuente" aria-current="page" href="<?=site_url('/') ?>">Home</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link fuente" aria-current="page" href="<?=site_url('/productos/registros') ?>">registrar productos</a>
        </li>
        
       
      </ul>
      <a class="btn btn-primary" href="<?= site_url('/mascotas/listado')  ?>">ver inventario</a>

    </div>
  </div>
</nav>
	</header>

<h2 style="color:#FFFFFF";>Registro De Mascotas</h2>
    <form action="<?= site_url('/mascotas/registros/nuevo')?>" method="POST" class="mt-4">
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  name="mascota" placeholder="producto: ">
                      <label for="floatingInput">Nombre</label>
                </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="foto"  placeholder="fotografia">
                        <label for="floatingPassword">Fotografia</label>
                    </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="raza" placeholder="precio unidad">
                       <label for="floatingPassword">edad</label>
                      </div>
                        <div class="form-floatin mb-3">
                           <textarea class="form-control" name="descripcion" placeholder="Leave a comment here"  style="height: 100px"></textarea>
                          <label for="floatingTextarea2"></label>
                        </div>
                          <div class="form-floating mb-3">
                            <select class="form-select" name="tipo" aria-label="">
                                <option selected>Tipo de Animal</option>
                                 <option value="1">Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Caballo</option>
                                 <option value="5">Reptil</option>
                              </select>
                               <label for="floatingSelect"></label>
                            </div>
                          <button type="submit"  class="btn btn-primary">Registrar</button>
            </div>
            <div class="col-6">
            <img src="<?= base_url('public/img/ffpp.jpg') ?>" class="d-block w-100" alt="...">
            
					</div>
        </div>
    </div>
    </form>


    <section class ="mt-5">
			<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted ">
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

    <section>
 <php if(session('mensaje')):?>
  <div class="modal fade" id="modal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fondoPrincipal text- white">
        <h5 class="modal-title" >Casa Hogar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5><?=session('mensaje') ?></h5>
      </div>
      
    </div>
  </div>
</div>
  <?php unset($_SESSION['mensaje']); ?>
  <php endif ?>
</section>
   


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>