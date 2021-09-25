<?php
include "./components/header.php";
include "./components/navbar-light.php";
?>


   


    <!-- cover -->
    <section class="hero hero-with-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 data-swiper-parallax="-100%" class="display-3"><b>We do branding</b><br>And it's awesome.</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->


    <!-- works -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="nav nav-tabs">
              <a class="nav-item nav-link active" data-filter="all">All</a>
              <a class="nav-item nav-link" data-filter="branding">Branding</a>
              <a class="nav-item nav-link" data-filter="illustration">Illustration</a>
              <a class="nav-item nav-link" data-filter="photography">Photography</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-full">
        <div class="row">
          <div class="col">
            <ul class="row gutter-0 gallery filtr-container">
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, branding" data-sort="value">
                <figure class="photo equal">
                  <a href="./assets/images/demo/minimal/portfolio-1.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-1.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration" data-sort="value">
                <figure class="photo equal equal-long">
                  <a href="./assets/images/demo/minimal/portfolio-2.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-2.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography" data-sort="value">
                <figure class="photo equal">
                  <a href="./assets/images/demo/minimal/portfolio-3.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-3.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration" data-sort="value">
                <figure class="photo equal equal-long">
                  <a href="./assets/images/demo/minimal/portfolio-4.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-4.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, branding" data-sort="value">
                <figure class="photo equal equal-long">
                  <a href="./assets/images/demo/minimal/portfolio-5.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-5.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration, branding" data-sort="value">
                <figure class="photo equal">
                  <a href="./assets/images/demo/minimal/portfolio-6.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-6.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography" data-sort="value">
                <figure class="photo equal equal-long">
                  <a href="./assets/images/demo/minimal/portfolio-7.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-7.jpg);">
                  </a>
                </figure>
              </li>
              <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography, illustration" data-sort="value">
                <figure class="photo equal">
                  <a href="./assets/images/demo/minimal/portfolio-8.jpg" 
                    style="background-image: url(./assets/images/demo/minimal/portfolio-8.jpg);">
                  </a>
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> 
    <!-- / works -->


   

    <!-- user grid -->
    <!-- <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-10">
                <span class="eyebrow mb-2 text-primary">Team</span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quidem harum sapiente dolorem explicabo animi quo.</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <ul class="user-grid gutter-1">
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-1.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-2.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-3.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-4.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-5.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-6.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-7.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-8.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-9.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="user">
                      <div class="user-photo expand">
                        <img src="./assets/images/demo/user-10.jpg" alt="Avatar" >
                      </div>
                      <figcaption class="user-panel">
                        <div class="container">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8">
                              <span class="eyebrow">Designer</span>
                              <h4 class="h2">Valerie Doe</h4>
                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis quos ex temporibus dicta laudantium natus quas consequatur doloribus earum, sit a dolor ipsum, officia illum suscipit neque, maxime in.</p>
                            </div>
                            <div class="col-lg-4 text-white text-lg-right">
                              <ul class="socials bordered">
                                <li><a href="" class="icon-facebook fs-20"></a></li>
                                <li><a href="" class="icon-instagram fs-20"></a></li>
                                <li><a href="" class="icon-twitter fs-20"></a></li>
                                <li><a href="" class="icon-linkedin fs-20"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <span class="collapse"></span>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <a href="" class="anchor rounded">
                      <span>
                        <i class="icon-arrow-right2"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- / -->


    <?php
include './components/footer.php';
?>


    <script src="./assets/js/vendor.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>