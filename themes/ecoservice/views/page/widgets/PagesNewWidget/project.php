<?php if($pages) : ?>
	<div class="project pt">
		<div class="content-site">
			<h2 class="heading heading-block"><?= $pages->title_short; ?></h2>
			<div class="project-block fl fl-w">
				<div class="project-nav">
					<div class="arrows fl "></div>
					<!-- <div class="subheading subheading-pb"><?= Yii::t("PageModule.page", "Scroll with arrows"); ?></div> -->
					<a href="<?= Yii::app()->createUrl('page/page/view', ['slug' => $pages->slug]); ?>" class="btn btn-link"><?= Yii::t("PageModule.page", "All projects"); ?></a>
				</div>
				<div class="project-carousel">
					<div class="project-slider slick-slider">
						<?php foreach ($pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']) as $key => $item) : ?>
							<div class="project-slider-wrap fl fl-ai-c">
								<div class="project-slider__item fl fl-d-c fl-jc-fe">
									<a href="<?= Yii::app()->createUrl('page/page/view', ['slug' => $item->slug]); ?>">
										<picture class="absolute-img-picture">
							            	<source media="(min-width: 641px)" srcset="<?= $item->getImageUrlWebp(0, 0, true, null, 'image'); ?>" type="image/webp">
								            <source media="(min-width: 641px)" srcset="<?= $item->getImageNewUrl(0, 0, true, null, 'image'); ?>">
								            <source media="(min-width: 1px)" srcset="<?= $item->getImageUrlWebp(360, 330, false, null, 'image'); ?>" type="image/webp">
								            <source media="(min-width: 1px)" srcset="<?= $item->getImageNewUrl(360, 330, false, null, 'image'); ?>">
														
								            <img src="<?= $item->getImageNewUrl(0, 0, true, null, 'image'); ?>" alt="">
								        </picture> 
								        <div class="project-slider__text fl fl-ai-fe">
								        	<div class="project-slider__title"><?= $item->title; ?></div>
								        </div>
									</a>
								</div>
							</div>
			            <?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

