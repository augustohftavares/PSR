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
			<span class="dashboard">Clientes</span>
		</div>

		<div class="search-box">
			<input id="searchbarClient" type="text" placeholder="Procurar cliente..." onkeyup="search_c()">
			<i class="bx bx-search"></i>
		</div>

		<div class="profile-details">
			<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
			<span class="admin_name">Augusto</span>
			<i class="bx bx-chevron-down"></i>
		</div>
	</nav>

	<div class="home-content">

		<table id="tableClient">
			<thead>
				<tr>
					<th></th>
					<th>Nome</th>
		            <th>NIF</th>
		            <th>Telemóvel</th>
		            <th>Email</th>
		            <th>Total Faturado</th>
		            <th>Total Lucro</th>
	            </tr>
			</thead>

			<tbody>

				<?php if($clients == FALSE): ?>
					<tr id="trContent">
						<td>Não existe nenhum cliente</td>
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
						<td>-</td>  
					</tr>
				<?php else: ?>

				<?php foreach ($clients as $row): ?>
					<tr id="trContent">
						<td>#<?php echo $row['id']?></td>
						<td><?php echo $row['nome']?></td>
						<td><?php echo $row['nif']?></td>
						<td><?php echo $row['telemovel']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['total_faturado']?> EUR</td>
						<td><?php echo $row['total_lucro']?> EUR</td>
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