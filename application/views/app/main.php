<section class="home-slider owl-carousel">

		<div class="slider-item" style="background-image:url(<?= base_url() ?>assets/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">"Pendidikan adalah bekal terbaik untuk perjalanan hidup."</h1>
						<p>- Aristoteles -</p>
						<!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">DAFTAR PPDB</a></p> -->
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(<?= base_url() ?>assets/images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">"Pendidikan adalah senjata paling ampuh yang bisa kamu gunakan untuk mengubah dunia."</h1>
						<p>- Nelson Mandela -</p>
						<!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">DAFTAR PPDB</a></p> -->
					</div>
				</div>
			</div>
		</div>

	</section>

	<style>
		.font-besar {
			font-size: 1.7em;
		}
	</style>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-12 ftco-animate">
					<a href="http://localhost:8080/admin_sdn_palampitan/<?= $sekolah['foto'] ?>" class="gallery img d-flex align-items-center"
						style="background-image: url(http://localhost:8080/admin_sdn_palampitan/<?= $sekolah['foto'] ?>); height: 500px !important; width: 90% !important; margin: 20px auto !important;">
					</a>
				</div>
				<!-- <div class="col-md-3 ftco-animate">
					<a href="<?= base_url() ?>assets/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(<?= base_url() ?>assets/images/image_2.jpg);">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?= base_url() ?>assets/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(<?= base_url() ?>assets/images/image_3.jpg);">
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?= base_url() ?>assets/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(<?= base_url() ?>assets/images/image_4.jpg);">
					</a>
				</div> -->
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>"<?= $sekolah['deskripsi'] ?>"</span></h2>
				</div>
			</div>
		</div>
	</section>

		<!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?= base_url() ?>assets/images/bg_3.jpg);" -->
	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(https://4.bp.blogspot.com/-Pw0wcmg5ff4/WdQ_yiLWfbI/AAAAAAAAAMs/cfLdFRMYUAoo-wY4C3a6J4rzlaHJjcJ7ACLcBGAs/s1600/IMG_20171004_094143.jpg;"
		data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
				<div class="col-md-6 align-items-stretch d-flex">
					<div class="img d-flex align-items-center w-100" style="background-image: url(http://localhost:8080/admin_sdn_palampitan/<?= $kepala_sekolah['foto'] ?>);">
						<!-- <div class="video justify-content-center">
							<a href="https://4.bp.blogspot.com/-uKv5K6OEDzI/WEI6rxbxPcI/AAAAAAAAAEg/F3ZL2k4qOyI0GBzjNJXSbYogMBdole3YACLcB/s1600/IMG_20161201_090912.jpg"
								class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="ion-ios-play"></span>
							</a>
						</div> -->
					</div>
				</div>
				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4">Kepala Sekolah</h2>
					<div class="row">
						<div class="col-4">
							<p>Nama</p>
						</div>
						<div class="col-8">
							<p><?= $kepala_sekolah['nama'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<p>NIK</p>
						</div>
						<div class="col-8">
							<p><?= $kepala_sekolah['NIP'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<p>Alamat</p>
						</div>
						<div class="col-8">
							<p><?= $kepala_sekolah['alamat'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>VISI</span></h2>
					<p class="font-besar"><?= $visi['konten'] ?></p>
					<br>
					<h2 class="mb-4"><span>MISI</span></h2>
					<ol class="text-center font-besar">
						<?php foreach($misi as $m): ?>
							<li> <?= $m['konten'] ?> </li>
						<?php endforeach; ?>
						<!-- <li>Melaksanakan pembelajaran dan bimbingan secara efektif, sehingga setiap siswa dapat berkembang secara optimal sesuai dengan potensi yang dimilikinya</li>
						<li>Mengembangkan dan menumbuhkan perilaku disiplin warga sekolah</li>
						<li>Membina siswa agar berperilaku santun untuk menuju sikap yang berakhlak mulia</li>
						<li>Membimbing dan mengembangkan bakat dan minat peserta didik</li>
						<li>Menanamkan dan menumbuhkan penghayatan terhadap ajaran agama</li> -->
					</ol>
				</div>
			</div>
		</div>
	</section>
