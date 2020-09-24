<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Categorías</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Categorías</h2>
			<a href="?controller=categories&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($categories as $category): ?>
						<tr>
							<td><?php echo $category->id ?></td>
							<td><?php echo $category->name ?></td>
							<td><?php echo $category->status ?></td>
							<td>
								<a href="?controller=categories&method=edit&id=<?php echo $category->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<!--<button data-toggle="modal" data-target="#editCategories<?php echo $category->id ?>" class="btn btn-success">EditarModal</button>-->
								<a href="?controller=categories&method=delete&id=<?php echo $category->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/categories/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
