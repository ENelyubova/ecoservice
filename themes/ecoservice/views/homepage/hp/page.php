 <?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->meta_description) ? $page->meta_description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->meta_keywords) ? $page->meta_keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<div class="slider">
    <div class="slider-block">
        <?php $this->widget('application.modules.slider.widgets.SliderWidget', [
            'category_id' => 1,
            'view' => 'slider-widget',
        ]); ?>
    </div>
    <div class="slider-bottom-panel slider-panel">
        <div class="content-site fl">
            <div class="slider-panel__item slider-panel__item-gray fl fl-d-c fl-jc-sb">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 20,
                    'view' => 'slider-panel-product'
                ]); ?>
            </div>
            <div class="slider-panel__item slider-panel__item-green fl fl-d-c fl-jc-sb">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 11,
                    'view' => 'slider-panel'
                ]); ?>
            </div>
            <div class="slider-panel__item slider-panel__item-briz fl fl-d-c fl-jc-sb">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 3,
                    'view' => 'slider-panel'
                ]); ?>
            </div>
        </div>
    </div>
</div>

<div class="catalog pt">
    <div class="content-site fl fl-w fl-jc-sb">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 20,
            'view' => 'catalog'
        ]); ?>
        <div class="catalog-block fl fl-w fl-jc-sb">
            <?php $this->widget('application.modules.store.widgets.CatalogWidget', [
                'view' => 'catalog-home'
            ]); ?>
        </div>
    </div>
</div>

<?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
    'id'=> 14,
    'view' => 'project'
]); ?>

<div class="about pt">
    <div class="content-site">
        <div class="about-info fl fl-w fl-jc-sb">
            <?= $page->getAttributeValue('about')['value']; ?>
        </div>
        <div class="about-gallery fl fl-ai-fe fl-jc-sb">
            <div class="about-nav">
                <div class="arrows"></div>
            </div>
            <!-- Последовательный переход -->
            <?php $this->widget('application.modules.slider.widgets.SliderWidget', [
                'category_id' => 2,
                'view' => 'about-widget-series',
            ]); ?>

            <?php /*$this->widget('application.modules.gallery.widgets.SlickMyWidget', [
                'galleryId' => 1,
                'slickClass' => 'aboutSlider slick-slider',
                'view' => 'slick',
            ]); */?>
            <!-- ----------- -->

            <!-- Одним фото -->
            <?php /*$this->widget('application.modules.gallery.widgets.CustomFieldWidget', [
                'id' => $page->id,
                'code' => 'about',
                'view' => 'about-gallery'
            ]); */?>

            <!-- Анимация -->
            <?php /*$this->widget('application.modules.slider.widgets.SliderWidget', [
                'category_id' => 2,
                'view' => 'about-widget',
            ]); */?>
        </div>
    </div>
</div>

<div class="partners pt pb">
    <div class="content-site">
        <div class="heading-block fl fl-w fl-ai-c fl-jc-sb">
            <div class="item-wrap">
                <h2 class="heading"><?= $page->getAttributeValue('partners')['name']; ?></h2>
            </div>
            <div class="item-wrap fl fl-ai-c">
                <div class="subtitle"><?= $page->getAttributeValue('partners')['value']; ?></div>
                <div class="partners-nav">
                    <div class="arrows fl"></div>
                </div>
            </div>
        </div>
        <?php $this->widget('application.modules.gallery.widgets.CustomFieldWidget', [
            'id' => $page->id,
            'code' => 'partners',
            'view' => 'partners-gallery'
        ]); ?>
    </div>
</div>

<?php $this->widget("application.modules.news.widgets.MyNewsWidget", [
    'view' => 'news-home',
]); ?>

<div class="contacts">
    <div class="content-site">
        <div class="contacts-wrap">
            <div class="heading-block fl fl-w fl-ai-bl">
                <h2 class="heading heading-white item-margin"><?= Yii::t("PageModule.page", "Contacts"); ?></h2>
                <a href="/kontakty" class="btn btn-link item-margin"><?= Yii::t("PageModule.page", "All contacts"); ?></a>
            </div>
            <div class="contacts-block fl fl-w fl-jc-sb">
                <div class="contacts-block__item contacts-item">
                    <div class="contacts-item__email">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="contacts-item__address">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'address']); ?>
                        <?php endif; ?>
                    </div>
                    <a href="/kontakty#map" class="btn btn-link"><?= Yii::t("PageModule.page", "To show on the map"); ?></a>
                </div>
                <div class="contacts-block__item contacts-item contacts-item-pr">
                    <div class="contacts-item__docs panel-docs panel-docs-green">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'document']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="contacts-item__phone">
                        <?php if (Yii::app()->hasModule('contentblock')): ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                        <?php endif; ?>
                    </div>
                    <p><?= $page->body_short; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>


