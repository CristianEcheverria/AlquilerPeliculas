<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Alquiler</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Alquileres</h2>
			<a href="?controller=rental&method=new" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Fecha de início</th>
						<th>Fecha de fin</th>
						<th>Total</th>
						<th>Usuario</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($rentals as $rental): ?>
						<tr>
							<td><?php echo $rental->id ?></td>
							<td><?php echo $rental->start_date ?></td>
							<td><?php echo $rental->end_date ?></td>
							<td><?php echo $rental->total ?></td>
							<td><?php echo $rental->user ?></td>
							<td><?php echo $rental->status ?></td>
							<td>
								<a href="?controller=rental&method=edit&id=<?php echo $rental->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<!--<button data-toggle="modal" data-target="#editRental<?php echo $rental->id ?>" class="btn btn-success">EditarModal</button>-->
								<a href="?controller=rental&method=delete&id=<?php echo $rental->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
							<?php include 'views/rental/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
