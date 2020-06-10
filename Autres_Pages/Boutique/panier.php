<?php require 'header.php'; ?>

<div class="selection">
<form method="post" action="panier.php">

	<?php
	$ids = array_keys($_SESSION['panier']);
	if(empty($ids)){
		$products = array();
	}else{
		$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
	}
	foreach($products as $product):
	?>
	<div class="MonPanier">
		<a href="#"><img src="img/<?= $product->id; ?>.jpg" height="53"></a>
		<span><?= $product->name; ?></span>
		<span><?= number_format($product->price,2,',',' '); ?> €</span>
		<span><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>" size="1"></span>
		<span>TTC : <?= number_format($product->price * 1.196,2,',',' '); ?> €</span>
		<span>
			<a href="panier.php?delPanier=<?= $product->id; ?>"><img src="img/del.png"></a>
		</span>
	</div>
	<?php endforeach; ?>
</div>

<div class="prixtotal">
<div class="rowtotal">
	PRIX TTC : <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
</div>
<div class="flex-1">
    <button class="button button-mat GD"><div class="button-text">Acheter</div>
</button>
</div>

<?php require 'footer.php'; ?>