<div class="sidebar">

	<div class="logo-details">
		<i class="bx bx-loader bx-spin-hover"></i>
		<span class="logo_name bx-tada-hover">PSR</span>
	</div>

	<ul class="nav-links">
		<li class="links">
			<a href="<?php echo base_url("dashboard") ?>" class="active">
				<i class="bx bx-grid-alt"></i>
				<span class="links_name">Dashboard</span>
			</a>
		</li>
		<li class="links">
			<a href="<?php echo base_url("clientes") ?>" class="active">
				<i class="bx bx-user"></i>
				<span class="links_name">Clientes</span>
			</a>
		</li>
		<li class="links">
			<a href="<?php echo base_url("ocorrencias") ?>" class="active">
				<i class='bx bxs-analyse'></i>
				<span class="links_name">Ocorrências</span>
			</a>
		</li>

		<?php if($_SESSION['logged_in'] === false) : ?>
			<li class="links">
				<a href="<?php echo base_url("login") ?>" class="active">
					<i class='bx bx-log-in'></i>
					<span class="links_name">Entrar</span>
				</a>
			</li>

			<li class="links">
				<a href="<?php echo base_url("criar_conta") ?>" class="active">
					<i class='bx bxs-user-account' ></i>
					<span class="links_name">Criar Conta</span>
				</a>
			</li>
		<?php endif ?>

		<?php if($_SESSION['logged_in'] === true) : ?>
			<li class="links">
				<a href="<?php echo base_url("sair") ?>" class="active link-logout" onclick="return confirm('Pretendes mesmo terminar sessão ?');">
					<i class='bx bx-log-in-circle'></i>
					<span class="links_name">Sair</span>
				</a>
			</li>
		<?php endif ?>


	</ul>
</div>
