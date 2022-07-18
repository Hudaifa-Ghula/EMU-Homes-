<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Emu Homes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">


</head>

<body>
    @if (null == Auth::user())
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">



        <h3 class="title-d">Log In & Sign Up</h3>
      </div> <hr>

      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <br>
        <h4>Login</h4> <br>

        <form method="POST" action="{{ route('login') }}" class="form-a">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="Type">Keyword</label>-->
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="ُEmail" name="email">
              </div>
            </div>
        </div>
        <div class="row">
            <br>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="Type">Type</label>-->
                <x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" class="form-control form-control-lg form-control-a" placeholder="Password"/>

              </div>
            </div>
          </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">

</div>
<div class="form-group mt-3">





</div>
<br>
<button class="btn btn-b">
    {{ __('Log in') }}
</button>
</form>
<br>
<hr>
<h4>Sign up</h4> <br>

<form method="POST" action="{{ route('register') }}" class="form-a">
  @csrf
  <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="city">City</label>-->
                <input name="name" type="text" class="form-control form-control-lg form-control-a" placeholder="Full name" required autofocus>
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="bedrooms">Bedrooms</label>-->
                <input type="email" name="email"class="form-control form-control-lg form-control-a" placeholder="Email" required>
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="garages">Garages</label>-->
                <input name="password" type="password" class="form-control form-control-lg form-control-a" placeholder="Password" required>
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="bathrooms">Bathrooms</label>-->
                <input type="password" name="password_confirmation" class="form-control form-control-lg form-control-a" placeholder="Retype Password" required>
              </div>
            </div>
<br>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <!--<label class="pb-2" for="price">Min Price</label>-->
                <input type="radio" id="gender" name="gender" value="Female" checked>
                <label for="gender">Female</label>
                <input type="radio" id="gender2" name="gender" value="Male">
                <label for="gender2">Male</label><br>
                <input type="text" name="contact" hidden value="{{null}}">
                <input type="file" name="image" value="{{asset('public/image')}}\default.jpg" hidden>

                <!--<input type="checkbox" id="agreement" name="agreement" value="Agreement">
                <label for="agreement">Agreement</label><br>--> <br>
              </div>
            </div>
        </div>
        <input type="text" name="role" value="3" hidden>

            <div class="col-md-6">
              <button type="submit" class="btn btn-b"> {{ __('Register') }}</button>
            </div>
            <br>
            <div class="col-md-6">
                <a href="\signup" > want to list a property? sign up as agent!</a>
              </div>
        </div>

</form>
{{-- @else <h3 class="title-d">Profile</h3>
</div> <hr>
<!-- =================================================== Profile ========================================================
-->

<h3 class="title-d">Profile</h3>
      </div> <hr>

      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <h4>Personal info</h4> <br>
{{Auth::user()->name}}
{{Auth::user()->email}}
{{Auth::user()->gender}}
 --}}

</div> </div>@endif</div>
  <div>
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      {{-- <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button> --}}
      <a class="navbar-brand text-brand" href="../"><img class ="cropped3" src="{{asset('public/image')}}\ico.ico" alt=""></a>


      <a class="navbar-brand text-brand" href="../"> Emu<span class="color-b">Homes</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <!---
          <li class="nav-item">
            <a class="nav-link " href="property-grid">Property</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single">Property Single</a>
              <a class="dropdown-item " href="blog-single">Blog Single</a>
              <a class="dropdown-item " href="agents-grid">Agents Grid</a>
              <a class="dropdown-item " href="agent-single">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact">Contact</a>
          </li>-->
        </ul>
      </div>
      @if (null !=Auth::user())
      <a href="../profile">
        <x-button type="button" class="btn btn-c " >
            <i class="bi bi-person"></i>

            </x-button>


          </a>
          @else
          <x-button type="button" class="btn btn-c navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" >
            <i class="bi bi-person"></i>

            </x-button>
      @endif




    </div>
  </nav>
</div>
<!-- End Header/Navbar -->
  {{$slot}}
  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">EmuHomes</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Emu Homes is the graduation project of team number 2, Department of Information Technoloy, EMU. 2022 Cyprus
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +90 533 856 55 26
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> Hodaifaghula@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!----
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!---<nav class="nav-footer">

            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>-->
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/i/flow/login">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EmuHomes</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')" class="dropdown-item d-flex align-items-center"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right"> </i>
                    {{ __('Log Out') }}

                </a>
            </form> --}}
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>
