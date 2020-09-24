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
				<form action="?controller=rental&method=save" method="post">
					<div class="form-group">
						<label>Fecha de inicio</label>
						<input type="date" name="start_date" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Fecha de fin</label>
						<input type="date" name="end_date" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="text" name="total" class="form-control" placeholder="Ej. Total1">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<input type="text" name="user_id" class="form-control" placeholder="Ej. usuario1">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>