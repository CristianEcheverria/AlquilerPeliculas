<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Estado</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del Estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=status&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ej. status1">
					</div>
					<div class="form-group">
						<label>Tipo de estado</label>
						<input type="text" name="type_status_id" class="form-control" placeholder="Ej. 1">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>