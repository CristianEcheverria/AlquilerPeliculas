<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Alquiler</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de Alquiler</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rental&method=update" method="post">
					<input type="hidden" name="id" value="<?php echo $rental[0]->id ?>">
					<div class="form-group">
						<label>Fecha de inicio</label>
						<input type="date" name="start_date" value="<?php echo $rental[0]->start_date ?>" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Fecha de fin</label>
						<input type="date" name="end_date"  value="<?php echo $rental[0]->end_date ?>"class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="text" name="total" value="<?php echo $rental[0]->total ?>" class="form-control" placeholder="Ej. Total1">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($user as $usuario) {
                            		if($usuario->id === $rental[0]->user_id) {
                            ?>
                                		<option selected value="<?php echo $usuario->id ?>"><?php echo $usuario->name ?></option>
                            <?php
                            		} else {
                            ?>
                                		<option value="<?php echo $usuario->id ?>"><?php echo $usuario->name ?></option>
                            <?php
                            		}
                            	} 
                            ?>
                        </select>
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($statuses as $status) {
                            		if($status->id === $rental[0]->status_id) {
                            ?>
                                		<option selected value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php
                            		} else {
                            ?>
                                		<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php
                            		}
                            	} 
                            ?>
                        </select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>