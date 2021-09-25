<?php
include "./components/header.php";
include "./components/navbar.php";
?>

		

		<!-- cover -->
		<section class="p-0 m-1" data-aos="zoom-in">
			<div class="container-full">
				<div class="swiper-container boxed text-white">
					<div class="swiper-wrapper">
						<div class="swiper-slide vh-80">
							<div class="image image-overlay" style="background-image:url(assets/images/demo/DSC_3634.jpg)"></div>
							<div class="caption">
								<div class="container">
									<div class="row justify-content-between vh-75">
										<div class="col-md-10 align-self-center text-center">
											<h1 class="display-2 text-shadow" data-swiper-parallax="-100%">Amazing <b id="typed"></b></h1>
											<div id="typed-strings">
											    <p>in pictures</p>
											    <p>art.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide vh-75">
							<div class="image" style="background-image:url(assets/images/demo/k2.jpg)"></div>
							<div class="caption" data-swiper-parallax="-100%">
								<div class="container">
									<div class="row vh-75">
										<div class="col align-self-end">
											<h1 class="text-shadow">Bold and Classy</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>
		<!-- / cover -->


		<!-- masonry -->
		<section class="p-0 m-1">
			<div class="container-full">
				<ul class="masonry row gallery gutter-1 mb-0">
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal">
						  <a href="./assets/images/demo/minimal/DSC_5212.jpg" 
						    style="background-image: url(./assets/images/demo/minimal/portfolio-1.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal equal-long">
						  <a href="./assets/images/portfolio-2.jpg" 
						    style="background-image: url(./assets/images/DSC_7733.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal">
						  <a href="./assets/images/demo/minimal/portfolio-5.jpg" 
						    style="background-image: url(./assets/images/demo/minimal/portfolio-3.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal equal-long">
						  <a href="./assets/images/demo/minimal/portfolio-4.jpg" 
						    style="background-image: url(./assets/images/demo/minimal/portfolio-4.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal equal-long">
						  <a href="./assets/images/demo/minimal/portfolio-5.jpg" 
						    style="background-image: url(./assets/images/demo/minimal/portfolio-5.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
					<li class="col-6 col-md-4" data-aos="zoom-in">
						<figure class="photo equal">
						  <a href="./assets/images/demo/minimal/portfolio-6.jpg"
						    style="background-image: url(./assets/images/demo/minimal/portfolio-6.jpg);">
						    <span class="photo-caption">
						      <span>Photo Caption</span>
						    </span>
						  </a>
						</figure>
					</li>
				</ul>
				<div class="row" style="margin-top: 5px;">
					<div class="col">
						<a href="" class="btn btn-block btn-light btn-lg text-center">
							Load More
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- / masonry -->

<?php
include './components/footer.php';
?>