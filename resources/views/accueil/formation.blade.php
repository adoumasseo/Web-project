<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/formation.css')
  @vite('resources/css/nav.css')
  @vite('resources/css/footer.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <nav class="navbar">
    <a href="#" class="logo">Logo</a>
    <div class="nav-links">
        <ul>
            <li class="active"> <a href="{{ route('index') }}">Accueil</a> </li>
            <li> <a href="{{ route('form') }}">Connexion</a> </li>
            <li> <a href="{{ route('etat') }}">Inscription</a> </li>
            <li> <a href="{{ route('formation') }}">Formation</a> </li>
        </ul>
    </div>
    <div class="search-bar">
        <input type="search" name="search-input" id="search-input">
        <ion-icon name="search-outline" class="search-icon"></ion-icon>
    </div>

    <ion-icon name="menu"  class="menu-hamburger"></ion-icon>
  </nav>

  <section class="first-container">
    <div class="herosection">
      <div class="hero_container">
        <div class="hero--container--child">
          <div class="title">Explore</div>
          <div class="title">Your Knowledge</div>
          <div class="title">And Skill With Us</div>
          <div class="hero--container--text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
            corporis architecto eius perspiciatis repudiandae natus. Maiores,
            dicta.architecto eius perspiciatis repudiandae natus. Maiores,
          </div>
          <div class="connexion">
            <a href="" class="connection-btn">Connexion</a>
            <a href="" class="inscription-btn">Inscription</a>
          </div>
        </div>
      </div>
    </div>

    <div class="courses_container">
      <h1 class="title_container">Our Optionals<span>Classes</span></h1>

      <div class="box-courses">
        <div class="courses one">
          <div class="first-content">
            <img src="{{ asset('imagesPages/img/Kindergarten student-amico.png') }}" alt="undraw" />
            <div class="second-content">
              <div class="shool-type">
                <div class="texte">PRIMARY</div>
                <div class="small-style">7 year</div>
              </div>
              <div class="lorem">Lorem ipsum dolor amet consectetur</div>

              <div class="translate-part">
                <div class="picture-icon">
                  <div class="picture">
                    <img src="{{ asset('imagesPages/img/IMG_20210404_095223_000.jpg') }}" alt="profil" />
                    <div class="name">Luis denis</div>
                  </div>
                  <div><i class="fa-solid fa-star icon"></i></div>
                </div>
                <div class="info">
                  <div class="effectif-s premier">
                    <i class="fa-solid fa-person"></i>
                    <div class="nombre">: 300 child</div>
                  </div>

                  <div class="effectif-s troisieme">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div class="nombre">: 15 Lead</div>
                  </div>
                </div>

                <!-- <div class="more">
                    <a href="" class="more-link">...</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="courses two">
          <div class="first-content">
            <img src="{{ asset('imagesPages/img/Teacher student-pana.png') }}" alt="undraw" />
            <div class="second-content">
              <div class="shool-type">
                <div class="texte">COLLEGE</div>
                <div class="small-style">4 year</div>
              </div>
              <div class="lorem">Lorem ipsum dolor amet consectetur</div>

              <div class="translate-part">
                <div class="picture-icon">
                  <div class="picture">
                    <img src="{{ asset('imagesPages/img/IMG_20210404_095223_000.jpg') }}" alt="profil" />
                    <div class="name">Luis denis</div>
                  </div>
                  <div><i class="fa-solid fa-star icon"></i></div>
                </div>
                <div class="info">
                  <div class="effectif-s premier">
                    <i class="fa-solid fa-person"></i>
                    <div class="nombre">: 800 child</div>
                  </div>

                  <div class="effectif-s troisieme">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div class="nombre">: 15 Lead</div>
                  </div>
                </div>

                <!-- <div class="more">
                                    <a href="" class="more-link">...</a>
                                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="courses three">
          <div class="first-content">
            <img src="{{ asset('imagesPages/img/High School-bro.png') }}" alt="undraw" />
            <div class="second-content">
              <div class="shool-type">
                <div class="texte">HIGH SCHOOL</div>
                <div class="small-style">3 years</div>
              </div>
              <div class="lorem">Lorem ipsum dolor amet consectetur</div>

              <div class="translate-part">
                <div class="picture-icon">
                  <div class="picture">
                    <img src="{{asset('imagesPages/img/IMG_20210404_095223_000.jpg')}}" alt="profil" />
                    <div class="name">Luis denis</div>
                  </div>
                  <div><i class="fa-solid fa-star icon"></i></div>
                </div>
                <div class="info">
                  <div class="effectif-s premier">
                    <i class="fa-solid fa-person"></i>
                    <div class="nombre">: 500 child</div>
                  </div>

                  <div class="effectif-s troisieme">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div class="nombre">: 50 Lead</div>
                  </div>
                </div>

                <!-- <div class="more">
                                    <a href="" class="more-link">...</a>
                                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="exams_results">
      <h1 class="title_container">
        Our <span class=""> Exams Results</span>
      </h1>
      <div class="exams_container">
        <div class="exams">
          <h4>CEP</h4>
          <div class="cep">
            <div class="circle">
              <span class="cep-value">0%</span>
            </div>
          </div>
          <div class="description">
            <div class="taux">
              <span class="diagrotron"> 120 </span> présentés et
              <span class="diagrotron"> 120 </span> admis
            </div>

            <div class="candidate">
              <div class="number-row">
                <span class="diagrotron"> 75 </span> Garcons présentés :
              </div>

              <div class="percent">
                <div class="candidate-circle">
                  <span class="candidate-percent-value">0%</span>
                </div>
              </div>
            </div>

            <div class="candidate">
              <div class="number-row">
                <span class="diagrotron"> 45 </span> filles présentées :
              </div>

              <div class="percent second-percent">
                <div class="candidate-circle">
                  <span class="candidate-percent-value second-value">0%</span>
                </div>
              </div>
            </div>

            <div class="rate">
              <div class="first">
                <span class="diagrotron">1e</span> du Benin au CEP 2019
              </div>
              <div class="first">
                <span class="diagrotron">2e</span> du Benin au CEP 2021
              </div>
            </div>
          </div>
        </div>
        <div class="exams">
          <h4>BEPC</h4>
          <div class="bepc">
            <div class="circle">
              <span class="bepc-value">0%</span>
            </div>
          </div>
          <div class="description">
            <div class="taux">
              <span class="diagrotron">327</span> présentés et
              <span class="diagrotron">240 </span>admis
            </div>
            <div class="candidate">
              <div class="number number-res">Modèle court :</div>

              <div class="percent percent-bepc">
                <div class="candidate-circle">
                  <span class="candidate-percent-value percent-value-bepc">0%</span>
                </div>
              </div>
            </div>

            <div class="candidate">
              <div class="number number-res">Modèle long:</div>

              <div class="percent second-percent-bepc">
                <div class="candidate-circle">
                  <span class="candidate-percent-value second-value-bepc">0%</span>
                </div>
              </div>
            </div>

            <div class="rate">
              <div class="first">
                <span class="diagrotron">15e</span> du Benin au BEPC 2019
              </div>
              <div class="first">
                <span class="diagrotron">2e</span> du LITORAL au BEPC 2021
              </div>
            </div>
          </div>
        </div>
        <div class="exams">
          <h4>BAC</h4>
          <div class="bac">
            <div class="circle">
              <span class="bac-value">0%</span>
            </div>
          </div>

          <div class="description">
            <div class="taux">
              <span class="diagrotron"> 213 </span> présentés et
              <span class="diagrotron"> 135 </span> admis
            </div>

            <div class="candidate">
              <div class="number">
                <h3>BAC A</h3>
                <div>
                  <span class="diagrotron"> 50 </span> présentés
                  <span class="diagrotron"> 35 </span> admis :
                </div>
              </div>

              <div class="percent percent-bac">
                <div class="candidate-circle">
                  <span class="candidate-percent-value percent-value-bac">0%</span>
                </div>
              </div>
            </div>

            <div class="candidate">
              <div class="number">
                <h3>BAC B</h3>
                <div>
                  <span class="diagrotron"> 40 </span> présentés
                  <span class="diagrotron"> 20 </span> admis :
                </div>
              </div>

              <div class="percent second-percent-bac">
                <div class="candidate-circle">
                  <span class="candidate-percent-value second-value-bac">0%</span>
                </div>
              </div>
            </div>

            <div class="candidate">
              <div class="number">
                <h3>BAC C</h3>
                <div>
                  <span class="diagrotron"> 23 </span> présentés
                  <span class="diagrotron"> 23 </span> admis :
                </div>
              </div>

              <div class="percent third-percent-bac">
                <div class="candidate-circle">
                  <span class="candidate-percent-value third-value-bac">0%</span>
                </div>
              </div>
            </div>
            <div class="candidate">
              <div class="number">
                <h3>BAC D</h3>
                <div>
                  <span class="diagrotron"> 100 </span> présentés
                  <span class="diagrotron"> 57 </span> admis :
                </div>
              </div>

              <div class="percent fourth-percent-bac">
                <div class="candidate-circle">
                  <span class="candidate-percent-value fourth-value-bac">0%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="admin-word">
      <!-- <h1 class="title_container responsive--off">
          Some <span class=""> Administration Words</span>
        </h1> -->
      <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="false"
        space-between="30" centered-slides="true" autoplay-delay="100000" autoplay-disable-on-interaction="false">
        <swiper-slide>
          <div class="first-part">
            <h5>TESTIMONIAL ...</h5>
            <div class="content-title">
              <div>See What Administration</div>
              <div>Say About Us</div>
            </div>
            <p class="first-text">
              Lorem ipsum dolor sit amet adipisicing elit. Dolores odit
              facilis hic, fugiat tempore ab dicta, perspiciatis, voluptas
              aliquam id quod? Facere ipsam, quidem Dolorum hic ,
            </p>
            <p class="second-text">
              Dolorum hic quibusdam provident, natus cumque error sapiente
              omnis numquam
            </p>
          </div>
          <div class="second-part">
            <div class="admin-picture">
              <img src="{{ asset('imagesPages/img/IMG_20210404_095223_000.jpg') }}" alt="picture" />
            </div>

            <div class="admin-information">
              <div class="information">
                <div class="first-child">GEORGES BADOTODE</div>
                <div class="last-child">Physics Researchers</div>
              </div>

              <div class="admin-graduation">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="admin-content">
              <div class="icon-content">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta maxime quas sit nesciunt aut dolor ab non illum dicta
                fugiat nam
              </div>
            </div>

            <div class="admin-fonction">DIRECTOR</div>
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="first-part">
            <h5>TESTIMONIAL ...</h5>
            <div class="content-title">
              <div>See What Administration</div>
              <div>Say About Us</div>
            </div>
            <p class="first-text">
              Lorem ipsum dolor sit amet adipisicing elit. Dolores odit
              facilis hic, fugiat tempore ab dicta, perspiciatis, voluptas
              aliquam id quod? Facere ipsam, quidem Dolorum hic ,
            </p>
            <p class="second-text">
              Dolorum hic quibusdam provident, natus cumque error sapiente
              omnis numquam
            </p>
          </div>
          <div class="second-part">
            <div class="admin-picture">
              <img src="{{ asset('imagesPages/img/IMG_20210404_095223_000.jpg') }}" alt="picture" />
            </div>

            <div class="admin-information">
              <div class="information">
                <div class="first-child">GEORGES BADOTODE</div>
                <div class="last-child">Physics Researchers</div>
              </div>

              <div class="admin-graduation">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="admin-content">
              <div class="icon-content">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta maxime quas sit nesciunt aut dolor ab non illum dicta
                fugiat nam
              </div>
            </div>

            <div class="admin-fonction">DIRECTOR</div>
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="first-part">
            <h5>TESTIMONIAL ...</h5>
            <div class="content-title">
              <div>See What Administration</div>
              <div>Say About Us</div>
            </div>
            <p class="first-text">
              Lorem ipsum dolor sit amet adipisicing elit. Dolores odit
              facilis hic, fugiat tempore ab dicta, perspiciatis, voluptas
              aliquam id quod? Facere ipsam, quidem Dolorum hic ,
            </p>
            <p class="second-text">
              Dolorum hic quibusdam provident, natus cumque error sapiente
              omnis numquam
            </p>
          </div>
          <div class="second-part">
            <div class="admin-picture">
              <img src="{{ asset('imagesPages/img/IMG_20210404_095223_000.jpg') }}" alt="picture" />
            </div>

            <div class="admin-information">
              <div class="information">
                <div class="first-child">GEORGES BADOTODE</div>
                <div class="last-child">Physics Researchers</div>
              </div>

              <div class="admin-graduation">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="admin-content">
              <div class="icon-content">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta maxime quas sit nesciunt aut dolor ab non illum dicta
                fugiat nam
              </div>
            </div>

            <div class="admin-fonction">DIRECTOR</div>
          </div>
        </swiper-slide>
      </swiper-container>
    </div>
  </section>


  <footer>
    <div class="contenu-footer">

        <div class="bloc footer-services">
            <h3> RESOURCES</h3>
            <ul class="liste-formation">
                <li> <a href="#">Application</a> </li>
                <li> <a href="#">Documentation</a> </li>
                <li> <a href="#">Systems</a> </li>
                <li> <a href="#">FAQ</a> </li>
            </ul>
        </div>

        <div class="bloc footer-services">
            <h3> PRICING</h3>
            <ul class="liste-formation">
                <li> <a href="#">Overview</a> </li>
                <li> <a href="#">Premium Plans</a> </li>
                <li> <a href="#">Affiliate Program</a> </li>
                <li> <a href="#">Promotions</a> </li>
            </ul>
        </div>

        <div class="bloc footer-services">
            <h3> COMPANY</h3>
            <ul class="liste-formation">
                <li> <a href="#">About Us</a> </li>
                <li> <a href="#">Blog</a> </li>
                <li> <a href="#">Partnerships</a> </li>
                <li>  <a href="#">Careers</a> </li>
                <li> <a href="#">Press</a> </li>
            </ul>
        </div>

        <div class="bloc footer-services">
            <h3> SOCIAL</h3>
            <ul class="liste-formation">
                <li> <a href="#">Facebook</a> </li>
                <li> <a href="#">Twitter</a> </li>
                <li>  <a href="#">Instagram</a> </li>
                <li> <a href="#">Linkedin</a> </li>
            </ul>
        </div>

    </div>
  </footer>

  @vite('resources/js/formation.js')
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  @vite('resources/js/nav.js')
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
