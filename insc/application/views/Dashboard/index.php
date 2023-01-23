<?php
$this->load->view('comuns/header');
?>

	<body>
	 <?php
    	$this->load->view('comuns/menu');
  	?>

    <section class="home-section">

			<?php
        $this->load->view('comuns/nav');
      ?>


					<div class="home-content">
						<?php if(!$_SESSION['logged_in'] === FALSE): ?>
							<section>
						  	<div class="card-container">

						    	<div class="card cardDash">
						      	<div class="content">
						        	<h3 id="titleCard"><i class='bx bx-user'></i> Clientes</h3>
											<p><i class='bx bx-stats'></i><?php echo $clientsTotal;  ?></p>
						      	</div>
						    	</div>

						    	<div class="card cardDash">
						      	<div class="content">
						        	<h3 id="titleCard"><i class='bx bxs-analyse'></i> Ocorrências</h3>
											<p><i class='bx bx-stats'></i><?php echo $ocurrencesTotal ?></p>
						      	</div>
						    	</div>

						    	<div class="card cardDash">
						      	<div class="content">
						        	<h3 id="titleCard"><i class='bx bx-x' style="color: red;"></i>Ocorrências Fechadas</h3>
											<p><i class='bx bx-stats'></i><?php echo $ocurrencesClosedTotal ?></p>
						      	</div>
						    	</div>

						  	</div>
							</section>

						<?php else: ?>

							<div class="alert">
								<p>É necessário iniciares sessão para poderes aceder à aplicação</p>
							</div>

						<?php endif; ?>

					</div>



			</section>
<?php
$this->load->view('comuns/footer');
?>
