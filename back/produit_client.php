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

 <!--------------------------------Les produits---------------------------------------------------------->
 
 <main id="main_a">
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


<!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
            <h1>Soins du visage</h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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
           
           
        </section>
    </main>        


    <!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
            <h1>Cheveux</h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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

      <!--------------------------------Les produits---------------------------------------------------------->
<main>
		
        <div class="titre">
            <h1>Soins du corps</h1>
            <p>
                <span>&#139;</span>
                <span>&#155;</span>
            </p>
        </div>
        <section>
        <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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
            <div class="product_a">
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
        </section>
    </main> 
<!------------------------footer---------------->
       <?php include("footer.php"); ?>

</body>
</html>