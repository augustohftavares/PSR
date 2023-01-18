<?php
$this->load->view('comuns/header');
?>

	<body>
		<?php
            $this->load->view('comuns/menu');
        ?>
        
        <section class="home-section">
        	
	<nav>
		<div class="sidebar-button">
			<i class="bx bx-menu sidebarBtn"></i>
			<span class="dashboard">Detalhes Ocorrência #<?php echo $ocurrences['id'] ?></span>
		</div>

		

		<div class="profile-details">
			<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
			<span class="admin_name">Augusto</span>
			<i class="bx bx-chevron-down"></i>
		</div>
	</nav>

	<div class="home-content">

		<div class="card">

			<?php
				// DATE FORMAT
				$date = $ocurrences['data'];
				$convertDate = date("d/m/Y", strtotime($date));
			?>

			<ul id="list-details">

				<li id="list-content" style="color: #0000FF;">
					<i class='bx bx-user'></i>
					<?php echo $ocurrences['nomeCliente'] ?>
					<?php if($ocurrences['status'] == "pendente"):?>
						<span id="pendente"><i class='bx bx-time-five'></i> PENDENTE</span>
					<?php elseif($ocurrences['status'] == "aberto"): ?>
						<span id="aberto"><i class='bx bxs-folder-open'></i> ABERTO</span>
					<?php elseif($ocurrences['status'] == "fechado"):?>
						<span id="fechado"><i class='bx bx-window-close'></i> FECHADO</span>
					<?php endif ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-time'></i> 
					<?php echo $convertDate ?>
				</li>

				<!-- -->


				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Tipo de Equipamento:</b> 
					<?php echo $ocurrences['tipoEquipa'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Marca:</b> 
					<?php echo $ocurrences['marca'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Modelo:</b> 
					<?php echo $ocurrences['modelo'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Backup:</b> 
					<?php echo $ocurrences['backup'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Autoriza a abertura:</b> 
					<?php echo $ocurrences['autorizaAbertura'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Película:</b> 
					<?php echo $ocurrences['pelicula'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Pin/Padrão:</b> 
					<?php echo $ocurrences['pin'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-right-arrow-alt'></i>
					<b>Acessórios:</b> 
					<?php echo $ocurrences['acessorios'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-file'></i>
					<b>Anomalia:</b><br/>
					<?php echo $ocurrences['anomalia'] ?>
				</li>

				<!-- -->

				<li id="list-content">
					<i class='bx bx-file'></i>
					<b>Observações:</b><br />
					<?php echo $ocurrences['observacoes'] ?>
				</li>
			</ul>

		</div>

  	</div>

</section>
<?php
$this->load->view('comuns/footer');
?>