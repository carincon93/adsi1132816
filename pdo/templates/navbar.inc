<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php if($_SESSION['urol'] == 'administrador'):?>
			<a href="<?= $base_url ?>administrador.php" class="navbar-brand">Inicio</a>
		<?php else:?>
			<a href="<?= $base_url ?>cliente.php" class="navbar-brand">Inicio</a>
		<?php endif?>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<?php if($_SESSION['urol'] == 'cliente'): ?>			
			<li class="shopping-nav">
				<a href="#"><i class="material-icons animated">shopping_cart</i></a>
			</li>
			<?php endif; ?>
			<li class="active">
				<a href="" class="text-capitalize">
					<?= $_SESSION['urol'] ?>
				</a>
			</li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<?= $_SESSION['unombres'] ?>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Mis datos</a></li>
					<?php if($_SESSION['urol'] == 'cliente'): ?>
						<li><a href="<?= $base_url ?>customer/history.php">Mis compras</a></li>
							<?php else: ?>
								<li><a href="<?= $base_url ?>admin/sales/">Mis ventas</a></li>
					<?php endif ?>
					<li><a href="<?= $base_url ?>exit.php">Cerrar sesión</a></li>
				</ul>			
			</li>

		</ul>
	</div>
</div>