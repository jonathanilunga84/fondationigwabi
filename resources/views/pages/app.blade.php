@extends('layout.app')

@section('title')
    Fondation Igwabi
@endsection


@section('contenu')
  <style>
  </style>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center tp">
        <div class="container" data-aos="zoom-out1" data-aos-delay="100">
            <h1>Bienvenue A la <span> FONDATION IGWABI AVEC DIEU NOUS FERONS DES EXPLOITS (FI-ADEX)</spa></h1>
            <!--h2>avec DIEUX nous ferons des exploits</h2-->
            <!-- h2>vous étes a la bonne place et a l'heure qu'il faut</h2-->
            <div class="d-flex">
                <a href="#appropo" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
        </div>
  </section><!-- End Hero section -->

  <main id="main">
    <!-- ======= Autres photos Accueil Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="post" class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('images/accueil_img1.jpeg') }}" alt="">
              <!--div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
              </p-->
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="post" class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('images/accueil_img2.jpeg') }}" alt="">
              <!--div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
              </p-->
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="post" class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('images/accueil_img3.jpeg') }}" alt="">
              <!--div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
              </p-->
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="post" class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <img src="{{ asset('images/accueil_img4.jpeg') }}" alt="">
              <!--div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              </p -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="postgrand">
              <img src="{{ asset('images/Webp.net-resizeimage.png') }} " alt="">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Featured Services Section -->
        
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('images/Igwabi.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Nous</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Autre Address</h3>
                            <p>000 C/Ngaliema, Ville/Lubumbashi, pays/DRC Congo</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>fondationIgwabi@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Appel</h3>
                        <p>+243 81 174 8411</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                        </div>
                        <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

                </div>
              

            </div>
        </section><!-- End Contact Section -->
  </main><!-- End #main -->

@endsection