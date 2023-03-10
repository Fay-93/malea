<!doctype html>
<html lang="fr">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Malea Coiffure</title>
    <!--icone permettant d'identifier l'onglet avec un logo-->
    <link rel="icon" href="../assets/img/malea.png" type ="image/png">
    <script src="https://kit.fontawesome.com/65699a0028.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="../css/styleMalea.css" type="text/css" />
  
</head>
<body >

  <div class="overlay"></div>

<!--HEADER-->  
<header>
    <!--NAVIGATION-->
  <div class="header-logo">
    Malea Coiffure<span>.</span>
  </div>

    <nav id="menu">
      <ul>
        <li><a href="accueil3.php">Accueil</a></li>
        <li><a href="realisations2.php">Réalisations</a></li>
        <li><a href="tarifs.php">Tarifs</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

            <div class="header-reseaux">
                <a title ="Suivez-moi sur Facebook" href="https://www.facebook.com/people/Malea-coiffure/100069930256868/?sk=photos" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a title ="Suivez-moi sur Instagram" href="https://www.instagram.com/maleacoiffure_off/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a class="mode" title ="Changer le mode" href="#"><i class='bx bx-moon'></i></a>
            </div>
            <a class="menu_burger" href="#">
              <i class="fa-solid fa-bars"></i>
          </a>

    </header>

    <main>
      <div class="hero">
        <h1 class="main-title">Votre salon de coiffure</h1>
        <button class="btnResa"><a href="tarifs.php" target="_blank">Réservez</a></button>
      </div>
      

 <!-- About section -->

  <section class="about" id="about">
    <h2 class="section-title">
      <span>Un style intemporel</span>

    </h2>
    <p class="section-subtitle">Patience et expertise à votre service</p>

    <div class="container about-content">
          <div class="about-text">
              <h2><span>VOUS ÊTES ENTRE DE BONNES MAINS.</span></h2>
                <p class="parA">Nous vous attentons rue de Paris pour prendre soin de vos cheveux et vous faire passer un agréable      moment</p>
              <h2><span>MA SPECIALITE.</span></h2>
              <p class="parA">La beauté simple, naturelle, fraîche et élégante.Adaptée au monde et à la mode d’aujourd’hui, nos coiffures prêt-à-porter se coiffent aussi facilement au quotidien que pour sortir.</p>
          </div>
                
          <div id="slider" class="slider">
                  <img src="../assets/img/anglaises.jpg" class="image" alt="fer à boucler">
                  <img src="../assets/img/baby.jpg" class="image" alt="Coiffure bébé">
                  <img src="../assets/img/coif_mariee.jpg" class="image" alt="coiffure mariage">
                  <img src="../assets/img/boy.jpg" class="image" alt="Coiffure petit garçon">
                  <img src="../assets/img/CapVerte.jpg" class="image" alt="Coiffure jeune femme blonde">
                  <img src="../assets/img/f_senior.jpg" class="image" alt="Femme mature">
                  <img src="../assets/img/generation1.jpg" class="image" alt="Génération">
                  <img src="../assets/img/hipster2.jpg" class="image"alt="coiffure homme hipster">

              <!-- ajout des chevrons droite et gauche-->
              <i class="fas fa-chevron-left" id="gauche"></i>
              <i class="fas fa-chevron-right" id="droite"> </i>
    
             <div id="controle"></div>
          </div>
    </div>
  </section>

    <!-- Section Prestations -->
    <section class="prestations" id="prestations">
      <h2 class="section-title">
        <span> Nos Prestations </span>
      </h2>
      <div class="container prestations-container">
        <div class="prestations-card">
          <h3 class="prestations-category-title">
            <span>Junior - 20%</span>
          </h3>
          <ul class="prestations-list">
            <li>
              <h4 class="heading-h4">FILLETTE - 24,80€</h4>
              <p>
                <strong>Coupe</strong> et
                <strong>coiffure</strong>.
              </p>
              <p><em>Durée 30 minutes</em>.</p>
            </li>
            <li>
              <h4 class="heading-h4">GARCON - 16€</h4>
              <p>
                <strong>Coupe</strong> et
                <strong>coiffure</strong>..
              </p>
              <p><em>Durée 30 minutes</em>.</p>
            </li>
            <li>
              <h4 class="heading-h4">BEBE JUSQU'A 3 ANS - 10€</h4>
            
              <p>
                <em> Durée 30 minutes. </em>
              </p>
            </li>
           
          </ul>
        </div>
        <div class="prestations-card">
          <h3 class="prestations-category-title">
            <span>LA COUPE</span>
          </h3>
          <ul class="prestations-list">
            <li>
              <h4 class="heading-h4">COUPE FEMME - 15€</h4>
              <p>
                <strong>Shampoing</strong>, <strong>coupe</strong>,
                <strong>coiffage</strong>.
              </p>
              <p><em>Durée 45mins</em></p>
            </li>
            <li>
              <h4 class="heading-h4">COUPE HOMME - 11€</h4>
              <p>
                <strong>Shampoing</strong>, <strong>coupe</strong>,
                <strong>coiffage</strong>.
              </p>
              <p><em>Durée 45 minutes</em></p>
            </li>
            <li>
              <h4 class="heading-h4">BARBE- 5€</h4>
            </li>
          </ul>
        </div>
      </div>
    </section>
      
    <!-- Section Savoir-faire -->

    <section class="team">
      <h2 class="section-title">
        <span>Tout mon savoir-faire rien que pour vous</span>
        <img src="" alt="">
      </h2>
      <div class="container cards-container">
        <div class="team-card">
          <img 
          src="../assets/img/ados.jpg" 
          alt="Adolescents dans l'herbe" 
          class="profile-image">
          <div class="card-content">
            <div class="top-card-content">
              <p class="card-name">-20% pour les juniors</p>
                
            </div>
          </div>
        </div>
        <div class="team-card">
          <img 
          src="../assets/img/garconne.jpg" 
          alt="Jeune femme coupe garçonne" 
          class="profile-image">
          <div class="card-content">
            <div class="top-card-content">
              <p class="card-name">Des coiffure adaptées à votre style</p>
            </div>
          </div>
        </div>
        <div class="team-card">
          <img 
          src="../assets/img/coif_mariee.jpg" 
          alt="Chignon mariée" 
          class="profile-image">
          <div class="card-content">
            <div class="top-card-content">
              <p class="card-name">Pour tous vos évènements</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Temoignage Section -->
    <section class="temoignage">
      <div class="text-slideshow-container">
        <div class="sliding-container">
          
          <div class="text-slide">
            <p class="temoignage-text">Cliente depuis 10 ans. Accueil sympathique et chaleureux. Laetitia est professionnelle et donne de très bons conseils. Je recommande</p>
            <p class="temoignage-author">Brigitte Daviot</p>
          </div>
          <div class="text-slide">
            <p class="temoignage-text">Venue pour la première fois grâce aux avis Google, je ne suis pas déçue ! la coiffeuse est adorable et donne de très bons conseils. Ravie du résultat ! Je reviendrais sans hésiter !</p>
            <p class="temoignage-author">Gwuendoline Peru</p>
          </div>
          <div class="text-slide">
            <p class="temoignage-text">La patronne nous reçoit toujours avec le sourir toujours satisfaite... je ne change plus...</p>
            <p class="temoignage-author">Séverine Merlen</p>
          </div>
          <div class="text-slide">
            <p class="temoignage-text">Coiffeuse très sympathique. Moment de détente très agréable</p>
            <p class="temoignage-author">Stéphanie Alvarès</p>
          </div>
          <div class="text-slide">
            <p class="temoignage-text">LToujours au top</p>
            <p class="temoignage-author">Florentina Raoul</p>
          </div>

        </div>
      </div>
    </section>
  </main>
