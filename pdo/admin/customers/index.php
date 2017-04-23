<?php
	require '../../config/app.php';
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../templates/header.inc';
	include '../../templates/navbar.inc';
?>

<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
	      		<li><a href="<?=$base_url?>administrador.php">Menú Principal</a></li>
	      		<li class="active">Módulo Cliente</li>
	      	</ol>
			<h4 class="text-uppercase">Módulo de Clientes</h4>
			<hr>
			<a href="add.php" class="btn btn-success">
				<i class="material-icons">add</i>
				Adicionar Cliente
			</a>
			<br>
			<?php if (isset($_SESSION['message_action'])): ?>				
			<div class="alert alert-success">
			    <div class="container-fluid">
				  <div class="alert-icon">
					<i class="material-icons">check</i>
				  </div>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons">clear</i></span>
				  </button>
			      <b>Aviso:</b><?= $_SESSION['message_action'] ?>
			    </div>
			</div>
				<?php unset($_SESSION['message_action']); ?>
			<?php endif ?>
			<table class="table table-hover">
				<thead>
					<th>ID</th>
					<th>Nombres</th>
					<th>Correo</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php $customers = showCustomers($con); ?>
					<?php foreach ($customers as $key => $customer): ?>
						<tr>
							<td><?= $customer['id']?></td>
							<td><?= $customer['nombres']?></td>
							<td><?= $customer['correo']?></td>
							<td>
								<a href="show.php?id=<?= $customer['id'] ?>" class="btn btn-xs btn-simple"><i class="material-icons">search</i></a>
								<a href="edit.php?id=<?= $customer['id'] ?>" class="btn btn-xs btn-simple"><i class="material-icons">edit</i></a>
								<button class="btn btn-xs btn-simple btn-delete" data-delete="<?= $customer['id']?>"><i class="material-icons">delete</i></button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>

		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>