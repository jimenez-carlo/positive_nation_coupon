      <header>
        <div class="top-bar bg-light hdden-xs">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 list-inline list-unstyled no-margin hidden-xs">
                <p class="no-margin">
                  Have any questions?
                  <strong>
                    +080 124 880
                  </strong>
                  or mail@codenpixel.com
                </p>
              </div>
              <div class="pull-right col-sm-6">
                <ul class="list-inline list-unstyled pull-right">
                  <li class="active">
                    <a href="#">
                      <i class="ti-cart">
                      </i>
                      Faq
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/login') }}">
                      Sign In
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/registration') }}">
                      Sign Up
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/cart') }}">
                      <i class="ti-shopping-cart">
                      </i>
                      Cart
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="nav-wrap">
          <div class="nav-wrap-holder">
            <div class="container" id="nav_wrapper">
              <nav class="navbar navbar-static-top nav-white" id="main_navbar" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
                    <span class="sr-only">
                      Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                  </button>
                  <a href="index.html" class="navbar-brand logo col-sm-3">
                    <img src="images/logo.png" alt="" class="img-responsive">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Navbar">
                  <!-- regular link -->
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="ti-home">
                        </i>
                        Home
                        <span class="caret">
                        </span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{ url('/index') }}">
                            Primary
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/index_2') }}">
                            Secondary
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Pages
                        <span class="caret">
                        </span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{ url('/details_2') }}">
                            Deal Page 1
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/details') }}">
                            Deal Page 2
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/results') }}">
                            Search Results
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/contact') }}">
                            Contact
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/faq') }}">
                            FAQ page
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/submit') }}">
                            Sumbit deal
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/registration') }}">
                            Registration
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/cart') }}">
                            Cart Page
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/checkout') }}">
                            Checkout
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/features') }}">
                            Shortcodes
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ url('/cart') }}">
                        Categories
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/results') }}">
                        Results
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/submit') }}">
                        Sumbit
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/contact') }}">
                        Contact
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <!-- /.div nav wrap holder -->
        </div>
        <!-- /#nav wrap -->
      </header>