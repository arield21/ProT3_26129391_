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
                        <a class="nav-link  btn btn-dark text-light" aria-current="page" href="quienes_somos">Quienes Somos</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="acerca_de">Acerca de</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link btn btn-dark text-light" href="registro">Registrarse</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-dark text-light" href="login">ingresar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-dark " href="usuario_cuatro">Productos</a>
                      </li> 
                      <li class="nav-item dropdown pe-sm-1">              
                              <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu Admin</a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="listado">listado Usuarios</a></li>
                                    <li><a class="dropdown-item" href="add">Ingresar usuarios</a></li>
                                    <li><a class="dropdown-item" href="">Modificar Usuario</a></li>
                                    <li><a class="dropdown-item" href="">Eliminar Usuario</a></li>
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
                          <a class="nav-link  btn btn-dark text-light" aria-current="page" href="quienes_somos">Quienes Somos</a>
                      </li>
                      <li class="nav-item ">
                           <a class="nav-link btn btn-dark text-light" href="acerca_de">Acerca de</a>
                      </li>
                      <li class="nav-item">
                           <a class="nav-link btn btn-dark text-light" href="registro">Registrarse</a>
                      </li>
                      <li class="nav-item">
                           <a class="nav-link btn btn-dark text-light" href="login">ingresar</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link btn btn-dark text-light" aria-disabled="true">Desabilitado</a>
                      </li>           
                      <li class="nav-item dropdown pe-sm-1">              
                        <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" data-bs-toggle="dropdown" aria-expanded="false">Menu de Usuario</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Servicio Usuario 1 </a></li>
                              <li><a class="dropdown-item" href="#">Servicio Usuario 2 </a></li>
                              <li><a class="dropdown-item" href="#">Servicio Usuario 3 </a></li>
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
                    <a class="nav-link  btn btn-dark text-light" aria-current="page" href="quienes_somos">Quienes Somos</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link btn btn-dark text-light" href="acerca_de">Acerca de</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-dark text-light" href="registro">Registrarse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-dark text-light" href="login">ingresar</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link  btn btn-dark text-light" href="listado">Productos</a>
                      </li>     
                  <li class="nav-item dropdown pe-sm-1">              
                    <a class="nav-link dropdown-toggle btn btn-dark text-light" href="" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Servicio 1</a></li>
                      <li><a class="dropdown-item" href="#">Servicio 2</a></li>
                      <li><a class="dropdown-item" href="#">Servicio 3</a></li>
                      
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
