  <!-- Header
  ============================================= -->
  <header id="header">
      <div class="container">
          <div class="header-row">
              <div class="header-column justify-content-start">
                  <!-- Logo
          ============================= -->
                  <div class="logo mr-2"> <a class="d-flex" href="/" title="Lisocache logo" style="height: 85px; width : 150px"><img
                              src="{{ asset('images/logo.png') }}" alt="Lisocash" /></a> </div>
                  <!-- Logo end -->
                  <!-- Collapse Button
          ============================== -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                      <span></span> <span></span> <span></span> </button><!-- Collapse Button end -->

                  <!-- Primary Navigation
          ============================== -->
                  <nav class="primary-menu navbar navbar-expand-lg">
                      <div id="header-nav" class="collapse navbar-collapse">
                          <ul class="navbar-nav mr-auto">
                            @auth
                                <li><a href="{{ route('home') }}">Acceuil</a></li>
                            @endauth
                              <li><a href="{{ route('about') }}">A propos</a></li>
                              <li><a href="{{ route('contact') }}">Contact</a></li>
                              @auth
                              <li><a href="{{ route('profile') }}">Mon profil</a></li>
                              @endauth
                              {{-- <li><a href="about-us.html">About Us</a></li>
                              <li><a href="fees.html">Fees</a></li>
                              <li><a href="help.html">Help</a></li>
                              <li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                              href="#">Headers</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="index.html">Light Version (Default)</a>
                                              </li>
                                              <li><a class="dropdown-item" href="feature-header-dark.html">Dark
                                                      Version</a></li>
                                              <li><a class="dropdown-item" href="feature-header-primary.html">Primary
                                                      Version</a></li>
                                              <li><a class="dropdown-item" href="index-2.html">Transparent Version</a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                              href="#">Navigation DropDown</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="index.html">Light Version (Default)</a>
                                              </li>
                                              <li><a class="dropdown-item"
                                                      href="feature-navigation-dropdown-dark.html">Dark Version</a></li>
                                              <li><a class="dropdown-item"
                                                      href="feature-navigation-dropdown-primary.html">Primary
                                                      Version</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                              href="#">Second Navigation</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="send-money.html">Default Version</a>
                                              </li>
                                              <li><a class="dropdown-item" href="deposit-money.html">Alternate
                                                      Version</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page
                                              Headers</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item"
                                                      href="feature-page-header-left-alignment.html">Left Alignment</a>
                                              </li>
                                              <li><a class="dropdown-item"
                                                      href="feature-page-header-center-alignment.html">Center
                                                      Alignment</a></li>
                                              <li><a class="dropdown-item" href="feature-page-header-light.html">Light
                                                      Version</a></li>
                                              <li><a class="dropdown-item" href="feature-page-header-dark.html">Dark
                                                      Version</a></li>
                                              <li><a class="dropdown-item"
                                                      href="feature-page-header-primary.html">Primary Version</a></li>
                                              <li><a class="dropdown-item"
                                                      href="feature-page-header-custom-background.html">Custom
                                                      Background</a></li>
                                              <li><a class="dropdown-item"
                                                      href="feature-page-header-custom-background-with-transparent-header.html">Custom
                                                      Background 2</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                              href="#">Footer</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="index.html">Light Version Default</a>
                                              </li>
                                              <li><a class="dropdown-item" href="index-2.html">Alternate Version</a>
                                              </li>
                                              <li><a class="dropdown-item" href="feature-footer-dark.html">Dark
                                                      Version</a></li>
                                              <li><a class="dropdown-item" href="feature-footer-primary.html">Primary
                                                      Version</a></li>
                                          </ul>
                                      </li>
                                      <li><a class="dropdown-item" href="feature-layout-boxed.html">Layout Boxed</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                                  <ul class="dropdown-menu">
                                      <li>
                                          <div class="dropdown-mega-content">
                                              <div class="row">
                                                  <div class="col-lg-3"> <span class="sub-title">Homepage</Span>
                                                      <ul class="dropdown-mega-submenu">
                                                          <li><a class="dropdown-item" href="index.html">Home Version
                                                                  1</a></li>
                                                          <li><a class="dropdown-item" href="index-2.html">Home
                                                                  Version 2</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="landing-page-send.html">Landing Page - Send</a>
                                                          </li>
                                                          <li><a class="dropdown-item"
                                                                  href="landing-page-receive.html">Landing Page -
                                                                  Receive</a></li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-lg-3"> <span class="sub-title">Account</Span>
                                                      <ul class="dropdown-mega-submenu">
                                                          <li><a class="dropdown-item" href="profile.html">My
                                                                  Profile</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="profile-cards-and-bank-accounts.html">Cards &
                                                                  Bank Accounts</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="profile-notifications.html">Notifications</a>
                                                          </li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Login</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="login.html">Login
                                                                          Page 1</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="login-2.html">Login Page 2</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="login-3.html">Login Page 3</a></li>
                                                              </ul>
                                                          </li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Signup</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item"
                                                                          href="signup.html">Signup Page 1</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="signup-2.html">Signup Page 2 </a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="signup-3.html">Signup Page 3 </a></li>
                                                              </ul>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-lg-3"> <span class="sub-title">Dashboard</Span>
                                                      <ul class="dropdown-mega-submenu">
                                                          <li><a class="dropdown-item"
                                                                  href="dashboard.html">Dashboard</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="transactions.html">Transactions</a></li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Send Money</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item"
                                                                          href="send-money.html">Send Money</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="send-money-confirm.html">Send Money
                                                                          Confirm</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="send-money-success.html">Send Money
                                                                          Success </a></li>
                                                              </ul>
                                                          </li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Request Money</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item"
                                                                          href="request-money.html">Request Money</a>
                                                                  </li>
                                                                  <li><a class="dropdown-item"
                                                                          href="request-money-confirm.html">Request
                                                                          Money Confirm</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="request-money-success.html">Request
                                                                          Money Success </a></li>
                                                              </ul>
                                                          </li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Deposit Money</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item"
                                                                          href="deposit-money.html">Deposit Money</a>
                                                                  </li>
                                                                  <li><a class="dropdown-item"
                                                                          href="deposit-money-confirm.html">Deposit
                                                                          Money Confirm</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="deposit-money-success.html">Deposit
                                                                          Money Success </a></li>
                                                              </ul>
                                                          </li>
                                                          <li class="dropdown"><a
                                                                  class="dropdown-item dropdown-toggle"
                                                                  href="#">Withdraw Money</a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item"
                                                                          href="withdraw-money.html">Withdraw Money</a>
                                                                  </li>
                                                                  <li><a class="dropdown-item"
                                                                          href="withdraw-money-confirm.html">Withdraw
                                                                          Money Confirm</a></li>
                                                                  <li><a class="dropdown-item"
                                                                          href="withdraw-money-success.html">Withdraw
                                                                          Money Success </a></li>
                                                              </ul>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-lg-3"> <span class="sub-title">Others</Span>
                                                      <ul class="dropdown-mega-submenu">
                                                          <li><a class="dropdown-item" href="about-us.html">About
                                                                  Us</a></li>
                                                          <li><a class="dropdown-item" href="fees.html">Fees</a></li>
                                                          <li><a class="dropdown-item" href="help.html">Help</a></li>
                                                          <li><a class="dropdown-item" href="contact-us.html">Contact
                                                                  Us</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="elements.html">Elements</a></li>
                                                          <li><a class="dropdown-item" href="elements-2.html">Elements
                                                                  2</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </li> --}}
                          </ul>
                      </div>
                  </nav>
                  <!-- Primary Navigation end -->
              </div>

              <div class="header-column justify-content-end">
                  <!-- Login & Signup Link
          ============================== -->
                  <nav class="login-signup navbar navbar-expand">
                      <ul class="navbar-nav">
                          @auth()
                              <li><a href="javascript:void(0)" class="btn btn-outline-danger"
                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                          class="ti-power-off "></i>Déconnexion</a></li>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                  @csrf
                              </form>
                          @else
                              <li><a href="{{ route('login') }}" class="btn btn-success">Se connecter</a> </li>
                              @if (Route::has('register'))
                                  <li class="align-items-center h-auto ml-sm-3">
                                      <a class="btn btn-primary d-none d-sm-block"
                                          href="{{ route('signup') }}">S'inscrire</a>
                                  </li>
                              @endif
                          @endauth
                      </ul>
                  </nav>
                  <!-- Login & Signup Link end -->
              </div>
          </div>
      </div>
  </header>
  <!-- Header End -->

  @yield('second-menu')
