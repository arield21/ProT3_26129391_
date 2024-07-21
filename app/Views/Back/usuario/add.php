<div class="container" > 
          <div class="card ">  
                <div class="card-header">
                Agregar Usuarios
                </div>

                <?php if(session('mensaje')){?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>!</strong> <?= session ('mensaje'); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php }?>

            <form action="<?= base_url('/store') ?>" method="post">

                 <div class="card-body">
                      <div class="mb-3">
                          <label for="nombre" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="nombre" placeholder="ingrese nombre" name="nombre">
                      </div>
                      <div class="mb-3">
                          <label for="apellido" class="form-label">apellido</label>
                          <input type="text" class="form-control" id="apellido" placeholder="ingrese apellido" name="apellido">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="femail" name="email" class="form-control"  placeholder="name@algo.com">
                      </div>
                      <div class="mb-3">
                          <label for="usuario" class="form-label">usuario</label>
                          <input type="text" class="form-control" id="usuario" placeholder="ingrese usuario" name="usuario">
                      </div>
                      <div class="mb-3">
                          <label for="pass" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" placeholder="ingrese password" name="pass">
                      </div>                      
                       <input type="submit" value="Guardar" class="btn btn-success"> 
                       <!--<a href="<?= base_url('/Home'); ?>" class="btn btn-danger">Cancelar</a>-->
                </div>
            </form>
    </div>
  </div>
  <!--< ?= base_url('/alumno/add'); ? >-->