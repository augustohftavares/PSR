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
			<span class="dashboard">Adicionar Ocorrência</span>
		</div>

		

		<div class="profile-details">
			<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
			<span class="admin_name">Augusto</span>
			<i class="bx bx-chevron-down"></i>
		</div>
	</nav>

	<div class="home-content">


		<?php if($this->session->flashdata('error') == TRUE): ?>
			<div class="alert">
  				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  				<?php echo $this->session->flashdata('error') ?>
			</div>
		<?php endif ?>

		<form id="formAddOcurrence" method="post" action="<?php echo base_url('save') ?>">

			<label for="cliente">Cliente <span style="color: red;">*</span></label>
			<select class="inputs-all" id="cliente" name="cliente">
				<option value="">Nenhum cliente selecionado</option>
				<?php foreach($clients as $option): ?>
					<option value="<?php echo $option['nome'];?>">
						<?php echo $option['nome']; ?>
					</option>
				<?php endforeach ?>
			</select>

			<label for="teamType">Tipo de Equipamento <span style="color: red;">*</span></label>
			<select class="inputs-all" id="teamType" name="teamType">
				<option value="Tablet">Tablet</option>
				<option value="PC">PC</option>
				<option value="Notebook">Notebook</option>
				<option value="Telemóvel" selected>Telemóvel</option>
				<option value="Consola">Consola</option>
				<option value="DataCenter">DataCenter</option>
				<option value="Outros">Outros</option>
			</select>

			<label for="marca">Marca <span style="color: red;">*</span></label>
			<input class="inputs-all" id="marca" name="marca" value="<?php echo set_value('marca')?>" placeholder="Insira a marca"/>

			<label for="modelo">Modelo <span style="color: red;">*</span></label>
			<input class="inputs-all" id="modelo" name="modelo" value="<?php echo set_value('modelo')?>" placeholder="Insira o modelo"/>

			<label for="backup">Backup <span style="color: red;">*</span></label>
			<select class="inputs-all" id="backup" name="backup">
				<option value="Sim">Sim</option>
				<option value="Não" selected>Não</option>
			</select>


			<label for="autorizaAbertura">Autoriza a abertura <span style="color: red;">*</span></label>
			<select class="inputs-all" id="autorizaAbertura" name="autorizaAbertura">
				<option value="Sim">Sim</option>
				<option value="Não" selected>Não</option>
			</select>

			<label for="pelicula">Película <span style="color: red;">*</span></label>
			<select class="inputs-all" id="pelicula" name="pelicula">
				<option value="Sim">Sim</option>
				<option value="Não" selected>Não</option>
			</select>

			<label for="teamPin">Equipamento tem pin/padrão <span style="color: red;">*</span></label>
			<input class="inputs-all" id="teamPin" name="teamPin" value="<?php echo set_value('pin')?>" placeholder=""/>

			<label for="acessorios">Acessórios <span style="color: red;">*</span></label>
			<input class="inputs-all" id="acessorios" name="acessorios" value="<?php echo set_value('acessorios')?>" placeholder=""/>

			<label for="anomalia">Anomalia <span style="color: red;">*</span></label>
			<textarea class="inputs-all" rows="7" id="anomalia" name="anomalia" placeholder=""></textarea>


			<label for="observacoes">Observações</label>
			<textarea class="inputs-all" rows="7" id="observacoes" name="observacoes">Sem observações.</textarea>

			<?php 
				$date = new DateTime();
				$dt= $date->format('Y-m-d H:i:s'); 
				echo $dt;
			?>
			<input class="inputs-all" type="hidden" id="id" name="id" />
			<input class="inputs-all" type="hidden" id="data" name="data" value="<?php echo $dt ?>" />
			<input class="input-submit" type="submit" value="Adicionar" />

		</form>
  	</div>

</section>
<?php
$this->load->view('comuns/footer');
?>