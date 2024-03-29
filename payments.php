<?php
include "./components/header.php";
include "./components/navbar.php";
?>




    <section class="p-0 bg-light">
      <div class="image image-overlay image-cover" style="background-image:url(./assets/images/demo/minimal/portfolio-bg-2.jpg)"
      data-top-top="transform: translateY(0px);" 
      data-top-bottom="transform: translateY(-250px);"></div>
      <div class="container">
        <div class="row justify-content-center align-items-end vh-50 mb-5">
          <div class="col col-md-10 col-lg-8">
            <div class="row align-items-center">
              <div class="col-4 col-lg-3">
                <img class="mr-3 avatar avatar-xl rounded" src="./assets/images/demo/user-2.jpg" alt="Generic placeholder image">
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="mb-0"><b>James</b> Doe</h2>
                    <span class="text-muted">Senior Visual Designer</span>
                  </div>
            
                  <div class="col-md-4 text-left text-md-right"> <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Log Out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light p-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-md-10 col-lg-8">
            <div class="nav nav-tabs mb-1">
              <!-- <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-1">Profile</a> -->
              <!-- <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-2">Connections</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-3">Groups</a> -->
              <!-- <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-4">Settings</a> -->
              <a class="nav-item nav-link active" data-toggle="tab" href="#demo-2-5">Payments</a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-light pt-2">

      <div class="container">
        <div class="tab-content" id="demo-2">

          <!-- tab info -->
          <div class="tab-pane" id="demo-2-1" role="tabpanel" aria-labelledby="demo-2-1">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                
                <!-- stats -->
                <!-- <div class="row gutter-1 mb-2">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed bg-primary text-white">
                        <div class="equal-header">
                          <b class="h2">89</b>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">friends</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                          <b class="h2">14</b>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">likes</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                          <b class="h2">9</b>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">articles</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                          <b class="h2">119</b>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">following</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- / stats -->

                <!-- post -->
                <!-- <div class="row mb-1">
                  <div class="col">
                    <article class="card">
                      <div class="card-header">
                        <div class="row align-items-center">
                          <div class="col-6">
                            <div class="media align-items-center">
                              <img class="avatar rounded mr-1" src="./assets/images/demo/user-2.jpg" alt="Image">
                              <div class="media-body">
                                <span class="mt-0">Michael Doe</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 text-right">
                            <small class="text-mute">2 hours ago</small>
                          </div>
                        </div>
                      </div>
                      <div class="card-body overflow-hidden">
                        <div class="owl-carousel gallery visible" data-items="[2,2]" data-margin="10" data-nav="true">
                          <figure class="photo equal equal-double">
                            <a href="./assets/images/demo/image-square-1.jpg" title="Image title">
                              <img src="./assets/images/demo/image-square-1.jpg" alt="Image">
                            </a>
                          </figure>
                          <figure class="photo equal equal-double">
                            <a href="./assets/images/demo/image-square-2.jpg" title="Image title">
                              <img src="./assets/images/demo/image-square-2.jpg" alt="Image">
                            </a>
                          </figure>
                          <figure class="photo equal equal-double">
                            <a href="./assets/images/demo/image-square-3.jpg" title="Image title">
                              <img src="./assets/images/demo/image-square-3.jpg" alt="Image">
                            </a>
                          </figure>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <a href="" class="btn btn-ico btn-sm rounded btn-outline-light text-red"><i class="icon-heart2 fs-22"></i></a>
                          </div>
                          <div class="col text-right">
                            <div class="dropdown">
                              <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-more-vertical fs-22"></i>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Make Primary</a>
                                <a class="dropdown-item" href="#">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div> -->
                <!-- / post -->

                <!-- post -->
                <div class="row">
                  <div class="col">
                    <article class="card">
                      <div class="card-header">
                        <div class="row align-items-center">
                          <div class="col-6">
                            <div class="media align-items-center">
                              <img class="avatar rounded mr-1" src="./assets/images/demo/user-2.jpg" alt="Image">
                              <div class="media-body">
                                <span class="mt-0">Michael Doe</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 text-right">
                            <small class="text-mute">2 hours ago</small>
                          </div>
                        </div>
                      </div>
                      <div class="card-body overflow-hidden">
                        <blockquote class="blockquote">
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <a href="" class="btn btn-ico btn-sm rounded btn-outline-light text-red"><i class="icon-heart2 fs-22"></i></a>
                          </div>
                          <div class="col text-right">
                            <div class="dropdown">
                              <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-more-vertical fs-22"></i>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                <a class="dropdown-item" href="#">Make Primary</a>
                                <a class="dropdown-item" href="#">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <!-- / post -->

              </div>
            </div>
          </div>
          <!-- / tab -->


          <!-- tab connections -->
          <div class="tab-pane" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row gutter-1">
                  <div class="col-md-4">
                    <figure class="user">
                      <a href="" class="user-photo">
                        <img src="./assets/images/demo/user-1.jpg" alt="Avatar">
                      </a>
                      <figcaption class="user-caption">
                        <h4>John Doe</h4>
                        <span>Senior Designer</span>
                        <ul class="socials bordered">
                          <li><a href="" class="icon-facebook fs-20"></a></li>
                          <li><a href="" class="icon-instagram fs-20"></a></li>
                          <li><a href="" class="icon-twitter fs-20"></a></li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="col-md-4">
                    <figure class="user">
                      <a href="" class="user-photo">
                        <img src="./assets/images/demo/user-2.jpg" alt="Avatar">
                      </a>
                      <figcaption class="user-caption">
                        <h4>James Doe</h4>
                        <span>Senior Designer</span>
                        <ul class="socials bordered">
                          <li><a href="" class="icon-facebook fs-20"></a></li>
                          <li><a href="" class="icon-instagram fs-20"></a></li>
                          <li><a href="" class="icon-twitter fs-20"></a></li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="col-md-4">
                    <figure class="user">
                      <a href="" class="user-photo">
                        <img src="./assets/images/demo/user-3.jpg" alt="Avatar">
                      </a>
                      <figcaption class="user-caption">
                        <h4>Valerie Doe</h4>
                        <span>Senior Designer</span>
                        <ul class="socials bordered">
                          <li><a href="" class="icon-facebook fs-20"></a></li>
                          <li><a href="" class="icon-instagram fs-20"></a></li>
                          <li><a href="" class="icon-twitter fs-20"></a></li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row gutter-1">
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="./assets/images/demo/user-5.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">Nicole Doe</h5>
                              <span class="text-muted">Senior UI Designer</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-3">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="./assets/images/demo/user-2.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">James Doe</h5>
                              <span class="text-muted">Senior UI Designer</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-4">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="./assets/images/demo/user-3.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">Violet Doe</h5>
                              <span class="text-muted">Senior UI Designer</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-5">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="./assets/images/demo/user-4.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">Valerie Doe</h5>
                              <span class="text-muted">Senior UI Designer</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-6">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="./assets/images/demo/user-6.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">Nick Doe</h5>
                              <span class="text-muted">Senior UI Designer</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-7">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab groups -->
          <div class="tab-pane" id="demo-2-3" role="tabpanel" aria-labelledby="demo-2-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                
                <div class="row gutter-2">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-6">
                            <img src="./assets/images/demo/logo/logo-2.png" alt="Image">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <h3 class="fs-20 font-weight-normal">Project Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="card-footer separator-top pt-3">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <ul class="user-list">
                              <li><img src="./assets/images/demo/user-1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                              <li><img src="./assets/images/demo/user-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Lucien"></li>
                              <li><img src="./assets/images/demo/user-5.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Ann Campbel"></li>
                            </ul>
                          </div>
                          <div class="col-4 text-right">
                            <div class="dropdown">
                              <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-more-vertical fs-22"></i>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-8">
                                <a class="dropdown-item" href="#">Make Primary</a>
                                <a class="dropdown-item" href="#">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-6">
                            <img src="./assets/images/demo/logo/logo-3.png" alt="Image">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <h3 class="fs-20 font-weight-normal">Project Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="card-footer separator-top pt-3">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <ul class="user-list">
                              <li><img src="./assets/images/demo/user-1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                              <li><img src="./assets/images/demo/user-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Lucien"></li>
                              <li><img src="./assets/images/demo/user-5.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Ann Campbel"></li>
                            </ul>
                          </div>
                          <div class="col-4 text-right">
                            <div class="dropdown">
                              <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-more-vertical fs-22"></i>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-9">
                                <a class="dropdown-item" href="#">Make Primary</a>
                                <a class="dropdown-item" href="#">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-6">
                            <img src="./assets/images/demo/logo/logo-5.png" alt="Image">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <h3 class="fs-20 font-weight-normal">Project Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="card-footer separator-top pt-3">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <ul class="user-list">
                              <li><img src="./assets/images/demo/user-1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                              <li><img src="./assets/images/demo/user-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Lucien"></li>
                              <li><img src="./assets/images/demo/user-5.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Ann Campbel"></li>
                            </ul>
                          </div>
                          <div class="col-4 text-right">
                            <div class="dropdown">
                              <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-more-vertical fs-22"></i>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-10">
                                <a class="dropdown-item" href="#">Make Primary</a>
                                <a class="dropdown-item" href="#">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab settings -->
          <div class="tab-pane" id="demo-2-4" role="tabpanel" aria-labelledby="demo-2-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">

                <div class="row mb-4">
                  <div class="col">
                    <div class="boxed">
                      <div class="row align-items-center justify-content-between p-3">
                        <div class="col-md-2 pb-2 pb-md-0 text-center">
                          <img src="./assets/images/demo/user-5.jpg" alt="Avatar" class="avatar avatar-lg rounded">
                        </div>
                        <div class="col-md-5 text-center text-md-left">
                          <h4 class="mb-0"><b>Valerie</b> Doe</h4>
                          <a href="" class="fs-14 link text-primary">Change Avatar</a>
                        </div>
                        <div class="col-md-4 text-center text-md-right mt-1 mt-md-0">
                          <a href="" class="btn btn-primary btn-rounded">Upgrade Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <h5 class="mb-2 fs-20 font-weight-normal">General Information</h5>
                    <form>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="email" class="form-control" id="firstName" aria-describedby="firstName" placeholder="John">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="secondName">Second Name</label>
                            <input type="email" class="form-control" id="secondName" aria-describedby="secondName" placeholder="Doe">
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="userMail">Email address</label>
                            <input type="email" class="form-control" id="userMail" aria-describedby="userMail" placeholder="johndoe@example.com">
                          </div>
                        </div>
                      </div>
                      <div class="form-row mt-1 align-items-center">
                        <div class="col-3">
                          <button class="btn btn-secondary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <h5 class="mb-2 fs-20 font-weight-normal">Profile Information</h5>
                    <form>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="userCity">City</label>
                            <input type="email" class="form-control" id="userCity" aria-describedby="userCity" placeholder="New York">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="userCountry">Country</label>
                            <input type="email" class="form-control" id="userCountry" aria-describedby="userCountry" placeholder="United States">
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="userTwitter">Twitter</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                              </div>
                              <input type="text" id="userTwitter" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="userTwitter">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">About</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-3">
                          <button class="btn btn-secondary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab payment -->
          <!-- <div class="tab-pane show active" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-3 col-md-2">
                          <img src="./assets/images/demo/stock/mastercard.png" alt="Image">
                        </div>
                        <div class="col-7 col-md-5">
                          <h5 class="fs-18 font-weight-normal mb-0">•••• •••• •••• 7041</h5>
                          <small>Exp: 08/20</small>
                        </div>
                        <div class="col-2 col-md-4 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-11">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="boxed p-3 mt-1">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-3 col-md-2">
                          <img src="./assets/images/demo/stock/visa.png" alt="Image">
                        </div>
                        <div class="col-7 col-md-5">
                          <h5 class="fs-18 font-weight-normal mb-0">•••• •••• •••• 7041</h5>
                          <small>Exp: 08/20</small>
                        </div>
                        <div class="col-2 col-md-4 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-12">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <div class="row align-items-center mb-2">
                  <div class="col-lg-6 text-center text-lg-left">
                    <h3 class="fs-22 font-weight-normal">New Payment Method</h3>
                  </div>
                  <div class="col-lg-6 text-center text-lg-right mt-1 mt-lg-0">
                    <div class="nav nav-switch">
                      <a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#pricing-first">Credit Card</a>
                      <a class="nav-item nav-link" id="second-tab" data-toggle="tab" href="#pricing-second">Bank Transfer</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="tab-content" id="myTabContent-2">
                      <div class="tab-pane show active" id="pricing-first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="boxed p-3">
                          <form>
                            <div class="form-row mb-1">
                              <div class="col">
                                <input type="text" class="form-control form-control-minimal" placeholder="Name on card">
                              </div>
                            </div>
                            <div class="form-row mb-1">
                              <div class="col">
                                <input type="text" class="form-control form-control-minimal" placeholder="0000-0000-0000-0000">
                              </div>
                            </div>
                            <div class="form-row mb-1">
                              <div class="col">
                                <input type="text" class="form-control form-control-minimal" placeholder="MM/YY">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control form-control-minimal" placeholder="CVV">
                              </div>
                            </div>
                            <div class="form-row mt-3">
                              <div class="col">
                                <button class="btn btn-primary">PAY</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane" id="pricing-second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="boxed p-3">
                          <form>
                            <div class="form-row">
                              <div class="col-8">
                                <input type="file" class="form-control form-control-minimal" placeholder="Upload Reciept">
                              </div>
                              <div class="col-4">
                                <button class="btn btn-primary btn-block">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col">
                    <div class="table-responsive-md">
                      <table class="table table-lined">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Order</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">July 20, 2021</th>
                            <td>#110</td>
                            <td>30000</td>
                          </tr>
                          <tr>
                            <th scope="row">July 20, 2021</th>
                            <td>#111</td>
                            <td>50000</td>
                          </tr>
                          <tr>
                            <th scope="row">July 22, 2021</th>
                            <td>#112</td>
                            <td>20000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->
        </div>
      </div>
    </section>



    <!-- footer -->
    <footer class="separator-top">
      <div class="container py-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 text-center text-md-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Legal Information</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 text-center">
            <img class="logo-sm" src="./assets/images/demo/logo/logo-dark.svg" alt="Logo">
          </div>
          <div class="col-md-5 text-center text-md-right">
            <ul class="socials">
              <li><a href="" class="icon-facebook text-facebook fs-20"></a></li>
              <li><a href="" class="icon-instagram text-instagram fs-20"></a></li>
              <li><a href="" class="icon-twitter text-twitter fs-20"></a></li>
              <li><a href="" class="icon-linkedin text-linkedin fs-20"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->




    <script src="./assets/js/vendor.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>