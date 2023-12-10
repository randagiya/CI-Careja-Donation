<div class="container-fluid py-0">
	<div class="row text-center">
		<div class="col-15">
			<div class="card mb-3 text-center">
				<div class="card-body px-0 pt-2 pb-0">
					<div class="container-fluid">
						<div class="row">
							<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item">
										<div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1584515933487-779824d29309?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');">
											<span class="mask bg-gradient-dark"></span>
											<div class="container">
												<div class="row">
													<div class="col-lg-8 my-auto">
														<h4 class="text-white mb-0 fadeIn1 fadeInBottom">Bersama</h4>
														<h1 class="text-white fadeIn2 fadeInBottom">Kita Bisa</h1>
														<p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
															Saling membantu.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://pcr.ac.id/assets/media/slide_item/slide2021042808274180-1.jpg');">
											<span class="mask bg-gradient-dark"></span>
											<div class="container">
												<div class="row">
													<div class="col-lg-8 my-auto">
														<h4 class="text-white mb-0 fadeIn1 fadeInBottom">Politeknik Caltex Riau</h4>
														<h1 class="text-white fadeIn2 fadeInBottom">kampus kami tercinta</h1>
														<p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
															Kami bersama membantu masyarakat yang membutuhkan
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item active">
										<div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://www.anugrah.net/wp-content/uploads/2013/12/peduli.jpg');">
											<span class="mask bg-gradient-dark"></span>
											<div class="container">
												<div class="row">
													<div class="col-lg-8 my-auto">
														<h4 class="text-white mb-0 fadeIn1 fadeInBottom">Careja</h4>
														<h1 class="text-white fadeIn2 fadeInBottom">Website Donasi</h1>
														<p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Kami menerima
															dan menyalurkan donasi kepada yang membutuhkan.<br> WE Care and 'Kerja'</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="min-vh-75 position-absolute w-100 top-0">
										<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
											<span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
											<span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<?= $this->session->flashdata('message'); ?>
									</div>
									<div class="card-header pt-0 p-3 text-center">
										<div class="col-6 d-flex">
											<h5 class="text-center mb-0"><?php echo $judul; ?></h5>
										</div>
									</div>
									<?php $i = 1; ?>
									<?php foreach ($produk as $us) : ?>
												<?php if ($i++ >= 4) { ?>
													<div class="col-xl-3 col-md-4 mb-4  ">
														<div class="card border-left-primary shadow h-80 py-2 bg-gray-200">
															<div class="card-header align-items-center text-center bg-gray-200">
																<a href="javascript:;" class="d-block">
																	<img src="<?= base_url('assets/img/') . $us['gambar']; ?>" class="col-auto img-fluid border-radius-lg" style="height:150px">
																</a>
															</div>
															<div class="card-body pt-auto pb-auto">
																<div class="row no-gutters align-items-center">
																	<div class="col mr-1">
																		<div>
																			<h3>Lainnya >....</h3>
																			<br>
																			<br>
																			<br>
																		</div>
																	</div>
																	<div class="align-items-center">
																		<a class="btn btn-icon btn-2 btn-success" href="<?= base_url('Halaman/list') ?>" type="button">
																			<span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
																			Lainnya
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php break;
												} ?>
												<div class="col-xl-3 col-md-4 mb-4  ">
													<div class="card border-left-primary shadow h-80 py-2 bg-gray-200">
														<div class="card-header align-items-center text-center bg-gray-200">
															<a href="javascript:;" class="d-block">
																<img src="<?= base_url('assets/img/') . $us['gambar']; ?>" class="col-auto img-fluid border-radius-lg" style="height:150px">
															</a>
														</div>
														<div class="text-center" style="width: auto;">
															<div class="card-body pt-auto pb-auto">
																<div class="row no-gutters align-items-center">
																	<div class="col mr-1">
																		<div><?= $us['nama'] ?></div>
																		<div class="text-center tetxt-sm font-weight-bold text-gray-800">
																			<?= substr($us['keterangan'], 0, 200); ?>
																			<?php if (mb_strlen($us['keterangan']) >= 200) { ?>
																				.....
																			<?php } ?>
																		</div>
																	</div>
																</div>
															</div>
															<div class="align-items-center">
																<a class="btn btn-icon btn-2 btn-info" href="<?= base_url('Halaman/info/') . $us['id'] ?>" type="button">
																	<span class="btn-inner--icon"><i class="ni ni-zoom-split-in"></i></span>
																	Detail
																</a>
															</div>
														</div>
													</div>
												</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>