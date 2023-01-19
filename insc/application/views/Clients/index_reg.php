<?php
$this->load->view('comuns/header');
?>

	<body id="bodyLoginRegister">


		<div id="divLoginRegister">

			<h2>Crie a sua conta</h1>

			<?php if($this->session->flashdata('error') == TRUE): ?>
				<div class="alert">
		  			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		  			<?php echo $this->session->flashdata('error') ?>
				</div>
			<?php endif ?>

			<form action="<?php echo base_url("registar") ?>" method="post">


				<i class='bx bxs-user'></i>
				<label for="email">Nome</label>
		        <input type="text" id="email" name="nome" placeholder="Exemplo: Lino Nóbrega" />


		        <!-- -->

				<i class='bx bxs-envelope'></i>
				<label for="email">Email</label>
		        <input type="text" id="email" name="email" placeholder="exemplo@gmail.com" />

		        <!-- -->

		        <i class='bx bxs-phone'></i>
				<label for="telemovel">Telemóvel</label>
		        <input type="text" id="telemovel" name="telemovel" placeholder="Exemplo: 961893432" maxlength="9" />

		        <!-- -->


		        <i class='bx bx-lock-alt'></i>
				<label for="password">Password</label>
		        <input type="password" id="password" name="password" placeholder="***************" />

		        <!-- -->

		        <i class='bx bxs-lock-alt' ></i>
		        <label for="confirmpassword">Confirmar password</label>
		        <input type="password" id="confirmpassword" placeholder="***************" />

		        <button type="submit">Criar conta</button>

			</form>

			<a id="criarConta-link" href="<?php echo base_url("login")?>">
				<button>Entrar conta existente</button>
			</a>

		</div>


<?php
$this->load->view('comuns/footer');
?>
