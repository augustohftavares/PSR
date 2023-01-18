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

				<form id="formAddOcurrence" method="post" action="<?php echo base_url('save') ?>">

					<label for="nomeCliente">Cliente</label><span style="color: red;">*</span> 
					<select id="nomeCliente" name="nomeCliente">
						<option value="">Nenhum cliente selecionado</option>
						<?php foreach($clients as $option): ?>
							<option value="<?php echo $option['nome'] ?>">
								<?php echo $option['nome'] ?>
							</option>
						<?php endforeach; ?>
					</select>

					<!-- -->

					<label for="tipoEquipa">Tipo de Equipamento</label><span style="color: red;">*</span> 
					<select id="tipoEquipa" name="tipoEquipa">
						<option value="">Nenhum tipo de equipamento selecionado</option>
						<option value="Tablet">Tablet</option>
						<option value="PC">PC</option>
						<option value="Notebook">Notebook</option>
						<option value="Telemóvel">Telemóvel</option>
						<option value="Consola">Consola</option>
						<option value="DataCenter">DataCenter</option>
						<option value="Outros">Outros</option>
					</select>

					<!-- -->

					<label for="marca">Marca</label><span style="color: red;">*</span> 
					<input type="text" name="marca" id="marca" value="<?php echo set_value('marca')?>" placeholder="Exemplo : Apple, Samsung, Acer, Asus, Google"/>

					<!-- -->

					<label for="modelo">Modelo</label><span style="color: red;">*</span> 
					<input type="text" name="modelo" id="modelo" value="<?php echo set_value('modelo')?>" placeholder="Exemplo: Iphone 14, Samsung Galaxy S22">

					<!-- -->

					<label for="backup">Backup</label><span style="color: red;">*</span> 
					<select id="backup" name="backup">
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="autorizaAbertura">Autoriza a abertura</label><span style="color: red;">*</span> 
					<select id="autorizaAbertura" name="autorizaAbertura">
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="pelicula">Película</label>
					<select id="pelicula" name="pelicula">
						<option value="Não">Não</option>
						<option value="Sim">Sim</option>
					</select>

					<!-- -->

					<label for="pin">Equipamento tem pin/padrão</label>
					<input name="pin" id="pin" value="<?php echo set_value('pin')?>" />


					<!-- -->

					<label for="acessorios">Acessórios</label>
					<input name="acessorios" id="acessorios" value="<?php echo set_value('acessorios')?>" />

					<!-- -->

					<label for="anomalia">Anomalia</label>
					<textarea name="anomalia" id="anomalia" rows="5"></textarea>

					<!-- -->

					<label for="observacoes">Observações</label>
					<textarea name="observacoes" id="observacoes" rows="5">Sem observações.</textarea>

					<!-- -->

					<?php 
						$date = new DateTime();
						$dt= $date->format('Y-m-d H:i:s'); 
					?>
					<input class="inputs-all" type="hidden" id="data" name="data" value="<?php echo $dt ?>" />
					<input class="inputs-all" type="hidden" id="status" name="status" value="pendente" />

					<!-- -->

					<input type="submit" id="btnSubmit" value="Adicionar" />

				</form>

		  	</div>

</section>
<?php
$this->load->view('comuns/footer');
?>