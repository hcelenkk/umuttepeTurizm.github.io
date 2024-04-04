<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url() ?>"><h3> <i class="fa fa-bus" aria-hidden="true"></i> <b>Umuttepe Turizm</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="<?php echo base_url() ?>">Anasayfa</a></li>
			          <li><a href="<?php echo base_url() ?>tiket">Rezervasyon Yap</a></li>
			          <li class="menu"><a href="<?php echo base_url() ?>tiket/cektiket">Bilet Kontrol</a></li>
			          <?php if ($this->session->userdata('username')) { ?>
				      	<li class="menu-has-children"><a href="#">Merhaba, <?php echo $this->session->userdata(musteriAdi); ?></a>
						<ul>
							<li><a href="<?php echo base_url() ?>profile/profilesaya/<?php echo $this->session->userdata('musteriKodu') ?>"><i class="fas fa-id-card"></i> Profilim</a></li>
							<li><a href="<?php echo base_url() ?>profile/tiketsaya/<?php echo $this->session->userdata('musteriKodu') ?>"><i class="fas fa-ticket-alt"></i> tiketlerim</a></li>
							<li><a href="<?php echo base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
						</ul>
						</li>
				      <?php }else{ ?>  
				  	  <li class="menu wobble animated"><a href="<?php echo base_url() ?>login/Daftar">Kayıt Ol</a></li>
 					  <li><a href="<?php echo base_url() ?>login">Giriş Yap</a></li>
				  	  <?php } ?>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->	