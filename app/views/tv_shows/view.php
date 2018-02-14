<div class="row">
	<div class="col-3">
		<h1 class="h4 mb-4"><?= $tv_show['name']; ?></h1>
		<img alt="<?= 'Imagem da série ' . $tv_show['name']; ?>" class="img-fluid w-100 mb-4" src="<?= $tv_show['image_url']; ?>">
		<p><?= $tv_show['short_description']; ?></p>
	</div>
	<div class="col-9">
		<?php if ($tv_show['youtube_embed_url']): ?>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item" frameborder="0" height="315" width="560" src="<?= $tv_show['youtube_embed_url'] . '?autoplay=1&amp;rel=0'; ?>"></iframe>
			</div>
		<?php else: ?>
			<p>Vídeo indisponível.</p>
		<?php endif; ?>
	</div>
</div>
