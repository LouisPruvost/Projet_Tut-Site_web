<?php
require '_header.php'
?><!DOCTYPE html>
<html>
<head>
	<title>Les Nuits Blanches - Boutique</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styleboutique.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

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
