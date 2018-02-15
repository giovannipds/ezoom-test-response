<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-md-4 col-lg-3">
		<h1 class="h2"><?= $character['name']; ?></h1>
		<?php if (isset($tv_show)): ?>
			<p class="h4 text-primary"><?= $tv_show['name']; ?></p>
		<?php endif; ?>
	</div>
	<div class="col-md-8 col-lg-9">
		<a href="<?= $character['image_url']; ?>" target="_blank" title="Abrir imagem original">
			<img alt="<?= 'Imagem da série ' . $character['name']; ?>" class="img-fluid w-100 mb-5" src="<?= $character['image_url']; ?>">
		</a>
	</div>
</div>
