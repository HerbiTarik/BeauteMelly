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
        section .product_a{
    height: 95%;
    min-width: 20%;
    background: whitesmoke;
    margin: 0 10px 0 10px;
    border-radius: 20px;
    position: relative;
    left: 0;
    transition: 0.5s

}
#main_a{
    margin-top:60px;
}
@media (max-width: 768px) {
    section .product_a {
            min-width: 49%;
            margin:  0 10px  0 0;
        }
}
        </style>
</head>
<body>

    <!--header-->

    <header>
    
    <div class="logo"><a href="#">BeautéMelly</a></div>
   
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-bars"></i>
    </label>

    <ul class="menu">
    <li id="left"><a href="../index.php"><i class="fas fa-home"></i><strong> Acceuil</strong></a></li>
        <li id="left"><a href="produit.php"><i class="fas fa-shopping-bag"></i><strong> Produits</strong></a></li>
        <li id="left"><a href="marque.php"><i class="far fa-gem"></i><strong> Marques</strong></a></li>
        <li id="left"><a href="magazine.php"><i class="far fa-newspaper"></i><strong> Magazine</strong></a></li>
        
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        
    </ul>
    <ul class="profile">
        <li><a href="connexion.php"><i class="fas fa-user"></i><strong> S'identifier</strong></a></li>
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

 <!--------------------------------Les produits---------------------------------------------------------->
 
 <main id="main_a">
        <div class="titre">
            <h1>Les produits <font color="#fab1a0">NUXE</font></h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
            <div class="product">
                <picture>
                    <img src="../image/p13.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Super Serum</b><br>
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
                    <img src="../image/p14.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>crème Gel</b><br>
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
                    <img src="../image/p15.jpg" alt="">
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
                    <img src="../image/p16.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Prodigieuse Boost</b><br>
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
                    <img src="../image/p17.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Shampooing</b><br>
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
                    <img src="../image/p18.jpg" alt="">
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
                    <img src="../image/p19.jpg" alt="">
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
                    <img src="../image/p20.jpg" alt="">
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
                    <img src="../image/p21.jpg" alt="">
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
                    <img src="../image/p22.jpg" alt="">
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
                    <img src="../image/p23.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Fluide Hydratant</b><br>
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
                    <img src="../image/p24.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Baume Visage</b><br>
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


<!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
            <h1>Les produits <font color="#fab1a0">AVENE</font></h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
                <picture>
                    <img src="../image/p25.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Cleanance</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p26.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>TriAcnéal Soin</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p27.jpg" alt="">
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
            <div class="product_a">
                <picture>
                    <img src="../image/p28.jpg" alt="">
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
           
           
        </section>
    </main>        


    <!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
        <h1>Les produits <font color="#fab1a0">Yves Rocher</font></h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
                <picture>
                    <img src="../image/p29.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Fortifiant</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p30.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Anti-Pollution</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p31.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Le Démaquillant</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p32.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Correcteur Couleur</b><br>
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

      <!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
        <h1>Les produits <font color="#fab1a0">La Roche-Posay</font></h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
                <picture>
                    <img src="../image/p33.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Effaclar Mat</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p34.jpg" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b>Rétinol B3</b><br>
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
            <div class="product_a">
                <picture>
                    <img src="../image/p35.jpg" alt="">
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
            <div class="product_a">
                <picture>
                    <img src="../image/p36.jpg" alt="">
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
        </section>
    </main> 
<!------------------------footer---------------->
       <?php include("footer.php"); ?>

</body>
</html>