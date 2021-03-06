<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Alamat Sekolah</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Jl. Lambung Mangkurat RT 05 Desa Palampitan Hulu Kec. Amuntai Tengah Kab. Hulu Sungai utara 71419</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text"><?= $kontak['nomor_hp'] ?></span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text"><?= $kontak['email'] ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget mb-5 ml-md-4">
						<h2 class="ftco-heading-2">Halaman</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Beranda</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Profil</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Akademisi</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dokumentasi</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>PPDB</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<!-- <div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Subscribe Us!</h2>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div> -->
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2 mb-0">Terhubung dengan kami</h2>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://facebook.com/"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://instagram.com/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by
						<a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/aos.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url() ?>assets/js/scrollax.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url() ?>assets/js/google-map.js"></script> -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

	<script>
		$(document).ready(function(){

			$('#ppdb-custom').on('mouseover', function() {
				$('#sub-0').removeClass('show');
				$('#sub-1').removeClass('show');
				$('#sub-2').removeClass('show');
			});

			$('.dropdown-submenu a.submenu, li.submenu').on({
				mouseenter: function(e) {
					$(this).children('ul').toggle()
					// $(this).next('ul').toggle();
					e.stopPropagation();
					e.preventDefault();
				},
				mouseleave: function(e) {
					$(this).children('ul').toggle()
					// $(this).next('ul').toggle();
					e.stopPropagation();
					e.preventDefault();
				}
			});
		});
	</script>

</body>

</html>