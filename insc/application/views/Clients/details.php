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

					<div class="card">


						<ul id="list-details">

							<li id="list-content" style="color: #0000FF;">
								<i class='bx bx-user'></i>
								<?php echo $clients['nome'] ?>
							</li>

							<!-- -->

							<li id="list-content">
								<i class='bx bx-phone' ></i>
								<?php echo $clients['telemovel'] ?>
							</li>

							<!-- -->

							<li id="list-content">
								<i class='bx bxs-envelope' ></i>
								<?php echo $clients['email'] ?>
							</li>

							<!-- -->

							<li id="list-content">
								<i class='bx bx-right-arrow-alt'></i>
								<b>NIF:</b>
								<?php echo $clients['nif'] ?>
							</li>

							<!-- -->

							<li id="list-content">
								<i class='bx bx-right-arrow-alt'></i>
								<b>Total Faturado:</b>
								<?php echo $clients['total_faturado'] ?>
							</li>

							<!-- -->

							<li id="list-content">
								<i class='bx bx-right-arrow-alt'></i>
								<b>Total Lucro:</b>
								<?php echo $clients['total_lucro'] ?>
							</li>

						</ul>

					</div>

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
