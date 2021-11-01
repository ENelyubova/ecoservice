<?php if($pages) : ?>
    <div class="slider-panel__text"><?= $pages->title_short; ?></div>
	<a href="<?= Yii::app()->createUrl('page/page/view', ['slug' => $pages->slug]); ?>" class="btn slider-panel__btn"><?= $pages->title; ?></a>
<?php endif; ?>

