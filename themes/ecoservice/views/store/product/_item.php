<div class="product-block__item catalog-list__item fl fl-w fl-jc-sb">
	<div class="product-block__info catalog-list__text">
		<a href="<?= ProductHelper::getUrl($data); ?>" class="product-block__name catalog-list__name"><?= $data->name; ?></a>
		<div class="product-block__desc"><?= $data->short_description; ?></div>
		<a class="product-block__btn catalog-list__btn btn btn-link" href="<?= ProductHelper::getUrl($data); ?>"><?= Yii::t("StoreModule.store", "More details"); ?></a>
	</div>

	<?php $images = $data->getImages(); ?>
	<?php if($images): ?>
	    <div class="product-block__gallery catalog-list__img">
	    	<div class="carousel-wrapper">
	    		<div class="catalog-carousel catalog-slider slick-slider">
	    			<?php foreach ($images as $key => $image) : ?>
				    	<div class="product-block__img catalog-carousel__item">
							<picture class="absolute-img-picture">
				    	        <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'name'); ?>" type="image/webp">
				    	        <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'name'); ?>">
				    	    
				    	        <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(285, 200, true, null,'name'); ?>" type="image/webp">
				    	        <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(285, 200, true, null,'name'); ?>">
				    	    
				    	        <img src="<?= $image->getImageNewUrl(285, 200, true, null,'name'); ?>">
				    	    </picture>
	    				</div>
	    			<?php endforeach ?>
	    		</div>
	    	</div>
	    </div>
	<?php endif; ?>
</div>
