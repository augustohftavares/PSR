<?php
$this->load->view('comuns/header');
?>

	<body id="bodyLoginRegister">


		<div id="divLoginRegister">

			<h2>PSR LOGIN</h1>

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

			<form action="<?php echo base_url("entrar") ?>" method="post">

				<i class='bx bxs-envelope'></i>
				<label for="email">Email</label><span style="color: red;">*</span>
		    <input type="text" id="email" name="email" placeholder="example@gmail.com" />

		    <i class='bx bxs-lock-alt' ></i>
				<label for="password">Password</label><span style="color: red;">*</span>
		    <input type="password" id="password" name="password" placeholder="**********" />

		    <button type="submit">Entrar</button>

			</form>


			<a id="criarConta-link" href="<?php echo base_url("criar_conta")?>">
				<button>Criar conta</button>
			</a>
		</div>


<?php
$this->load->view('comuns/footer');
?>
