<div class="bloc">
    <video autoplay="autoplay" muted="" loop="infinite" src="aaer - Trim.mp4"></video>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site KSFLO</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/96dcb489df.js" crossorigin="anonymous"></script>
</head>
<body>
     <section id="container">
      <header>
        <div class="logo">
           <p><span>Kim</span>Express</p> 
        </div>

        <div class="menu-toggle"></div>

        <ul class="menu">
            <li><a href="#container">Home</a></li>
            <li><a href="#a-propos">Formation</a></li>
            <li><a href="#gallerie">Services</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="http://localhost/Projet4/ksflo.php">Login</a></li>

        </ul>
      </header>
      <div class="container-text">
          <h1>je suis motivé pour réussir</h1>
          <p></p>
          <a href="#">prendre rendez vous maintenant</a>
      </div>
    </section> 

    <!-- section a propos -->
     <section id="a-propos">
        <div>
            <p class="tittle-section">à propos</p>
            <h1 class="sub-tittle-section">Qui sommes nous </h1>
            <div class="description-photo">
                    <div class="desc">
                    <center><p>Bonjour à tous les visiteurs de notre site web, j'espere que vous trouverez tout ce dont vous avez besoin sur ce site. Nous somme une entreprise qui livre  tous les plats afin que vous les savouerz avec amour</p></center> 

                        <H2>NOS SERVICES</H2>
                        <div class="list-services">
                            <div class="service">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>RAPIDES</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-money-check-alt"></i>
                                <p>PROMETTEURS</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-check"></i>
                                <p>FIABLES</p>
                            </div>
                        </div>
                </div>
                <img src="poste-travail-3d-ordinateur-peripheriques.jpg" alt="">
            </div>
        </div>
    </section> 

    <!-- section gallerie destination -->
    <section id="gallerie">
            <p class="tittle-section">Cuisine</p>
            <h1 class="sub-tittle-section">nos plats populaires </h1>
            <div class="liste-photos">
                <div class="gallerie-img">
                    <img src="casteloes pizza.jpg" alt="">
                    <div class="show-country"><p>PIZZA</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="Ambiance-café-avec-filigrane-scaled.jpg" alt="">
                    <div class="show-country"><p>CAFE</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="aa.jpg" alt="">
                    <div class="show-country"><p>CAFE A LA CREME</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="maquette site café.PNG" alt="">
                    <div class="show-country"><p>CAFE PREMIUM</p></div>
                </div>

            </div>
    </section> 

<!--  section contact -->
    <section id="contact">
        <p class="tittle-section">contact</p>
        <h1 class="sub-tittle-section">formulaire de contact</h1>
        <div>
            <form action="">
                <label>Adresse Mail</label>
                <input type="text" placeholder="Ex: azerty@gmail.com">
                <label>Message</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
                <input type="submit" value="ENVOYER">
            </form>
            <div class="images-contact">
                <img src="fille-sac-dos-au-coucher-du-soleil-al-generatif.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <p>Ce site a été conçu par KIMBEMBE Florentin</p>
    </footer>

<script>
    var menu_toggle = document.querySelector('header .menu-toggle');
    var menu = document.querySelector('header .menu');
    menu_toggle.onclick = function(){
        menu_toggle.classList.toggle('active') ; 
        menu.classList.toggle('responsive') ; 
    }
</script>

</body>
</html>
</div>
