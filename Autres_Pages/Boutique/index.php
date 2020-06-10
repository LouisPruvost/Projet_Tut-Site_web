<?php require 'header.php'; ?>

<section class="articles">
		<div>
			<?php $products = $DB->query('SELECT * FROM products'); ?>
			<?php foreach ( $products as $product ): ?>
				<div>
						<a href="#">
							<img class="imgarticle" src="img/<?= $product->id; ?>.jpg">
						</a>
						<div class="description">
							<?= $product->name; ?></br>
							<a href="#" class="prix"><?= number_format($product->price,2,',',' '); ?> €</a>
						</div>
						<a class="add addPanier" href="addpanier.php?id=<?= $product->id; ?>">
							<img class="imgplus" src="img/plus.png"/>
						</a>
				</div>
			<?php endforeach ?>
		</div>
</section>

<?php require 'footer.php'; ?>