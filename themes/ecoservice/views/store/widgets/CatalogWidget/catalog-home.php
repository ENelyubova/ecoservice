<?php if($category) : ?>
	<?php foreach ($category as $key => $data) : ?>
		<div class="catalog-block__item catalog-item">
            <a href="<?= $data->getCategoryUrl(); ?>" class="catalog-item__name"><?= $data->name; ?></a>
            <?= $data->subtitle; ?>
		</div> 
	<?php endforeach; ?>
<?php endif; ?>    
