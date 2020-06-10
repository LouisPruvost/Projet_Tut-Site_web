<?php
require '_header.php'
?><!DOCTYPE html>
<html>
<head>
	<title>Les Nuits Blanches - Boutique</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styleboutique.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="../../../Styles_CSS/main_css.css" type="text/css">
</head>

<body>

<header>

            <div><img id="tete" class="logo" src="img/tete.png"></div>
        </header>

        <nav>
            <div class="div-menu">
                <div class="flex-1">
                    <a href="../../accueil.html"><button class="button button-mat GD"><div class="button-text">ACCUEIL</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/infos.html"><button class="button button-mat GD"><div class="button-text">INFOS</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/artistes.html"><button class="button button-mat GD"><div class="button-text">ARTISTES</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/billetterie.html"><button class="button button-mat GD"><div class="button-text">BILLETTERIE</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/magasin.html"><button class="button button-mat GD"><div class="button-text">MAGASIN</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/contact.php"><button class="button button-mat GD"><div class="button-text">CONTACT</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/presse.html"><button class="button button-mat GD"><div class="button-text">PRESSE</div></button></a>
                </div>
                <div class="flex-1">
                    <a href="../../Autres_Pages/telechargeables.html"><button class="button button-mat GD"><div class="button-text">TELECHARGEABLES</div></button></a>
                </div>
            </div>
        </nav>


<div id="box1">
    <h1 class="entete">MAGASIN</h1>
</div>

<div class="menuboutique">
<div id="flex-items">
<div class="magasin"><a href="index.php">Magasin</a></div>
<div class="panier" id="separateur"><a href="panier.php"><img class="img-caddie" src="img/caddie.png"/></a></div>
<div class="panier"><p>Article(s) :</p></div>
<div class="panier" id="separateur"><span><?= $panier->count(); ?></span></div>
<div class="panier"><p>TOTAL</p></div>
<div class="panier"><span><span><?= number_format($panier->total(),2,',',' '); ?></span> €</span></div>
</div>
</div>
