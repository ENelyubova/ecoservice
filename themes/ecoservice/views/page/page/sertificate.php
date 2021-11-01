<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->meta_title ?: $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->meta_description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->meta_keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<div class="page-txt pb">
	<div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
    
        <div class="heading-block fl fl-w fl-ai-c">
            <h1 class="heading news-heading"><?= $model->title; ?></h1>
            <div class="sertificate-nav">
                <div class="arrows"></div>
            </div>
        </div>

        <div class="sertificate-carousel slick-slider">
            <?php $images = $model->photos; ?>
            <?php if($images) : ?>
                <?php foreach ($images as $key => $image) : ?>
                    <div class="sertificate__item">
                        <a class="" data-fancybox="sertificate" href="<?= $image->getImageUrl(); ?>">
                            <picture class="absolute-img-pictur">
                                <source media="(min-width: 400px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null, 'image'); ?>" type="image/webp">
                                <source media="(min-width: 400px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null, 'image'); ?>">
                                <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(360, 330, false, null, 'image'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(360, 330, false, null, 'image'); ?>">
                                            
                                <img src="<?= $image->getImageNewUrl(0, 0, true, null, 'image'); ?>" alt="">
                            </picture> 
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

