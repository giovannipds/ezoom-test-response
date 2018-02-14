<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (isset($_SESSION['success_message'])): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<p class="lead mb-0"><?= $_SESSION['success_message']; ?></p>
		<button aria-label="Fechar alerta" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

<?php if (count($tv_shows)): ?>
	<div class="row">
		<?php foreach ($tv_shows as $tv_show_item): ?>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<h2 class="card-header h5">
						<a class="c-inherit" href="<?= site_url('serie/' . $tv_show_item['slug']); ?>" title="Saber mais sobre esta série"><?= $tv_show_item['name']; ?></a>
					</h2>
					<a href="<?= site_url('serie/' . $tv_show_item['slug']); ?>" title="Saber mais sobre esta série">
						<img alt="<?= 'Imagem da série ' . $tv_show_item['name']; ?>" class="card-img-top" src="<?= $tv_show_item['image_url']; ?>">
					</a>
					<div class="card-body">
						<?php if ($tv_show_item['short_description']): ?>
							<p class="card-text"><?= $tv_show_item['short_description']; ?></p>
						<?php endif; ?>
						<div class="row">
							<div class="col-6">
								<a aria-label="Excluir série" href="<?= site_url('series/deletar/' . $tv_show_item['slug']); ?>" class="btn btn-outline-danger" title="Excluir série">
									<span aria-hidden="true" class="material-icons">delete_forever</span>
								</a>
							</div>
							<div class="col-6 text-right">
								<a href="<?= site_url('series/editar/' . $tv_show_item['slug']); ?>" class="btn btn-secondary">Editar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<p class="lead text-center">Não há séries cadastradas, experimente adicionar algumas.</p>
<?php endif; ?>
