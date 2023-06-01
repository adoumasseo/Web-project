<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/form.css')
    @vite('resources/css/nav2.css')
    @vite('resources/css/footer2.css')
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

    <header></header>

    <!-- separation entre la navbar et le login -->

    <div class="container ">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already Have an account ?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't Have an account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form method="POST" action="{{ route('connect') }}">
                    @csrf
                    <h3>Sign In</h3>
                    <input type="text" placeholder="Login">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <input type="submit" value="Login">
                    <a href="#" class="forgot">Forgot Password</a>
                </form>
            </div>

            <div class="form signupForm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h3>Sign Up</h3>
                        <div class="formrecord">
                            <div class="recordone visible">
                                <input type="text" placeholder="Nom">
                                <input type="text" placeholder="Prénom">
                                <input type="email" placeholder="Email">
                                <input type="date" placeholder="Date de naissance">
                                <input type="text" placeholder="Téléphone">
                                <button class="next" id="next">Suivant</button>
                            </div>
                            <div class="recordtwo hidden">
                                <label for="">Acte de naissance</label>
                                <input type="file" placeholder="Acte de naissance">
                                <label for="">Photo d'identité</label>
                                <input type="file" placeholder="Photo d'identité">
                                <label for="">Certificat médical</label>
                                <input type="file" placeholder="Certifivat médical">
                                <input type="text" placeholder="Login">
                                <input type="password" placeholder="Password">
                                <div class="btn">
                                    <button class="next" id="prev">Précédent</button>
                                    <button class="next" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- separation entre le lmogin et le footer -->
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, fugit tempora quis quisquam, distinctio aspernatur eius fuga ratione reprehenderit cumque numquam optio non iusto officiis voluptates consequuntur voluptas architecto? Ipsa iste nostrum veniam delectus similique ea quis ex dicta consequatur modi, ad aperiam facere autem dolorem culpa sequi excepturi voluptatibus ipsam vitae. Quo repellat error blanditiis. Nisi rem commodi voluptates? Molestias id fugit laboriosam repellendus, numquam, beatae eos sed minus adipisci minima eius enim. Repellat perspiciatis maiores nam consequuntur tenetur quas doloremque laborum ut. Rem placeat vero aliquid possimus voluptates? Dolorum dolore ipsam autem rem modi quia mollitia voluptatum doloribus aperiam! Accusantium sequi reprehenderit est asperiores sit. Itaque quam unde corrupti earum deserunt explicabo exercitationem dolore magni, voluptate, sapiente labore nobis quibusdam, enim facere! Enim repellat debitis laborum aperiam reprehenderit sint et voluptates fugit accusamus, architecto sed, hic, quo impedit eos velit perferendis reiciendis recusandae? Voluptatibus labore dolore cupiditate tenetur quod eos a cum quos doloremque ad! Voluptas cum facilis assumenda sint veniam? Quaerat beatae facilis deleniti ex adipisci architecto nam cupiditate earum eaque sit, minus consequuntur sed dolore. Nisi, voluptate veritatis, voluptatum in enim distinctio neque natus reprehenderit dolore doloribus dolor eum, illo exercitationem ratione minus eius totam inventore!</p> -->
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
    @vite("resources/js/form.js")
    @vite('resources/js/nav.js')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>







