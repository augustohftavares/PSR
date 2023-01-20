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

					<div id="divForms">
						<?php if($this->session->flashdata('error') == TRUE): ?>
							<div class="alert">
				  				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				  				<?php echo $this->session->flashdata('error') ?>
							</div>
						<?php endif ?>

						<h2>Editar Cliente #<?php echo $clients['id'] ?></h2>

	          <form id="formEditOcurrence" method="post" action="<?php echo base_url('update_client') ?>">

							<i class='bx bxs-user'></i>
	  					<label for="nome">Nome</label>
	  					<input name="nome" id="nome" value="<?php echo $clients['nome'] ?>" />

							<i class='bx bx-chevron-right'></i>
	            <label for="nif">NIF</label>
	  					<input name="nif" id="nif" value="<?php echo $clients['nif'] ?>" />

							<i class='bx bxs-phone'></i>
	            <label for="telemovel">Telemóvel</label>
	  					<input name="telemovel" id="telemovel" value="<?php echo $clients['telemovel'] ?>" />

							<i class='bx bxs-envelope'></i>
	            <label for="email">Email</label>
	  					<input name="email" id="email" value="<?php echo $clients['email'] ?>" />

	            <input type="hidden" name="id" value="<?php echo $clients['id'] ?>" />
	            <input type="hidden" name="id" value="<?php echo $clients['total_faturado'] ?>" />
	            <input type="hidden" name="id" value="<?php echo $clients['total_lucro'] ?>" />

	  					<input id="submitButton" type="submit" id="btnSubmit" value="Editar" />

	  				</form>
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
