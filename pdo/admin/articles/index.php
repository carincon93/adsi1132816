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
	      		<li><a href="../../">Menú Principal</a></li>
	      		<li class="active">Módulo Artículo</li>
	      	</ol>
			<h4 class="text-uppercase">Módulo de Artículos</h4>
			<hr>
			<a href="add.php" class="btn btn-success">
				<i class="material-icons">add</i>
				Adicionar Artículo
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
					<th>Nombre</th>
					<th>Precio</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php $articles = showArticles($con); ?>
					<?php foreach ($articles as $key => $article): ?>
						<tr>
							<td><?= $article['id']?></td>
							<td><?= $article['nombre']?></td>
							<td>$ <?= number_format($article['precio'])?></td>
							<td>
								<a href="show.php?id=<?= $article['id'] ?>" class="btn btn-xs btn-simple"><i class="material-icons">search</i></a>
								<a href="edit.php?id=<?= $article['id'] ?>" class="btn btn-xs btn-simple"><i class="material-icons">edit</i></a>
								<button class="btn btn-xs btn-simple btn-delete" data-delete="<?= $article['id']?>"><i class="material-icons">delete</i></button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>

		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>