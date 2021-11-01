<?php if($pages) : ?>
    <div class="slider-panel__text"><?= $pages->title_short; ?></div>
	<a href="/store" class="btn slider-panel__btn"><?= Yii::t("PageModule.page", "Products"); ?></a>
<?php endif; ?>