<!--FOOTER-->
<footer>
  <!-- Contact  -->
  <section id="contact" class="contact">
      <h2 class="section-title">
        <span>Ou nous trouver</span>
        
      </h2>
      <p class="section-subtitle">
        Au centre de Taverny
      </p>
      <div class="contact-content container">
        <div class="addresses">
              <div class="address-block">
                  <p>139 rue de Paris, 95150 Taverny</p>
                   <p>01 39 95 30 41</p>
               </div>
               <div class="address-block">
                  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10465.112628316372!2d2.2237906592163057!3d49.024316452782415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2819ce3ee4e8557!2sMalea%20coiffure!5e0!3m2!1sfr!2sfr!4v1669447628197!5m2!1sfr!2sfr" width="600" height="450"></iframe>
              </div>
        </div>
        <div class="schedule">
          <h3 class="heading-h3">Horaires d'ouverture</h3>
          <div class="schedule-table">
            <p><span>Lundi</span> <span>Fermé</span></p>
            <p><span>Mardi</span> <span>09:00 - 19:30</span></p>
            <p><span>Mercredi</span> <span>09:00 - 19:30</span></p>
            <p><span>Jeudi</span> <span>09:00 - 19:30</span></p>
            <p><span>Vendredi</span> <span>09:00 - 20:00</span></p>
            <p><span>Samedi</span> <span>09:30 - 19:30</span></p>
            <p><span>Dimanche</span> <span>Fermé</span></p>
          </div>
        </div>
      </div>
  </section>
  <div class="footer1">
      <h2 class="keepincontact"><span>Restons en contact</span></h2>
      </div>
 <div class="footer2">
      <div class="footerReseau"> <a class="facebook" title ="Suivez-moi sur Facebook" href="https://www.facebook.com/people/Malea-coiffure/100069930256868/?sk=photos" target="_blank">
          <i class="fa-brands fa-facebook-f"></i></a>
      </div>
      <div class="footerReseau" > <a class="insta" title ="Suivez-moi sur Instagram" href="https://www.instagram.com/maleacoiffure_off/" target="_blank">
          <i class="fa-brands fa-instagram"></i></a>
      </div>
          <div class="footerReseau" > <a class="mail" title ="Ecrivez-moi un mail" href="mailto:sambaum@free.fr">
              <i class="fa-solid fa-envelope"></i></a>
          </div>
  </div>
 
</footer>


 <!--JAVASCRIPT-->
 <!--Jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!--fancy-->
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
 <script type="text/javascript" src="../js/appcopy.js"></script>


</body>

</html>