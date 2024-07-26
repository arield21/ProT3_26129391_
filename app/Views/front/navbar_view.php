<!--se copia y se trabaja con una copia de navbar para acomodar los codigos de las secciones de uauarios logueados y no logueados en el navbar la copia --
  la copia que funciona antes del codigo se llama navbar_view12345 -->
<!-- navegacion -->
<?php 
  $session = session();
  $nombre= $session->get('nombre');
  $perfil=$session->get('perfil_id');
?>
<!------------->

<div class="container bg-dark  py-3 my-4 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Thirteenth navbar example">

          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
          </button>   
                   <?php if(session()->perfil_id == 1): ?>
                    <div class="btn btn-secondary active btnUser btn-sm">
                      <a href="">ADMIN: <?php echo session('nombre'); ?></a>
                    </div> 
     <div class="collapse navbar-collapse d-lg-flex mt-sm-3 mb-sm-3" id="navbarsExample11" >
          <a class="navbar-brand col-lg-3 me-0" href="#">  </a>        
               <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                      <li class="nav-item btn btn-outline-secondary pt-sm-2 pe-sm-3 ">
                        <a  href="<?php echo base_url('principal')?> " class="nav-link" ><img src="<?php echo base_url('assets/img/home2.jpg')?>" alt="principal" width="100" height="40" class=""></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link  btn btn-dark text-light" aria-current="page" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('acerca_de');?>">Acerca de</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('registro');?>">Registrarse</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('login');?>">ingresar</a>
                      </li>
                         <!--
                          me costo mucho enter la logica del ruteo, tuve errores para poder poder hacer el ruteo y me saco demasiado  tiempo para completar el trbajo puse como presentacion las vistas 
                         me hubiese gustado completar mejor pero no podia avanzar porque ingresando los codigos algo tenia algun conflicto
                          -->

                      <li class="nav-item dropdown pe-sm-1">              
                              <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu Productos</a>                              
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('/listado');?>">Productos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/add');?>">Ingresar Productos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/add');?>">Editar Productos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/listado');?>" >Editar/Eliminar Productos</a></li>
                                    <li><a class="nav-link text-dark" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a></li>       
                                  </ul>
                      </li>
                      <li class="nav-item dropdown pe-sm-1">              
                              <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu Admin</a>

                                <!-- puse como presentacion me hubiese gustado completar mejor pero ingresando los codigos 
                                  no podia avanzar porque algo tenia algun conflicto -->

                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('/listado');?>">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/add');?>">Ingresar Usuario</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/add');?>">Editar Usuario</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/listado');?>">Eliminar Usuarios</a></li>    
                                    <li><a class="nav-link text-dark" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a></li>       
                                  </ul>
                      </li>
                      <li class="nav-item d-lg-flex col-lg-4  ms-lg-1 ">             
                          <form role="search" >
                            <input class="form-control" type="search" placeholder="buscar" aria-label="sdfSearch">
                          </form>
                      </li>
                      <li class="nav-item">
                        <button class="btn btn-primary" type="search">Buscar</button>
                      </li>         
                </ul>


             <?php elseif (session()->perfil_id == 2): ?>
                   <div class="btn btn-info active btnUser btn-sm">
                    <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
                  </div>             

            <!-- Navbar para clientes que puedan comprar-->

           

        <div class="collapse navbar-collapse d-lg-flex mt-sm-3 mb-sm-3" id="navbarsExample11" >
            <a class="navbar-brand col-lg-3 me-0" href="#">  </a>        
               <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                      <li class="nav-item btn btn-outline-secondary pt-sm-2 pe-sm-3 ">
                        <a  href="<?php echo base_url('principal')?> " class="nav-link" ><img src="<?php echo base_url('assets/img/home2.jpg')?>" alt="principal" width="100" height="40" class=""></a>
                      </li>
                     <li class="nav-item ">
                        <a class="nav-link  btn btn-dark text-light" aria-current="page" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('acerca_de');?>">Acerca de</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('registro');?>">Registrarse</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('login');?>">ingresar</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('carrito_cliente');?>">promociones</a>
                      </li>           
                      <li class="nav-item dropdown pe-sm-1">              
                        <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu de Usuario</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="<?php echo base_url('carrito_cliente');?>">Servicio Usuario 1 </a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url('carrito_cliente');?>">Servicio Usuario 2 </a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url('carrito_cliente');?>">Servicio Usuario 3 </a></li>
                              <li><a class="nav-link text-dark" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a></li>
                          </ul>
                      </li>
                      <li class="nav-item d-lg-flex col-lg-4  ms-lg-1 ">             
                          <form role="search" >
                            <input class="form-control" type="search" placeholder="buscar" aria-label="Search">
                          </form>
                      </li>
                      <li class="nav-item">
                          <button class="btn btn-primary" type="search">Buscar</button>
                      </li>         
                </ul>

                    <!-- =========== -->

        </div>
        <?php else:?>

         <!-- navbar para clientes no logueados -->

    
        <div class="collapse navbar-collapse d-lg-flex mt-sm-3 mb-sm-3" id="navbarsExample11" >
             <a class="navbar-brand col-lg-3 me-0" href="#">  </a>        
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                  <li class="nav-item btn btn-outline-secondary pt-sm-2 pe-sm-3 ">
                    <a  href="<?php echo base_url('principal')?> " class="nav-link" ><img src="<?php echo base_url('assets/img/home2.jpg')?>" alt="principal" width="100" height="40" class=""></a>
                  </li>
                  <li class="nav-item ">
                        <a class="nav-link  btn btn-dark text-light" aria-current="page" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('acerca_de');?>">Acerca de</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('registro');?>">Registrarse</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('login');?>">ingresar</a>
                      </li>
                  <li class="nav-item">
                        <a class="nav-link  btn btn-dark text-light" href="<?php echo base_url('carrito');?>">Productos</a>
                      </li>     
                  <li class="nav-item dropdown pe-sm-1">              
                    <a class="nav-link dropdown-toggle btn btn-dark text-light" href="" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo base_url('carrito');?>">Productos</a></li>
                      <li><a class="dropdown-item" href="<?php echo base_url('carrito');?>">Productos 2</a></li>
                      <li><a class="dropdown-item" href="<?php echo base_url('carrito');?>">Productos 3</a></li> 
                      
                    </ul>
                   </li> 
                   <li class="nav-item d-lg-flex col-lg-4  ms-lg-1 ">             
                  <form role="search" >
                    <input class="form-control" type="search" placeholder="buscar" aria-label="Search">
                  </form>
                  </li>
                  <li class="nav-item">
                  <button class="btn btn-primary" type="search">Buscar</button>
                  </li>  
              </ul>
                   
        </div>
              <?php endif;?>
    </div>  
  </nav>
</div>
