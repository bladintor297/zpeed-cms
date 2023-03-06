@extends('layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/tech.png);">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container text-start " >
          <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="hero-title mb-1 text-warning">Zpeed Solutions</h1>
            <p align="justify" class="fs-4 mt-0 mb-2 hero-subtitle-1 "><em>We provide a seamless, more innovative communication experience delivered with passion, quality, and commitment.</em></p>
            <p class="hero-subtitle text-warning"><span class="typed" data-typed-items="Solution Provider, Software Provider, Network Specialist"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container my-2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            About Us
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
              <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3" data-aos="fade-right" data-aos-offset="50" data-aos-easing="ease-in-sine">
                  <h1 class="display-4 fw-bold lh-1">Know Something About Us at Zpeed Solutions</h1>
                  <p class="lead">
                      Zpeed Solutions Sdn Bhd was built around the idea to offer scalable and flexible infrastructure related 
                      solutions so that our customers can get on with their core businesses without worrying about day-to-day operations.
                  </p>
                  <div class="d-grid d-md-flex justify-content-md-end mb-4 mb-lg-3" data-aos="flip-down">
                    <button type="button" class="btn btn-warning rounded-pill btn-lg px-5 me-md-2 fw-bold">About Zpeed Solutions</button>
                  </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg" data-aos="fade-up" data-aos-offset="70" data-aos-duration="10000">
                    <img class="rounded-lg-3" src="{{ URL::asset('assets/img/about.jpg')}}" alt="" width="720">
                </div>
              </div>
          </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a ">
                        <span class="title-inside">
                          <a href="">Services</a>
                        </span>
                    </h3>
                    <p class="subtitle-a ">
                        We offer three main IT services.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row service-wrapper">
          <div class="col-md-4" data-aos="fade-down" data-aos-offset="50" data-aos-easing="ease-in-sine" href="#">
            <a href=""> {{-- href to IT --}}
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="bi bi-router"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">IT Specialization</h2>
                  <p align="justify" class="s-description text-center">
                    We offer wide range of IT specializations to all of our customers with 
                    end to end solutions for large enterprises and business units.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-offset="50" data-aos-easing="ease-in-sine">
            <a href=""> {{-- href to System Dev --}}
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="bi bi-code-slash"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">System Development</h2>
                  <p align="justify" class="s-description text-center">
                    Fully customized cross platform, responsive, native and hybrid apps using the 
                    latest technologies available in application development.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-offset="50" data-aos-easing="ease-in-sine">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Professional Services</h2>
                <p align="justify" class="s-description text-center">
                  Our in house Managed Services team are able to provide your needs in installation, 
                  configuration and optimization of your infrastructures.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    
    
    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/post-3.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Client Section ======= -->
    <section id="client" class="client-mf sect-pt4 route">

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                <a href="{{route('clients')}}" class="scrollto">Clients and Partners</a>
                @if (Auth::check())
                    <a href="/client">
                        <i class="bi bi-gear"></i>
                    </a>
                @endif
              </h3>
              <p class="subtitle-a">
                All of our clients and partners are VIPs.
            </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="title-box-2 pt-2 pt-md-0">
            <h5 class="title-left">
                Clients
            </h5>
        </div>
        <div class="row">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($clients as $client)
                        @if ($loop->first)
                          @if (Auth::check())
                              <div class="swiper-slide">
                                  <div class="testimonial-box">
                                      <div>
                                          <div class="client-box" >
                                              <button id="li-btn" data-bs-toggle="modal" data-bs-target="#addClient">
                                                  <div class="client-img">
                                                      <img src="assets/img/plus-icon.png" alt="" class="img-fluid add">
                                                  </div>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- End testimonial item -->
                          @endif
                        @endif

                        @if ($client->type === 'c')
                          <div class="swiper-slide">
                              <div class="testimonial-box">
                                  <div>
                                      <div class="client-box">
                                      <a href="assets/img/client/{{$client->image}}" data-gallery="clientGallery" class="client-lightbox">
                                          <div class="client-img">
                                          <img src="assets/img/client/{{$client->image}}" alt="" class="img-fluid">
                                          </div>
                                      </a>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- End testimonial item -->
                        @endif

                        
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <!-- Adding New Client -->
            <div class="modal fade" id="addClient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {!! Form::open(['action' => '\App\Http\Controllers\ClientController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="modal-header text-center">
                                <h5 class="modal-title" id="staticBackdropLabel">Add Client</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="name" placeholder="Client's Name" required>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="acronym" placeholder="Acronym" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input input class="form-control" name="image" type="file" id="formFile" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm">Add Client</button>
                            </div>
                            <input type="hidden" name="type" value="c">

                        {!! Form::close() !!}

                    </div>
                </div>
            </div> 
            
        </div>
          
          
      <div class="title-box-2 pt-0 pt-md-0">
        <h5 class="title-left">
            Partners
        </h5>
    </div>
    <div class="row">
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
              @foreach ($clients as $client)
                  @if ($loop->first)
                    @if (Auth::check())
                        <div class="swiper-slide">
                            <div class="testimonial-box">
                                <div>
                                    <div class="client-box" >
                                        <button id="li-btn" data-bs-toggle="modal" data-bs-target="#addPartner">
                                            <div class="client-img">
                                                <img src="assets/img/plus-icon.png" alt="" class="img-fluid add">
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    @endif
                  @endif

                  @if ($client->type === 'p')
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <div>
                                <div class="client-box">
                                <a href="assets/img/client/{{$client->image}}" data-gallery="clientGallery" class="client-lightbox">
                                    <div class="client-img">
                                    <img src="assets/img/client/{{$client->image}}" alt="" class="img-fluid">
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                  @endif

                  
              @endforeach
          </div>

          <div class="swiper-pagination"></div>
      </div>

      <!-- Adding New Partner -->
      <div class="modal fade" id="addPartner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  {!! Form::open(['action' => '\App\Http\Controllers\ClientController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
                      @csrf
                      <div class="modal-header text-center">
                          <h5 class="modal-title" id="staticBackdropLabel">Add Client</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="mb-3">
                              <div class="row">
                                  <div class="col-8">
                                      <input type="text" class="form-control" name="name" placeholder="Partner's Name" required>
                                  </div>
                                  <div class="col-4">
                                      <input type="text" class="form-control" name="acronym" placeholder="Acronym" required>
                                  </div>
                              </div>
                          </div>
                          <div class="mb-3">
                              <input input class="form-control" name="image" type="file" id="formFile" required>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-sm">Add Partner</button>
                      </div>
                      <input type="hidden" name="type" value="p">

                  {!! Form::close() !!}

              </div>
          </div>
      </div> 
  </div>
    </section><!-- End client Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/coding.png)">
      <div class="overlay-mf" ></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full" data-aos="fade-up"
              data-aos-easing="ease-in-back"
              data-aos-offset="50">
                <div class="row" >
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Us a Message
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded text-dark fw-bold">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="container mb-3">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">
                          Our Location
                        </h5>
                      </div>
                      <div class="more-info">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.2909853545607!2d101.611134950721!3d3.0162623547845953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb4a040434d3f%3A0x5bc25ff1e486b72b!2sZpeed%20Solutions%20Sdn.%20Bhd.!5e0!3m2!1sen!2smy!4v1677651845848!5m2!1sen!2smy" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <ul class="list-ico">
                          <li><span class="bi bi-geo-alt"></span> 3-30, Jalan Puteri 4/8, Bandar Puteri, 47100 Puchong, Selangor</li>
                          <li>
                              <span class="bi bi-phone"></span> (+603) 8066 7411 &nbsp;&nbsp;|
                              <span class="bi bi-printer ms-2"></span> (+603) 8066 4611
                          </li>
                          <li><span class="bi bi-envelope"></span> info@zpeed.com.my</li>
                        </ul>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
@endsection