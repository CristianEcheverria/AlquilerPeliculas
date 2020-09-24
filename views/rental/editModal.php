<!-- Modal -->
<div class="modal fade" id="editRental<?php echo $rental->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=rental&method=update" method="POST">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                        <h2 class="m-auto">Información de renta</h2>
                    </div>
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $rental->id ?>">
                    <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="date" name="start_date" value="<?php echo $rental->start_date ?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Fecha de fin</label>
                        <input type="date" name="end_date"  value="<?php echo $rental->end_date ?>"class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" name="total" value="<?php echo $rental->total ?>" class="form-control" placeholder="Ej. Total1">
                    </div>
                    <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="user_id" class="form-control" value="<?php echo $rental->user_id ?>">
                        </div>
                    <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="status_id" class="form-control" value="<?php echo $rental->status_id ?>">
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