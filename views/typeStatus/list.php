<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de tipo de estado</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de tipos de estado</h2>
			<a href="?controller=typestatus&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($typeStatus as $type): ?>
						<tr>
							<td><?php echo $type->id ?></td>
							<td><?php echo $type->name ?></td>
							<td>
								<a href="?controller=typestatus&method=edit&id=<?php echo $type->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<!--<button data-toggle="modal" data-target="#editTypeStatus<?php echo $type->id ?>" class="btn btn-success">EditarModal</button>-->
								<a href="?controller=typestatus&method=delete&id=<?php echo $type->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/typeStatus/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
