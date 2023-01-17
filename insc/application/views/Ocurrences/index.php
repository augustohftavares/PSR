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
			<span class="dashboard">Ocorrências</span>
		</div>

		<div class="search-box">
			<input id="searchbarOcurrence" type="text" placeholder="Procurar ocorrência..." onkeyup="search_o()">
			<i class="bx bx-search"></i>
		</div>

		<div class="profile-details">
			<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
			<span class="admin_name">Augusto</span>
			<i class="bx bx-chevron-down"></i>
		</div>
	</nav>

	<div class="home-content">

		<a id="btnAddOcurrence" href="<?php echo base_url("adicionar_ocurrencia") ?>"><i class='bx bxs-file-plus'></i> Ocorrência</a>
		<a id="btnSeeClosedOcurrence" href="<?php echo base_url("adicionar_ocurrencia") ?>"><i class='bx bx-window-close'></i> Fechadas</a>

		<?php 
			if($this->session->flashdata('success') == TRUE) 
				echo $this->session->flashdata('success');
			?>

		<table id="tableOcurrence">
			<thead>
				<tr>
					<th></th>
					<th>Cliente</th>
		            <th>Data</th>
		            <th>Tipo de Equipamento</th>
		            <th>Marca</th>
		            <th>Modelo</th>
		            <th>Status</th>
		            <th></th>
	            </tr>
			</thead>

			<tbody>

				<?php if($ocurrences == FALSE): ?>
					<tr id="trContent">
						<td>Não existe nenhuma ocorrência</td> 
						<td></td> 
						<td></td> 
						<td></td> 
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
				<?php else: ?>

				<?php foreach ($ocurrences as $row): ?>

					<tr id="trContent">
						<td>#<?php echo $row['id']?></td>
						<td><?php echo $row['nomeCliente']?></td>
						<td><?php echo $row['data']?></td>
						<td><?php echo $row['tipoEquipa']?></td>
						<td><?php echo $row['marca']?></td>
						<td><?php echo $row['modelo']?></td>
						<td>
							<?php if($row['status'] == "pendente"):?>
								<span id="pendente"><i class='bx bx-time-five'></i></span>
							<?php elseif($row['status'] == "aberto"): ?>
								<span id="aberto"><i class='bx bxs-folder-open'></i></span>
							<?php elseif($row['status'] == "fechado"):?>
								<span id="fechado"><i class='bx bx-window-close'></i></span>
							<?php endif ?>
						</td>
						<td>
                        	<a href="<?php echo $row['detail_url'] ?>"><i class='bx bxs-detail'></i></a>
                        	<a href="<?php echo $row['edit_url'] ?>"><i class='bx bxs-edit'></i></a>
                        	<a href="<?php echo $row['del_url'] ?>"onclick="return confirm('Pretendes mesmo eliminar esta Ocorrência ?');"><i class='bx bxs-trash'></i></a>
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