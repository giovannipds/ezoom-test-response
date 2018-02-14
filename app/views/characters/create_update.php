<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $exists = isset($character); ?>

<div class="row">
	<div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">

		<?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

		<?= form_open(current_url()); ?>
			<div class="form-group">
				<label class="sr-only" for="name">Nome</label>
				<input class="form-control form-control-lg" id="name" name="name" placeholder="Nome" required type="text" value="<?= $exists ? $character['name'] : ''; ?>">
			</div>
			<div class="form-group">
				<label class="sr-only" for="tv_show_id">Série</label>
				<select class="form-control form-control-lg" id="tv_show_id" name="tv_show_id">
					<option <?php if ( ! $exists || $exists && $character['tv_show_id'] === NULL): ?> selected <?php endif; ?> value="">Série</option>
					<?php foreach ($tv_shows as $tv_show_item): ?>
						<option <?php if ($exists && $tv_show_item['id'] === $character['tv_show_id']): ?> selected <?php endif; ?> value="<?= $tv_show_item['id']; ?>"><?= $tv_show_item['name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="image_url">Endereço da Imagem</label>
				<input aria-describedby="imageUrlHelpBlock" class="form-control form-control-lg" id="image_url" name="image_url" placeholder="Endereço da Imagem" required type="url" value="<?= $exists ? $character['image_url'] : ''; ?>">
				<span class="form-text" id="imageUrlHelpBlock">
					<abbr title="Exemplo">Ex.</abbr>: <a class="c-inherit" href="http://via.placeholder.com/500x500" target="_blank">http://via.placeholder.com/500x500</a>
				</span>
			</div>
			<div class="row">
				<div class="col-md-5 offset-md-7">
	    			<button class="btn btn-primary btn-block btn-lg mb-3" type="submit"><?= $exists ? 'Atualizar' : 'Inserir'; ?></button>
	    		</div>
    		</div>
		</form>
	</div>
</div>
