<?php if($pages) : ?>
	<div class="catalog-title">
        <h2 class="heading heading-pb"><?= Yii::t("PageModule.page", "Manufactured products"); ?></h2>
        <div class="subheading subheading-pb"><?= $pages->body_short; ?></div>
        <a href="/store" class="btn btn-link"><?= Yii::t("PageModule.page", "All products"); ?></a>
    </div>
<?php endif; ?>

