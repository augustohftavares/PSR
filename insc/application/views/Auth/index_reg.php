<?php
$this->load->view('comuns/header');
?>

	<body id="bodyLoginRegister">


		<div id="divLoginRegister">

			<h2>Crie a sua conta</h1>

			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors() ?>
				</div>
			<?php endif; ?>

			<?php if (isset($error)) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $error ?>
					</div>
			<?php endif; ?>

			<form action="<?php echo base_url("registar") ?>" method="post">


				<i class='bx bxs-user'></i>
				<label for="email">Nome</label><span style="color: red;">*</span>
		        <input type="text" id="email" name="nome" placeholder="Exemplo: Lino Nóbrega" />

		        <!-- -->

				<i class='bx bxs-envelope'></i>
				<label for="email">Email</label><span style="color: red;">*</span>
		        <input type="text" id="email" name="email" placeholder="exemplo@gmail.com" />

		        <!-- -->

		        <i class='bx bxs-phone'></i>
				<label for="telemovel">Telemóvel</label><span style="color: red;">*</span>
		        <input type="text" id="telemovel" name="telemovel" placeholder="Exemplo: 961893432" maxlength="9" />

		        <!-- -->


		        <i class='bx bx-lock-alt'></i>
				<label for="password">Password</label><span style="color: red;">*</span>
		        <input type="password" id="password" name="password" placeholder="***************" />

		        <!-- -->

		        <i class='bx bxs-lock-alt' ></i>
		        <label for="password_confirm">Confirmar password</label><span style="color: red;">*</span>
		        <input type="password" id="password_confirm" name="password_confirm" placeholder="***************" />

		        <button type="submit">Criar conta</button>

			</form>

			<a id="criarConta-link" href="<?php echo base_url("login")?>">
				<button>Entrar conta existente</button>
			</a>

		</div>


<?php
$this->load->view('comuns/footer');
?>
