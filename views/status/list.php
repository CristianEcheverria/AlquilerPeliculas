<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de estados</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de estados</h2>
			<a href="?controller=status&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Tipo de estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($statuses as $status): ?>
						<tr>
							<td><?php echo $status->id ?></td>
							<td><?php echo $status->name ?></td>
							<td><?php echo $status->nameTypeStatus ?></td>
							<td>
								<a href="?controller=status&method=edit&id=<?php echo $status->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<!--<button data-toggle="modal" data-target="#editStatus<?php echo $status->id ?>" class="btn btn-success">EditarModal</button>-->
								<a href="?controller=status&method=delete&id=<?php echo $status->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/status/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
