@extends('layout')

@section('content')

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <img src="{{ asset('/css/img/finallogo.png') }}">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Demo">Demo</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Services">Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Register">Register</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <a href="#">Login</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">your manager</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">The intelligent</span>
                                <div class="animated-info">
                                    <span class="animated-item">Planner</span>
                                    <span class="animated-item">Time manager</span>
                                    <span class="animated-item">Companion</span>
                                </div>
                        </h1>

                        <p>Using time effectively is a challenge. We are highly energetic in managing your time systemactically.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link"><i class="fas fa-rocket"></i> Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{ asset('/css/img/banner.png') }}" class="img-fluid" alt="svg image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Intelligent planner for your precious time</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('/css/img/project/project-image01.png') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('/css/img/project/project-image02.png') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('/css/img/project/project-image03.png') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('/css/img/project/project-image04.png') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('/css/img/project/project-image05.png') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="icon-container">
                    <img src="{{ asset('/css/img/creative.png') }}" width="80" height="70">
                  </div>
                  <h3>Lorem Title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa in, eligendi ullam iste. Ducimus consequuntur labore error, hic, perferendis molestiae?</p>
                </div>

                <div class="col-lg-6 col-12">
                  <div class="icon-container">
                    <img src="{{ asset('/css/img/laptop.png') }}" width="80" height="70">
                  </div>
                  <h3>Lorem Title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa in, eligendi ullam iste. Ducimus consequuntur labore error, hic, perferendis molestiae?</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-12">
                  <div class="icon-container">
                    <img src="{{ asset('/css/img/computer.png') }}" width="80" height="70">
                  </div>
                  <h3>Lorem Title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa in, eligendi ullam iste. Ducimus consequuntur labore error, hic, perferendis molestiae?</p>
                </div>

                <div class="col-lg-6 col-12">
                  <div class="icon-container">
                    <img src="{{ asset('/css/img/clock.png') }}" width="80" height="70">
                  </div>
                  <h3>Lorem Title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa in, eligendi ullam iste. Ducimus consequuntur labore error, hic, perferendis molestiae?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h1 align="center">Get Started</h1>
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, obcaecati, quaerat. Corporis id, expedita, necessitatibus reprehenderit accusamus aut quasi impedit sint voluptatibus vitae sunt ex?</p>
            <a href="#" class="btn submit-btn"><i class="far fa-hand-point-up"></i> Register</a>
          </div>
          <div class="col-md-2"></div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2019 UTime . All rights reserved</p>
                        <p class="copyright-text text-center">Developed by <a rel="nofollow" href="https://www.facebook.com/tooplate">KO9</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

@endsection