<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nueva Pelicula</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de Pelicula</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=movie&method=update" method="post">
					<input type="hidden" name="id" value="<?php echo $movie[0]->id ?>">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name"  value="<?php echo $movie[0]->name ?>" class="form-control" placeholder="Ej. name">
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" name="description"  value="<?php echo $movie[0]->description ?>" class="form-control" placeholder="Ej. description">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($user as $usuario) {
                            		if($usuario->id === $movie[0]->user_id) {
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
                            		if($status->id === $movie[0]->status_id) {
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