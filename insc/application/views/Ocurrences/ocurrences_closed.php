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

				<a id="btnAddOcurrence" href="<?php echo base_url("adicionar_ocurrencia") ?>"><i class='bx bxs-file-plus'></i> Ocorrência</a>

				<?php 
					if($this->session->flashdata('success') == TRUE) 
						echo $this->session->flashdata('success');
					?>

				<table id="tableOcurrence">
					<thead>
						<tr id="trHeader">
							<th></th>
							<th>Cliente</th>
				            <th>Data</th>
				            <th>Tipo de Equipamento</th>
				            <th>Marca</th>
				            <th>Modelo</th>
				            <th>Status</th>
			            </tr>
					</thead>

					<tbody>

						<?php if($ocurrences == FALSE): ?>
							<tr id="trContent">
								<td>Nenhuma ocorrência foi fechada.</td> 
								<td></td> 
								<td></td> 
								<td></td> 
								<td></td> 
								<td></td> 
								<td></td> 
							</tr>
						<?php else: ?>

						<?php foreach ($ocurrences as $row): ?>

							<?php
								// DATE FORMAT
								$date = $row->data;
								$convertDate = date("d/m/Y", strtotime($date));
							?>

							<tr id="trContent">
								<td>#<?php echo $row->id ?></td>
								<td><?php echo $row->nomeCliente ?></td>
								<td><?php echo $convertDate ?></td>
								<td><?php echo $row->tipoEquipa ?></td>
								<td><?php echo $row->marca ?></td>
								<td><?php echo $row->modelo ?></td>
								<td>
									<?php if($row->status == "pendente"):?>
										<span id="pendente"><i class='bx bx-time-five'></i></span>
									<?php elseif($row->status == "aberto"): ?>
										<span id="aberto"><i class='bx bxs-folder-open'></i></span>
									<?php elseif($row->status == "fechado"):?>
										<span id="fechado"><i class='bx bx-window-close'></i></span>
									<?php endif ?>
								</td>
						    </tr>

						<?php endforeach ?>
					<?php endif ?>
					</tbody>	
				</table>
		  	</div>
</section>
<?php
$this->load->view('comuns/footer');
?>