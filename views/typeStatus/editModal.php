<!-- Modal -->
<div class="modal fade" id="editTypeStatus<?php echo $type->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo de estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=typestatus&method=update" method="post">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                        <h2 class="m-auto">Información del Tipo de estado</h2>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $typeStatus[0]->id ?>">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ej. Pedro Perez" value="<?php echo $typeStatus[0]->name ?>">
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