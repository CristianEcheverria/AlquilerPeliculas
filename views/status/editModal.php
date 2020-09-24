<!-- Modal -->
<div class="modal fade" id="editStatus<?php echo $status->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=status&method=update" method="POST">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                        <h2 class="m-auto">Información del Estado</h2>
                    </div>
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $status->id ?>">

                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" value="<?php echo $status->name ?>" class="form-control" placeholder="Ej. status1">
                    </div>
                    <div class="form-group">
                        <label>Tipo de estado</label>
                        <input type="text" name="type_status_id" value="<?php echo $status->type_status_id ?>" class="form-control" placeholder="Ej. 1">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
  </div>
</div>