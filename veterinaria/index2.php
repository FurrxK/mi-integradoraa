<?php
    session_start();
        include_once('modulos/enrutador.php');
        include_once('modulos/controlador.php');
        if($_SESSION['validada']==1){

        }else
        header("location: index.html");
        ?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>El potrillo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">



   <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">-->

    <!-- Font Awesome -->
     <!--<link href="css/all.min.css" rel="stylesheet">-->

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <!--<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />-->

    <link href="bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    
                </div>
            </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Veterinaria</span>ElPotrillo</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>Horas de servicio</h6>
                        <p class="m-0">7.00AM - 10.00PM</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email </h6>
                        <p class="m-0">veterinarioPotrillo@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3 border-right">
                        <h6>Contactanos</h6>
                        <p class="m-0">+52 919 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index2.php" class="nav-item nav-link active">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vacunas</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="?cargar=crearVacuna" class="dropdown-item">Registrar</a>
                            <a href="?cargar=inicioVacuna" class="dropdown-item">Consultar</a>
                            <a class="dropdown-item" onclick="window.open('reportes/reporte_vacunas.php')">Reportes</a>
                        </div>
                    </div>
                    
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Empleados</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a class="dropdown-item" href="?cargar=crearEmpleado">Registrar</a>
                            <a class="dropdown-item" href="?cargar=inicioEmpleado">Consultar</a>
                            <a class="dropdown-item" onclick="window.open('reportes/reporte_empleado.php')">Reportes</a>
                        </div>
                    </div>
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mascotas</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a class="dropdown-item" href="?cargar=crearMascota">Registrar</a>
                            <a class="dropdown-item" href="?cargar=inicioMascota">Consultar</a>
                            <a class="dropdown-item" onclick="window.open('reportes/reporte_mascota.php')">Reportes</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Historial Medico</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a class="dropdown-item" href="?cargar=crearHistorial">Registrar</a>
                            <a class="dropdown-item" href="?cargar=inicioHistorial">Consultar</a>
                            <a class="dropdown-item" onClick="window.open('reportes/reporte_medico.php')">Reportes</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Proveedor</a>
                        <div class="dropdown-menu rounded-0 m-0">
                        <a class="dropdown-item" href="?cargar=crearProveedor">Registrar</a>
                        <a class="dropdown-item" href="?cargar=inicioProveedor">Consultar</a>
                        <a class="dropdown-item" onClick="window.open('reportes/reporte_proveedor.php')">Reportes</a>
                        </div>
                    </div>               
                </div>
                      <!-- Nav Item - User Information -->
                      <span class="d-done btn-lg btn-primary px-3 d-lg-inline small"><a href="?cargar=cerrar">Cerrar sesion</a></span>
                        <div class="topbar-divider d-done d-sm-block"></div>


                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchdropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php if (@$_SESSION['validada']==1) {
                                echo"<span><label aling=right>".$_SESSION['nombre']."</label></span>";}?> </span>
                            </a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
                       

<section>
    <?php

    $enrutador = new enrutador();
    if($enrutador->validarGet(@$_GET['cargar'])){
        $enrutador->cargarVista($_GET['cargar']);
    }
    ?>
</section>

</div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-4 px-sm-5 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Veterinaria</span>ElPotrillo</h1>
                <p class="m-0"></p>
            </div>
            <div>
</div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Contactanos</h5>
                        <p>Calle Tonina, Ocosingo Chiapas, Mexico</p>
                        <p>+052 919 345 67890</p>
                        <p>veterinarioPotrillo@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><img src="icons/twitter.svg" alt="MDN" /></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><img src="icons/facebook.svg" alt="MDN" /></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><img src="icons/whatsapp.svg" alt="MDN" /></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><img src="icons/instagram.svg" alt="MDN" /></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                  
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                       
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">VeterinariaElPotrillo</a>. Todos los derechos reservados
                    <a class="text-white font-weight-bold" href="https://www.utselva.edu.mx">Equipo_6 3B-DSM UTS</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terminos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

     <!--cierre sesion-->
    
 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary back-to-top"><img src="icons/arrow-up-circle-fill.png" width="25" alt="MDN" /></a>



    <!-- JavaScript Libraries -->
   <script src="js/jquery-3.7.1.min.js"></script>
   <!-- <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>-->
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   <!-- <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>-->

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/sweetalert.min.js"></script>


    <script src="boostrap-5.3.0/js/popper.min.js"></script>
    <script src="boostrap-5.3.0/js/boostsrap.min.js"></script>

  <!--  <script src="js/sb-admin-2.min.js"></script>-->
   <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>