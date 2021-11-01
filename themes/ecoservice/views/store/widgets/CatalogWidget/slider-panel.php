<?php if($category) : ?>
	<?php foreach ($category as $key => $data) : ?>
		<div class="slider-panel__text"><?= $data->name_short; ?></div>
		<a href="/store" class="btn slider-panel__btn"><?= $data->name; ?></a>
	<?php endforeach; ?>
<?php endif; ?>    
