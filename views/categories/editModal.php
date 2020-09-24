<!-- Modal -->
<div class="modal fade" id="editCategories<?php echo $category->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=categories&method=update" method="post">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                        <h2 class="m-auto">Información del Usuario</h2>
                    </div>
                    <div class="card-body w-100">
                       <input type="hidden" name="id" value="<?php echo $categories[0]->id ?>">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" value="<?php echo $categories[0]->name ?>" class="form-control" placeholder="Ej. Terror">
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="status_id" class="form-control" value="<?php echo $categories[0]->status_id ?>">
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