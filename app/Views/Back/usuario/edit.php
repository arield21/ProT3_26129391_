<div class="container" > 
          <div class="card ">  
                <div class="card-header">
                Editar Usuarios
                </div>

                <?php if(session('mensaje')){?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Error!</strong> <?= session ('mensaje'); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php }?> 

            <form action="<?= base_url('/update') ?>" method="post">

                 <div class="card-body">
                      <div class="mb-3">
                          <label for="nombre" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="nombre" placeholder="ingrese nombre" name="nombre" value="<?= $dato['nombre']?>">
                      </div>
                      <div class="mb-3">
                          <label for="apellido" class="form-label">apellido</label>
                          <input type="text" class="form-control" id="apellido" placeholder="ingrese apellido" name="apellido" value="<?= $dato['apellido']?>">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="femail" name="email" class="form-control"  placeholder="name@algo.com" value="<?= $dato['email']?>">
                      </div>
                      <div class="mb-3">
                          <label for="usuario" class="form-label">usuario</label>
                          <input type="text" class="form-control" id="usuario" placeholder="ingrese usuario" name="usuario" value="<?= $dato['usuario']?>">
                      </div>
                      <div class="mb-3">
                          <label for="pass" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" placeholder="ingrese password" name="pass" value="<?= $dato['pass']?>">
                      </div>                      
                       <input type="submit" value="Editar" class="btn btn-success"> 
                       <input type="hidden" name="id" value="<?= $dato['id_usuario']?>" >
                       <a href="<?= base_url('Home'); ?>" class="btn btn-danger">Cancelar</a>                     
                </div>
            </form>
            <!--tengo me falta completar el boton editar y el boton eliminar -->
    </div>
  </div>
  