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
				<?php
					if($this->session->flashdata('success') == TRUE)
						echo $this->session->flashdata('success');
				?>

		  	</div>
</section>
<?php
$this->load->view('comuns/footer');
?>
