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

						    	<div class="card">
						      	<img src="<?php echo base_url("assets/img/totalClients.png"); ?>"/>
						      	<div class="content">
						        	<h3>Clientes</h3>
											<p>
												<?php echo $clientsTotal;  ?>

											</p>
						      	</div>
						    	</div>

						    	<div class="card">
						      	<img src="<?php echo base_url("assets/img/ocorrencesTotal.jpg"); ?>"/>
						      	<div class="content">
						        	<h3>Ocorrências</h3>
											<p><?php echo $ocurrencesTotal ?></p>
						      	</div>
						    	</div>

						    	<div class="card">
						      	<img src="<?php echo base_url("assets/img/closedOtotal.jpg"); ?>"/>
						      	<div class="content">
						        	<h3>Ocorrências Fechadas</h3>
											<p><?php echo $ocurrencesClosedTotal ?></p>
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
