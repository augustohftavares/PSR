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
					<span class="dashboard">Dashboard</span>
				</div>

				<div class="search-box">
					<input type="text" placeholder="Procurar...">
					<i class="bx bx-search"></i>
				</div>

				<div class="profile-details">
					<img src="<?php echo base_url("assets/img/profileIMG.jpg")?>" alt="profile image" />
					<span class="admin_name">Augusto</span>
					<i class="bx bx-chevron-down"></i>
				</div>
			</nav>

			<div class="home-content">
		    </div>

		</section>
<?php
$this->load->view('comuns/footer');
?>