<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">fondationigwabi@gmail.com</a>
        <i class="icofont-phone"></i> +243 81 174 8411
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- h1 class="logo mr-auto"><a href="{{route('home')}}"><span>.</span></a></h1 -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo mr-auto"><img src="{{ asset('images/logoWebp.net-resizeimage1.png') }}" alt="FondationdIgwabi"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="actived"><a href="{{route('home')}}">Accueil</a></li>
          <!--li><a href="">Mission</a></li>
          <li><a href="#services">Services</a></li-->
          <li><a href="{{route('about')}}">À propos</a></li>
          <!--li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
          
          <li><a href="{{ route('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->