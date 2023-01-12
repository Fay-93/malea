<div class="overlay">
</div>
		<!--HEADER-->
<header>
    <!--NAVIGATION-->
    <div class="header-logo">
        Malea coiffure
				<span>.</span>
	</div>
	<!--Menu Alternatif-->
        <nav id="menu">
           <ul>
               <!--si le membre n’est pas encore connecté, le menu affichera « connexion » et « inscription ».-->
              <li><a href="accueil3.php">Accueil</a></li>
              <li><a href="maleaBlog.php">Blog</a></li>
              <!--Pour tester si la session est connectée ou non, j’utilise la fonction ISSET.-->
              <?php
              if(isset($_SESSION["membre"])) :
              ?>
             <li><a href="compte.php">Mon compte</a></li>
             <li><a href="deconnexion.php">Déconnexion</a></li>
              <?php
               /*et si le membre est connecté, le menu affichera « Mon compte » et "Déconnexion". */
               else :
               ?>
             <li><a href="connexion.php">Connexion</a></li>
             <li><a href="inscription.php">Inscription</a></li>
              <?php
              endif;
              ?>
          </ul>
        </nav>
            <div class="header-reseaux">
				<a title ="Suivez-moi sur Facebook" href="https://www.facebook.com/people/Malea-coiffure/100069930256868/?sk=photos"><i class="fa-brands fa-facebook"></i></a>
				<a title ="Suivez-moi sur Instagram" href="https://www.instagram.com/maleacoiffure_off/"><i class="fa-brands fa-instagram"></i></a>
				<a class="mode" title ="Changer le mode" href="#"><i class='bx bx-moon'></i></a>
			</div>
			<a class="menu_burger" href="#"><i class="fa-solid fa-bars"></i></a>
        
</header>