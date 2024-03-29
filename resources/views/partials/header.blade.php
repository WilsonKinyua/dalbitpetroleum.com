  <!--=================================
    Header -->
  <header class="header header-sticky default">
      <div class="header-top d-none d-md-block ">
          <div class="container">
              <div class="row d-flex align-items-center">
                  <div class="col-xl-3">
                      <a class="navbar-brand " href="/">
                          <img class="" src="{{ asset('images/logo.png') }}" alt="logo">
                      </a>
                  </div>
                  <div class="col-xl-9 d-block d-md-flex justify-content-xl-end justify-content-center">
                      <div class="d-flex mr-3 mr-md-5">
                          <div class="social d-inline-block social-media-icons">
                              <ul class="list-unstyled">
                                  <li><a target="_blank" href="https://www.facebook.com/dalbitpetroleum"> <i
                                              class="fab fa-facebook-f"></i> </a></li>
                                  <li><a target="_blank" href="https://twitter.com/dalbitpetroleum"> <i
                                              class="fab fa-twitter"></i> </a></li>
                                  <li><a target="_blank" href="https://www.linkedin.com/company/dalbit/"> <i
                                              class="fab fa-linkedin-in"></i> </a></li>
                              </ul>
                          </div>
                      </div>
                      <div>
                          <ul class="nav navbar-nav">
                              <li class="nav-item">
                                  <a target="_blank" class="navbar-brand jcg" href="https://www.januscontinental.com/">
                                      <img class="" src="{{ asset('images/JCG.jpeg') }}" alt="logo">
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class="navbar navbar-static-top navbar-expand-xl main-color">
          <div class="container position-relative">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i
                      class="fas fa-align-left"></i></button>
              <a class="navbar-brand small-device-display" href="/">
                  <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="logo">
              </a>
              <div class="navbar-collapse collapse justify-content-end justify-content-xl-center ">
                  <ul class="nav navbar-nav">
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">About Us
                          </a>
                          <ul class="dropdown-menu megamenu  about-us-lg">
                              <li>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <h6 class="mb-0 mt-lg-1 nav-title">About us</h6>
                                          <p class="p-3">
                                              Established in 2002, Dalbit supplies and distributes petroleum products
                                              and
                                              services across East, Central and Southern Africa.
                                              <a href="{{ route('about.us') }}" class="btn btn-sm btn-primary mt-2">
                                                  Read More <br>
                                                  <i class="btn-icon change-on-hover"> Read More <i
                                                          class="fas fa-long-arrow-alt-right"></i></i>
                                              </a>
                                          </p>
                                      </div>
                                      <div class="col-sm-6">
                                          <h6 class="mb-0 mt-lg-1 nav-title">Who we are</h6>
                                          <ul class="list-unstyled mt-lg-1">
                                              <li><a class="dropdown-item" href="{{ route('about.us') }}"><span>About
                                                          Us</span></a></li>
                                              <li><a class="dropdown-item" href="{{ route('about.us') }}"><span>Our Purpose</span></a></li>
                                              {{-- <li><a class="dropdown-item" href="{{ route('about.us') }}"><span>Our
                                                          Vision
                                                          &
                                                          Mission</span></a></li>
                                              <li><a class="dropdown-item" href="{{ route('about.us') }}"><span>Our
                                                          Values</span></a></li> --}}
                                              <li><a class="dropdown-item"
                                                      href="{{ route('about.us') }}#partners"><span>Partners</span></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Divisions
                              <!-- <i class="fas fa-chevron-down fa-xs"></i> -->
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="{{ route('affiliates.division') }} "><span>Dalbit
                                          Affiliates</span></a>
                              </li>
                              <li><a class="dropdown-item" href="{{ route('trading.division') }} "><span>Dalbit
                                          Trading</span></a>
                              </li>
                              <li><a class="dropdown-item" href="{{ route('licensees.division') }} "><span>Dalbit
                                          Licensees</span></a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Social
                              Responsibility
                          </a>
                          <ul class="dropdown-menu megamenu dropdown-menu-lg">
                              <li>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <h6 class="mb-0 mt-lg-2 nav-title">Social Responsibility </h6>
                                          <p class="p-3">
                                              We believe that our investment in people and communities serves as a
                                              catalyst in unlocking the
                                              great potential of Africa.
                                              <a href="{{ route('social.responsibility') }}"
                                                  class="btn btn-sm btn-primary mt-2">
                                                  Read More
                                                  <i class="btn-icon change-on-hover"> Read More <i
                                                          class="fas fa-long-arrow-alt-right"></i></i>
                                              </a>
                                          </p>
                                      </div>
                                      <div class="col-sm-6">
                                          <h6 class="mb-0 mt-lg-2 nav-title text-capitalize">Our Pillars</h6>
                                          <ul class="list-unstyled mt-lg-1 ">
                                              <li><a class="dropdown-item word-capitalize"
                                                      href="{{ route('our.pillars', 'health') }}"><span>Health</span></a>
                                              </li>
                                              <li><a class="dropdown-item word-capitalize"
                                                      href="{{ route('our.pillars', 'education') }}"><span>Education</span></a>
                                              </li>
                                              <li><a class="dropdown-item word-capitalize"
                                                      href="{{ route('our.pillars', 'conservation') }}"><span>Conservation</span></a>
                                              </li>
                                              <li><a class="dropdown-item word-capitalize"
                                                      href="{{ route('our.pillars', 'community') }}"><span>Community</span></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="{{ route('careers.us') }}">Careers
                          </a>
                      </li>
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="{{ route('top.news') }}">Newsroom
                          </a>
                      </li>
                      <li class="dropdown nav-item">
                          <a class="nav-link" href="{{ route('contact.us') }}">Contact Us
                          </a>
                      </li>
                      <li class="dropdown nav-item header-search">
                          <div class="search">
                              <form action="{{ route('search.all') }}" method="POST">
                                  @csrf
                                  <div class="row no-gutters">
                                      <div class="col-md-11">
                                          <input type="text" class="not-click form-control search-button" name="search"
                                              placeholder="Search.." value="{{ $query ?? '' }}">
                                      </div>
                                      <div class="col-md-1">
                                          <i class="fa fa-search"></i>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
  <!--================================= end Header =========================== -->
