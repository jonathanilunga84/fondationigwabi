@extends('layout.app')

@section('title')
    Fondation Igwabi
@endsection

<style type="text/css">

</style>

@section('contenu')
  <style>   
  </style>

  <div id="hero5">
    <div id="cont" class="container-fluid">
      <div class="row"> 
        <div id="head-image" class="col-md-6 col-lg-6">

        </div>
        <div id="head-content" class="col-md-6 col-lg-6">
          <h1> <span> FONDATION IGWABI AVEC DIEU NOUS FERONS DES EXPLOITS (FI-ADEX)</spa></h1>
          <div class="d-flex bg-primary">
            <a href="#appropo" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="post">  
    <div class="container-fluid"> 
      <div class="row bg-danger9">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img class="post-image" src="{{ asset('images/accueil_img1-min.jpeg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img class="post-image" src="{{ asset('images/accueil_img2-min.jpeg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img class="post-image" src="{{ asset('images/accueil_img3-min.jpeg') }}" alt="">
        </div>
      </div>
      <div id="postgrand" class="row">
        <div class="col-sm-6 col-md-12 col-lg-12"> 
          <img class="post-image5" src="{{ asset('images/accueil_img5-min.jpeg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  
  <main id="main">
         
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2>À propos</h2>
          <h3>QUI SOMMES-NOUS <mark class="numExposant">(1)</mark> <span>?</span></h3>
          <p>L'Initiatteur fondateur: <span>Mr HENRI DE PAUL IGWABI,(MZÉE)</span>;</p>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('images/Igwabi2.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Une association san but Lucratif, qui réuni des hommes et des femmes en vu d'atteindre les objectifs de la FI-ADEX (3)&(4)</h5>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>FI-ADEX est a caractère sociopolitique et est laîc </h5>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>FI-ADEX est non commerciale</h5>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Crée le 15 janvier 2018 en guise de la compagne électorale pour l'élection de Mme Pauline IGWABI MUSHENGEZI comme députée Nationale et Provinciale du Haut-Katanga</h5>
                </div>
              </li>
            </ul>
          </div>
        </div><br />

        <div  class="container ext-justify">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
             <div class="section-title">
                <h3 class="text-center">QUI SONT NOS MEMBRES<span class="numExposant">(2)</span></h3>
             </div>
              <p>Est donc membre toutes personnes Humaines sans distinction de race, sexes, âges, religions, tributs, d'ethnies, d'appartenances politique, de niveau de revenu, ... Toute personne qui a signer la charte <span> FI-ADEX</span>, qui a sa fiche de membre et dispose de sa carte de membre, cette dernière est annuel, et qui est en ordre des cotisations.</p>

              <h6>La catégorie des membres:</h6>
              <ul>
                <li>Membre fondateur: L'initiateur;</li>
                <li>Membres d'honneur;</li>
                <li>Membres sympathisants;</li>
                <li>Membres effectifs</li>
              </ul>
              <h6>I) Tous membres doit cotiser de son argent régulièrement</h6>
              <p>Toutes les cotisations sont solidaires entre les membres, ceux y compris les fond ou financement, les dons et legs obtenus; <strong>Le membre est actif lorsqu'il est en ordre des cotisations.</strong> <br /> Ces cotisations sont mensuelles et ponctuelles lorsque les membres sont en réunion ou lors d'une nécessité exprimée par un de membre. </p>
            </div>
          </div>

          <div id="" class="row">
            <div class="col-sm-12 col-lg-4  bg-danger">
              <div class="section-title">
                <h3>FI-ADEX LUTTE CONTRE<span class="numExposant">(3)</span></h3>
              </div>
              <ul>
                  <li>Les injustice,</li>
                  <li>Le tribalisme, le clanisme, le régionalisme et toutes formes de ségrégation</li>
                  <li>La pauvreté et la misère,</li>
                  <li>La mauvaise gouvernance,</li>
                  <li>toutes formes des anti valeurs,</li>
                  <li>La précarité des citoyens,</li>
                  <li>L'oisiveté et instrumentalisation des jeunes </li>
                </ul>
            </div>

            <div class="col-sm-12 col-lg-8 bg-success">
              <div class="section-title">
                <h3 class="text-center">FI-ADEX PROMEUT<span class="numExposant">(4)</span></h3>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <ol>
                    <li>
                      FI-ADEX est une communauté d'amour ou nous promouvons la solidarité et la fraternité Humanitaire entre les membres et envers tous les hommes et toutes les femmes désireux;
                    </li>
                    <li>
                      Des projets dit AGR c-a-d des activités génératrices des revenus en faveur de ses membres, principalement pour les catégories les plus vulnérable;</li>
                    <li>
                      Des projets sociaux de base tels les écoles, les orphelinats, les hospices des vieillards, les forages d'eau portables, ... 
                    </li>
                    <li>
                      Des projets de lutte contre le phénomène des enfants de la rue;
                    </li>
                    <li>
                      Des projets d'encadrement de la jeunesse pour luter contre leur instrumentalisation et l'oisiveté;
                    </li>
                    <li>
                      Des projets de créations d'emplois rémunérateurs, fabrique des savons, ... 
                    </li>
                    <li>
                      La création des petites entreprises, d'entreprendrait féminin et des jeunes;
                    </li>

                  </ol>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                  <li>
                      Des projets de micro finances rotatifs
                  </li>
                    <li>
                      Des aides humanitaires envers les populations sinistrées lors des catastrophes, ...;
                    </li>
                    <li>
                      L'assistance judiciaire envers toutes personnes défavorisées et/ou pauvres sans revenus;
                    </li>
                    <li>
                      La formation des leaders sociaux politiques locaux, et nationaux sur le leadership, le patriotisme, la bonne gouvernance, les enjeux électroraux,...;
                    </li>
                    <li>
                      La formation des métiers;
                    </li>
                    <li>
                      L'octroi des brevets, diplômes, des trophées de mérites civiques aux plus méritants.
                    </li>
                </div>
              </div>
            </div>
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