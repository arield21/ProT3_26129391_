<div class="container">
    <div class="card">
          USUARIO ING Featured Listado de Usuarios
        </div>
          <?php if(session('mensaje')){?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>En hora buena!!</strong> <?= session ('mensaje'); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php }?>
        <div class="card-body">
              <table class="table">
                    <thead>
                      <tr>
                          <th scope="col">id_usuario</th>
                          <th scope="col">nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">usuario</th>
                          <th scope="col">Accion</th>                          
                      </tr>
                    </thead>
                     <tbody>
                    <?php foreach ($datos as $dato): ?>                    
                      <tr>
                          <th scope="row"><?php echo $dato['id_usuario']; ?></th>
                          <td><?php echo $dato['nombre']; ?></td>
                          <td><?php echo $dato['apellido']; ?></td>
                          <td><?php echo $dato['usuario']; ?></td>
                          <td><a href="<?= base_url('/Home/edit/'.$dato['id_usuario']); ?>">Editar</a></td>   
                      </tr>
                      <?php endforeach; ?>  
                    </tbody>
              </table>
              <a href="<?= base_url('/Home/add'); ?>" class="btn btn-success">Nuevo</a>
        </div>
</div>
