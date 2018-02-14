<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-3">
		<h1 class="h4 mb-4"><?= $tv_show['name']; ?></h1>
		<img alt="<?= 'Imagem da série ' . $tv_show['name']; ?>" class="img-fluid w-100 mb-4" src="<?= $tv_show['image_url']; ?>">
		<?php if ($tv_show['short_description']): ?>
			<p><?= $tv_show['short_description']; ?></p>
		<?php endif; ?>
	</div>
	<div class="col-9">

		<?php if ($tv_show['youtube_embed_url']): ?>
			<div class="embed-responsive embed-responsive-16by9 mb-4">
				<iframe allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item" frameborder="0" height="315" width="560" src="<?= $tv_show['youtube_embed_url'] . '?autoplay=1&amp;rel=0'; ?>"></iframe>
			</div>
		<?php else: ?>
			<p>Vídeo indisponível.</p>
		<?php endif; ?>

		<?php if (count($characters)): ?>
			<h2 class="h5 mb-3">Personagens</h2>
			<div class="row">
				<?php foreach ($characters as $character): ?>
					<div class="col-sm-6 col-md-4">
						<div class="card bg-dark text-white">
							<a class="c-inherit" href="<?= site_url('personagem/' . $character['slug']); ?>" title="Ver personagem">
								<img alt="<?= 'Foto do personagem ' . $character['name']; ?>" class="card-img" src="<?= $character['image_url']; ?>">
								<div class="card-img-overlay">
									<h3 class="card-title h6"><?= $character['name']; ?></h3>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

	</div>
</div>
