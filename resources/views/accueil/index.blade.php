<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/accueil.css')
  <title>School</title>
</head>
<body>
  <div class="container">

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

    <div class="head">

    </div>

    <!--Contenu principal de la page d'accueil-->
    <div class="content">
      <div class="header" style="background-image: url('{{ asset('imagesPages/redd-f-9o8YdYGTT64-unsplash.jpg')}}');">
        <div class="header--left">
          <div class="header--content--left">
            <h1>Explore</h1>
            <h1>Your Knowledge</h1>
            <h1>And Skill With Us</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus mollitia laudantium commodi hic iure dolores?</p>
            <div class="header--content--left--button">
              <button id="btn1" onclick="window.location.href='{{ route('form') }}' ">connexion</button>
              <button id="btn2" onclick="window.location.href='{{ route('etat') }}' ">inscription</button>
            </div>
          </div>
        </div>
      </div>
      <div class="body">
        <div class="header--bottom">
          <div class="bar--bloc">
            <div class="icon--bloc"></div>
            <div class="bar--bloc--text">
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="bar--bloc">
            <div class="icon--bloc"></div>
            <div class="bar--bloc--text">
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="bar--bloc">
            <div class="icon--bloc"></div>
            <div class="bar--bloc--text">
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="bar--bloc">
            <div class="icon--bloc"></div>
            <div class="bar--bloc--text">
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
      </div>
      <div class="body--content">
        <div class="bloc--1--left" style="background-image: url('{{ asset('imagesPages/transparent.png') }}')"></div>
        <div class="bloc--1--right">
          <p class="text--pink">Lorem, ipsum dolor.</p>
          <h1 style="margin-top : 15px ; margin-bottom : 20px ; color: #210f3b;">Lorem ipsum dolor sit amet consectetur.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veritatis minima sequi itaque, eligendi nostrum magnam quaerat earum expedita adipisci, voluptatum quidem modi, dignissimos numquam?</p>
          <div class="bloc--1--right--item-bloc">
            <div class="left-circle"></div>
            <p class="text" style="font-size : 14px ;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cupiditate aperiam adipisci eius nam dolore autem vel provident at quos.
            </p>
          </div>
          <div class="bloc--1--right--item-bloc">
            <div class="left-circle"></div>
            <p class="text" style="font-size : 14px ;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cupiditate aperiam adipisci eius nam dolore autem vel provident at quos.
            </p>
          </div>
          <button class="btn-pink">Visiter</button>
        </div>
      </div>
      <div class="courses--bloc">
        <div class="head--courses--bloc">
          <h2>Our Optionals <span class="text--blue">Courses</span></h2>
        </div>
        <div class="content--courses--bloc">
          <div class="optional--course">
            <div class="head--course--item"></div>
          </div>
          <div class="optional--course">
            <div class="head--course--item"></div>
          </div>
          <div class="optional--course">
            <div class="head--course--item"></div>
          </div>
        </div>
      </div>
      <div class="bloc--btn">
        <button>Inscription</button>
      </div>
      <div class="brochure--bloc">
        <form action="" method="post">
          <div class="text--brochure">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ad quod debitis blanditiis tempore quam praesentium nam aperiam dolore mollitia!</h3><br>
          </div>
          <div class="form--brochure">
            <input type="text" name="email" placeholder="Entrez votre adresse mail">
            <button class="submit">Demander Brochure</button>
          </div>
        </form>
      </div>
      <div class="club--bloc">
        <div class="head--text--club">
          <p>Rejoignez l'un des Clubs de notre établissement et développez votre esprit d'équipe et votre esprit artistique</p>
        </div>
        <div class="club--list">
          <div class="club--item" id="club--item--left">
            <div class="image--club"></div>
            <div class="footer--club"></div>
          </div>
          <div class="club--item" id="club--item--center">
            <div class="image--club"></div>
            <div class="footer--club"></div>
          </div>
          <div class="club--item" id="club--item--right">
            <div class="image--club"></div>
            <div class="footer--club"></div>
          </div>
        </div>
      </div>
      <div class="avis--bloc">
        <div class="avis--bloc--left">
          <div class="bloc--left--title">
            <p>Consulter les avis de nos élèves et parents d'élèves</p>
          </div>
          <div class="bloc--left--text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, hic qui modi tenetur, autem quod sapiente voluptates magnam quasi iste, culpa praesentium nemo at officia.</p>
            <button class="avis--btn">Consulter les avis</button>
          </div>
          <div class="bloc--left--content"></div>
        </div>
        <div class="avis--bloc--right">
          <div class="blog--item"></div>
        </div>
      </div>
      <div class="bottom--bloc">
        <div class="matiere--bloc">
          <div class="img--matiere--bloc"></div>
          <div class="img--matiere--bloc"></div>
          <div class="img--matiere--bloc"></div>
          <div class="img--matiere--bloc"></div>
          <div class="img--matiere--bloc"></div>
          <div class="img--matiere--bloc"></div>
        </div>
        <div class="text--bottom--bloc">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsam temporibus. Enim facere vel incidunt rem fuga sequi voluptatum nam?</p>
          <div class="points--text--bottom--bloc">
            <span><h6>stats</h6></span>
          </div>
        </div>
      </div>


      <!--FOOTER-->


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

      <!--ENDFOOTER-->


    </div>

  </div>

  @vite('resources/js/accueil.js')
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
