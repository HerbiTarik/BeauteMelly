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
    .magazine{
    margin: 40px 5%;
    position: relative;
    }
    .magazine .magazine_titre{
    border-bottom: 1px solid #bfb4b4;
    color: #24262b;
    }
    .magazine_a_b{
    display: flex;
    padding-top: 30px;
    justify-content: space-evenly;
}
.magazine_a{
    display:flex;
    padding: 0 20px 0 0;
    width: 60%;
    flex-direction: column;
}
.magazine_corps_a img{
    width:100%;
    height:400px;
    border-radius:5px;
}
.magazine_corps_a p{
    padding-top: 10px;
    font-size: 16px;
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_a h2{
    color: #24262b;
    letter-spacing: 0.6px;
    line-height: 25px;
}
.magazine_corps_a h3{
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_b{
    display:flex;
    padding: 0 20px 0 0;
    width: 40%;
    flex-direction: column;
}
.magazine_b img{
    width:100%;
    height:350px;
    border-radius:5px;
}
.magazine_b h2{
    color: #24262b;
    letter-spacing: 0.6px;
    line-height: 25px;
}
.magazine_b h3{
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_b p{
    padding-top: 10px;
    font-size: 16px;
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
@media(max-width:800px){
        .magazine_a_b{
            flex-direction: column;
        }
        .magazine_a{
            width: 100%;
        }
        .magazine_b{
            width: 100%;
        }
    }
    </style>
    <title>Beauté Melly</title>
</head>
<body>

    <!--header-->

    <header>
    
    <div class="logo"><a href="../index.php">BeautéMelly</a></div>
   
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
   
<!------------------magazine--------------------------->
<div class="magazine">
<h1 class="magazine_titre">Magazine</h1>

<div class="magazine_a_b">

    <div class="magazine_a">
        <h2><font color="#fab1a0">Le top des soins pour protéger et réparer ses cheveux en été</font></h2><br>
        <div class="magazine_corps_a">
            <h3>Chaleur, rayons UV, humidité, sel, chlore, sable... Tant de facteurs qui peuvent abimer les cheveux pendant nos vacances au soleil. Voici notre sélection des meilleurs produits capillaires pour prendre soin de sa chevelure cet été.</h3><br>
            <img src="../image/ch.jpg"><br><br>
            <p>L'été, nos cheveux sont mis à rude épreuve. Pour <strong><font color="#fab1a0">prévenir du dessèchement de la fibre capillaire</font></strong> dû au soleil et <strong><font color="#fab1a0">préserver la vitalité de notre</font> </strong>, il est important de renforcer sa routine beauté avec des produits protecteurs et réparateurs adaptés. <br>
            <br>
            <strong><font color="#fab1a0">Comment protéger ses cheveux en été ?</font></strong><br><br>Les rayons UV nocifs du soleil, le chlore de la piscine, le sable ou l'humidité impactent la qualité de notre cheveu et peuvent le rendre plus sec, déshydraté, voire cassant. Les têtes colorées ou méchées doivent redoubler d'attention car le soleil peut ternir la couleur et l'éclat des cheveux. Heureusement, il existe quelques gestes simples à combiner avec des produits efficaces pour entretenir sa chevelure pendant ses vacances au soleil.
            <br><br>
            <strong><font color="#fab1a0">L'huile ou le spray capillaire :</font></strong> Idéal pour protéger ses cheveux pendant et après l'exposition au soleil, il agit comme un bouclier face aux mauvais rayons UV tout en hydratant la fibre capillaire. Il permet aussi d'éviter les frisottis et les mèches rebelles dus à l'humidité. Les ingrédients à privilégier ? Les huiles végétales (de coco, de monoï, d'argan...). Certains produits plus experts possèdent même une petite protection SPF non négligeable. <br><br>
            <strong><font color="#fab1a0">Le shampooing après-soleil :</font></strong> C'est l'étape à ne pas zapper pour se débarrasser de toutes les impuretés et résidus qui empêchent le cuir chevelu de respirer et abiment les longueurs (comme le sel, le chlore, la transpiration ou les restes d'huiles capillaires). Ils peuvent être utilisés après chaque journée de baignade. Pour bien démêler et réhydrater les cheveux, il est conseillé d'appliquer ensuite un après-shampooing de la même gamme. <br><br>
            <strong><font color="#fab1a0">Le masque après-soleil :</font></strong> Une fois par semaine, un soin plus intense est indispensable pour réparer et nourrir en profondeur les longueurs. Le masque capillaire leur apporte douceur, éclat et réconfort après plusieurs jours d'exposition au soleil.
        </p><br><br>
        <h2><font color="#fab1a0">Maquillage : inspirations, conseils et shopping pour se maquiller</font></h2><br>
        <h3>Envie d'un joli maquillage naturel ou glamour ? Suivez les tutos et astuces de pro pour réaliser un make-up facile et qui en jette, au quotidien comme pour une occasion.</h3><br><br>
        <img src="../image/ma.jpg"><br><br>
        <p>Le  <strong><font color="#fab1a0">maquillage</font></strong> est l'atout essentiel pour sublimer le visage. Rouge à lèvres, fard à paupière, mascara... Les marques de cosmétiques ne cessent d'innover pour nous proposer un choix de textures et de couleurs irrésistibles. Au fil des saisons, des tendances maquillage émergent et certaines deviennent intemporelles. Ainsi, le nude, la bouche rouge ou encore le smoky eye font désormais partie des techniques de maquillage incontournables qui se portent à toutes les occasions.</p>
        </div>
    </div>

    <div class="magazine_b">
    <h2><font color="#fab1a0">TOP DES COIFFURES DE STARS</font></h2>
    <p><strong>Kate Middleton</strong></p><br>
    <img src="../image/ka.jpg"><br>
    <p>À chacune de ses apparitions, l'épouse du Prince William attire tous les regards. Depuis son plus jeune âge, Kate Middleton porte les cheveux longs qu'elle sublime en réalisant chignon, boucles et queue de cheval. Sur le tapis rouge, elle privilégie souvent les cheveux lâchés et les ondulations sur les longueurs avec une raie au milieu ou sur le côté.</p><br><br>
    <p><strong>Céline Dion</strong></p><br>
    <img src="../image/ce.jpg"><br>
    <p>Véritable Caméléon, la diva adore changer de tête. Côté cheveux, elle a tout osé. Cheveux courts, longs, bouclés, carré, blond, bruns... Elle n'a jamais eu peur de tenter une nouvelle coiffure. (Re) découvrez les tops et flops capillaires de Céline Dion. </p><br><br>
    <p><strong>Brigitte Macron</strong></p><br>
    <img src="../image/br.jpeg"><br>
    <p>La première dame a fait de son carré blond une référence. Toujours impeccable, Brigitte Macron ne se laisse aller à aucune extravagance. Seules fantaisies, qu'elle s'accorde parfois, un chignon ou une demi queue-de-cheval. qui  lui vont à ravir.  </p>
</div>
</div>

</div>

   <?php include("footer.php"); ?>

</body>
</html>