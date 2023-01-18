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


				<?php if($this->session->flashdata('error') == TRUE): ?>
					<div class="alert">
		  				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  				<?php echo $this->session->flashdata('error') ?>
					</div>
				<?php endif ?>

				<form id="formEditOcurrence" method="post" action="<?php echo base_url('update_ocurrence') ?>">

					<select id="status" name="status">
						<option value="<?php echo $ocurrences['status'] ?>"><?php echo $ocurrences['status'] ?></option>
						<option value="aberto">aberto</option>
						<option value="fechado">fechado</option>
						<option value="pendente">pendente</option>
					</select>

					<label for="nomeCliente">Cliente #<?php echo $ocurrences['id']?></label> 
					<input name="nomeCliente" id="nomeCliente" value="<?php echo $ocurrences['nomeCliente']?>" readonly/>

					<!-- -->

					<label for="tipoEquipa">Tipo de Equipamento</label> 
					<select id="tipoEquipa" name="tipoEquipa">
						<option value="<?php echo $ocurrences['tipoEquipa']?>"><?php echo $ocurrences['tipoEquipa']?></option>
						<option value="Tablet">Tablet</option>
						<option value="PC">PC</option>
						<option value="Notebook">Notebook</option>
						<option value="Telemóvel">Telemóvel</option>
						<option value="Consola">Consola</option>
						<option value="DataCenter">DataCenter</option>
						<option value="Outros">Outros</option>
					</select>

					<!-- -->

					<label for="marca">Marca</label>
					<input type="text" name="marca" id="marca" value="<?php echo $ocurrences['marca'] ?>" placeholder="Exemplo : Apple, Samsung, Acer, Asus, Google"/>

					
					<label for="modelo">Modelo</label>
					<input type="text" name="modelo" id="modelo" value="<?php echo $ocurrences['modelo'] ?>" placeholder="Exemplo: Iphone 14, Samsung Galaxy S22">

					<!-- -->

					<label for="backup">Backup</label>
					<select id="backup" name="backup">
						<option value="<?php echo $ocurrences['backup'] ?>"><?php echo $ocurrences['backup'] ?></option>
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="autorizaAbertura">Autoriza a abertura</label>
					<select id="autorizaAbertura" name="autorizaAbertura">
						<option value="<?php echo $ocurrences['autorizaAbertura'] ?>"><?php echo $ocurrences['autorizaAbertura'] ?></option>
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="pelicula">Película</label>
					<select id="pelicula" name="pelicula">
						<option value="<?php echo $ocurrences['pelicula'] ?>"><?php echo $ocurrences['pelicula'] ?></option>
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="pin">Equipamento tem pin/padrão</label>
					<input name="pin" id="pin" value="<?php echo $ocurrences['pin'] ?>" />

					<!-- -->

					<label for="acessorios">Acessórios</label>
					<input name="acessorios" id="acessorios" value="<?php echo $ocurrences['acessorios']?>" />

					<!-- -->

					<label for="anomalia">Anomalia</label>
					<textarea name="anomalia" id="anomalia" rows="5"><?php echo $ocurrences['anomalia'] ?></textarea>

					<!-- -->

					<label for="observacoes">Observações</label>
					<textarea name="observacoes" id="observacoes" rows="5"><?php echo $ocurrences['observacoes'] ?></textarea>


					<input type="hidden" name="id" value="<?php echo $ocurrences['id'] ?>" />

					<input type="submit" id="btnSubmit" value="Editar" />

				</form>

		  	</div>

</section>
<?php
$this->load->view('comuns/footer');
?>