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

				<?php if(!$_SESSION['logged_in'] === FALSE): ?>

					<input type="text" id="searchbarClient" onkeyup="search_c();" placeholder="Procurar cliente..." />

					<?php
						if($this->session->flashdata('success') == TRUE)
							echo $this->session->flashdata('success');
					?>

					<table id="tableClient">
						<thead>
							<tr id="trHeader">
								<th></th>
								<th>Nome</th>
					            <th>NIF</th>
					            <th>Telemóvel</th>
					            <th>Email</th>
					            <th>Total Faturado<i class='bx bx-euro' style="color: green;"></i></th>
					            <th>Total Lucro<i class='bx bx-euro' style="color: green;"></i></th>
					            <th></th>
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
									<td><?php echo $row['total_faturado']?></td>
									<td><?php echo $row['total_lucro']?></td>
									<td>
										<a href="<?php echo $row['edit_url'] ?>"><i class='bx bxs-edit'></i></a>
										<a href="<?php echo $row['detail_url'] ?>"><i class='bx bxs-detail'></i></a>
									</td>
							    </tr>
							<?php endforeach ?>
							<?php endif ?>
						</tbody>
					</table>

				<?php else: ?>

					<div class="alert">
						<p>É necessário iniciares sessão para poderes aceder à aplicação</p>
					</div>

				<?php endif; ?>

		  	</div>


</section>
<?php
$this->load->view('comuns/footer');
?>
