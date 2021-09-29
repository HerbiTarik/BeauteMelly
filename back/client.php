<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c79ef9f9bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap');
        </style>
      <style type="text/css">
      .slider h1{
        margin: 10%;
    text-align: center;
    color: #fff;
    position: absolute;
    font-size: 60px;
    line-height: 1.6em;
      }
    </style>
    <title>Beauté Melly</title>
</head>
<body>

    <!--header-->

    <header>
    
    <div class="logo"><a href="client.php">BeautéMelly</a></div>
   
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-bars"></i>
    </label>

    <ul class="menu">
    <li id="left"><a href="client.php"><i class="fas fa-home"></i><strong> Acceuil</strong></a></li>
        <li id="left"><a href="produit_client.php"><i class="fas fa-shopping-bag"></i><strong> Produits</strong></a></li>
        <li id="left"><a href="marque_client.php"><i class="far fa-gem"></i><strong> Marques</strong></a></li>
        <li id="left"><a href="magazine_client.php"><i class="far fa-newspaper"></i><strong> Magazine</strong></a></li>
        
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        
    </ul>
    <ul class="profile">
        <li><a href="logout.php"><strong>Déconnexion</strong></a></li>
    </ul>
</header>

<nav class="navbarre">
            <div class="divsearch">
            <div class="search">
                 <input class="search-txt" type="text" name="box" placeholder="Rechercher un produit...">
                 <a  class="search-btn"href="#"><i class="fas fa-search"></i></a>
            </div>
        </div>
       </nav>
           <!------images--------------------------------------------------------------------->
           <div class="slider">
           <?php echo "<h1>bienvenue " . $_SESSION['username'] . "<br>Faites des affaires!<br>Profitez de nos promotions en cours!</h1>"; ?>
           </div>
           <!------text---------------------------------------------------------------------->
           <div class="une">
                 <h1 class="une_titre">À la <font color="#fab1a0">une</font></h1>
                 <div class="une_a_b">
                 <div class="une_a">
                    <h2 class="une_titre_a">Testez la Crème riche <font color="#fab1a0">à l’extrait d’écorce d’érable et omégas</font></h2>
                    <div class="une_a_h_p">
                     <img src="../image/pub1.jpg">
                     <p>La crème riche, fondante, est enrichie aux omégas 3,6 & 9 pour nourrir intensément la peau et à l'extrait d'écorce d'érable pour lui apporter le réconfort et la protection dont elle a besoin pendant l'hiver. Votre peau retrouve souplesse et confort. Craquez pour son parfum envoûtant et sa texture ultra-cocooning.<br><br> <U><strong><font color="#fab1a0">ACTIF DERMOCOSMÉTIQUE</font></strong></U><br>
                        - Omégas 3,6 & 9 : nutrition et réconfort<br>
                        3,6 & 9 : huile de riz<br>
                        6 & 9 : huile de sésame. <br><br><U><strong><font color="#fab1a0">TECHNOLOGIE MICROBIOME</font></strong></U><br>
                        - Prébiotique breveté* : ce soin visage contient un prébiotique produit par biotechnologie, qui favorise le respect du microbiome cutané**.
                    <br><br><U> <strong><font color="#fab1a0">ACTIF COSMÉTIQUE ISSU DE PLANTE MÉDICINALE</font></strong> </U><br>
                    - Extrait d'écorce d'érable : protection & résistance au froid. Préserve la barrière cutanée, la protège des agressions extérieures et empêche sa déshydratation</p>
                  
                    </div>
                    </div>
                  <div class="une_b">
                    <h2 class="une_titre_a">Qui sommes-<font color="white">nous</font> ?</h2>
                    <p>BeautéMelly est le premier média expert en produits de Beauté :

                        14 ans d’expérience et de passion des cosmétiques, 50 000 produits et plus de 2 millions d’avis exprimés par la communauté y côtoient l’actualité, les tendances et les composants décryptés par nos journalistes, pour vous permettre de choisir au mieux vos produits beauté !</p>
                  </div>
                </div>
           </div>

           <!--Les nuveaux produits---------------------------------------------------------->
           <main>
		
            <div class="titre">
                <h1>Les meilleurs <font color="#fab1a0">produits</font></h1>
                <p>
                    <span>&#139;</span>
                    <span>&#155;</span>
                </p>
            </div>
            <section>
            <div class="product">
                <picture>
                    <img src="../image/p1.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Skin-Renewing</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$45.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p2.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Bvlgari Man</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$65.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p3.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Lines serum</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$37.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p4.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Palette Couture</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$45.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p5.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Sacrée Frangine</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$83.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p6.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Dullness Serum</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$35.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p7.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Crème lifting</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$41.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p8.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Masque en Stick</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$47.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p9.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Advanced Génifique</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$49.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p10.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Perfect Mousse</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$48.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p11.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Shampooing</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$52.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            <div class="product">
                <picture>
                    <img src="../image/p12.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>My Way</b><br>
                        <small>New arrival</small>
                    </p>
                    <samp>$91.00</samp>
                </div>
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
                <div class="button">
                    
                    <a href="#">Acheter</a>
                </div>
            </div>
            </section>
        </main>        
        <script type="text/javascript" src="../js/main.js"></script>

        <!--footer--------------------------------------------->
       <?php include("footer.php"); ?>

</body>
</html>