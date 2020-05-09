<style>
.dropdown-submenu {
  position: relative !important;
}

.dropdown-submenu .dropdown-menu {
  top: 0 !important;
  left: 100% !important;
  margin-top: -1px !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center px-4">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<!-- <form action="#" class="searchform order-lg-last">
			<div class="form-group d-flex">
				<input type="text" class="form-control pl-3" placeholder="Search">
				<button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
			</div>
		</form> -->
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="<?= base_url('Landing/index'); ?>" class="nav-link pl-0">Beranda</a></li>
				<li class="nav-item"><a href="<?= base_url('Landing/profil'); ?>" class="nav-link">Profil</a></li>
				<!-- <li class="nav-item"><a href="#" class="nav-link">Akademisi</a></li> -->
				<li class="nav-item"><a href="<?= base_url('Landing/dokumentasi'); ?>" class="nav-link">Dokumentasi</a></li>
				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Akademik<i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu nav-item px-2">
						<li><a href="<?= base_url('Landing/kurikulum') ?>">Kurikulum</a></li>
						<li><a href="<?= base_url('Landing/kalender') ?>">Kalender Akademik</a></li>
					</ul>
				</li>
				<!-- <li class="nav-item active"><a href="<?= base_url('Landing/ppdb'); ?>" class="nav-link">PPDB</a></li> -->

				<li class="nav-item dropdown active" id="ppdb-custom">
					<a href="#" class="dropdown-toggle nav-link" tabindex="-1" data-toggle="dropdown">PPDB</a>
					<ul class="dropdown-menu nav-item px-2">
						<?php 
							$tahun_sekarang = (int) date('Y', time());
						?>
						<?php for($i = 0; $i < 3; $i++): ?>
							<?php $tahun_satu = $tahun_sekarang + $i; ?>
							<?php $tahun_dua = $tahun_satu + 1 ?>

							<li class="dropdown-submenu submenu">
								<a href="#" class="sub"><?= $tahun_satu ?> / <?= $tahun_dua ?> <span class="caret"></span></a>
								<ul class="dropdown-menu px-2" id="sub-<?= $i ?>">
									<li><a href="<?= base_url('Landing/ppdb_informasi/' . $tahun_satu) ?>">Informasi</a></li>
									<li><a href="<?= base_url('Landing/ppdb_edaran/' . $tahun_satu) ?>">Edaran</a></li>
									<li><a href="<?= base_url('Landing/ppdb/' . $tahun_satu) ?>">Pendaftaran</a></li>
								</ul>
							</li>
						<?php endfor; ?>
					</ul>
				</li>

				<!-- begin of testing -->
				<!-- <li class="dropdown-submenu">
					<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
						<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
						<li class="dropdown-submenu">
							<a class="test" href="#">Another dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">3rd level dropdown</a></li>
								<li><a href="#">3rd level dropdown</a></li>
							</ul>
						</li>
					</ul>
				</li> -->
				<!-- end of testing -->

				<!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
			</ul>
		</div>
	</div>
</nav>