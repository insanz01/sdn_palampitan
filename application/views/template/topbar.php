<div class="bg-top navbar-light">
		<div class="container-fluid">
			<div class="row no-gutters d-flex align-items-center align-items-stretch">
				<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="<?= base_url('Landing') ?>">SDN. <span>Palampitan</span></a>
				</div>
				<div class="col-lg-8 d-block">
					<div class="row d-flex">
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span>
							</div>
							<div class="text">
								<span>Informasi / Pertanyaan</span>
								<span>muhammadriyadhi08@gmail.com</span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<div class="text">
								<span>Hubungi kami</span>
								<span>Whats App: + 1235 2355 98</span>
							</div>
						</div>
						<div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0">
								<?php if(!$mendaftar): ?>
								<a href="<?= base_url('Landing/ppdb') ?>" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
									<span>REGISTRASI PPDB</span>
								</a>
								<?php endif; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>