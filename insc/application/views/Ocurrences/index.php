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
			<input id="searchbarOcurrence" type="text" placeholder="Procurar ocorrência..." onkeyup="search()">
			<i class="bx bx-search"></i>
		</div>

		<div class="profile-details">
			<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
			<span class="admin_name">Augusto</span>
			<i class="bx bx-chevron-down"></i>
		</div>
	</nav>

	<div class="home-content">

		<a class="btnAdd" href="<?php echo base_url("adicionar_ocurrencia") ?>">+ Ocorrência</a>
		<table id="tableOcurrence">
			<thead>
				<tr>
					<th>Cliente</th>
		            <th>Data</th>
		            <th>Tipo de Equipamento</th>
		            <th>Marca</th>
		            <th>Modelo</th>
		            <th></th>
	            </tr>
			</thead>


			<tbody>

				<?php if($ocurrences == FALSE): ?>
					<tr id="trContent">
						<td>Não existe nenhuma-</td>  
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
					</tr>
				<?php else: ?>

				<?php foreach ($ocurrences as $row): ?>

					<tr id="trContent">
						<td><?php echo $row['nomeCliente']?></td>
						<td><?php echo $row['data']?></td>
						<td><?php echo $row['tipoEquipa']?></td>
						<td><?php echo $row['marca']?></td>
						<td><?php echo $row['modelo']?></td>
						<td>
                        <a href="<?php echo $row['del_url'] ?>" onclick="return confirm('Pretendes mesmo eliminar este produto ?');"><i class='bx bxs-trash'></i></a>
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