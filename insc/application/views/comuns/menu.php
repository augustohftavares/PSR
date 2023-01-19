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
		<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
			<li class="links">
				<a href="<?php echo base_url("sair") ?>" class="active">
					<i class='bx bx-log-in-circle'></i>
					<span class="links_name">Sair</span>
				</a>
		<?php endif; ?>
			</li>
	</ul>
</div>
