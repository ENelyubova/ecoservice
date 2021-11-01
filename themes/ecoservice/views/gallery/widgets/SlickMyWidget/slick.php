<div class="slider-main">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-item',
            'template'      => "{items}",
               'itemsCssClass' => $slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
</div>

<div class="img-style"></div>

<div class="about-thumb1">
    <div class="about-thumb-carousel1">
        <?php foreach ($dataProvider->getData() as $data): ?>
            <div class="about-thumb-block__item">
                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $data->image->getImageUrlWebp(0, 0, true, null,'file'); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $data->image->getImageNewUrl(0, 0, true, null,'file'); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $data->image->getImageUrlWebp(400, 400, true, null,'file'); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $data->image->getImageNewUrl(400, 400, true, null,'file'); ?>">

                    <img src="<?= $data->image->getImageNewUrl(0, 0, true, null,'file'); ?>" alt="<?= $data->image->alt; ?>">
                </picture>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="about-thumb2">
    <div class="about-thumb-carousel2">
        <?php foreach ($dataProvider->getData() as $data): ?>
            <div class="about-thumb-block__item">
                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $data->image->getImageUrlWebp(0, 0, true, null,'file'); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $data->image->getImageNewUrl(0, 0, true, null,'file'); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $data->image->getImageUrlWebp(400, 400, true, null,'file'); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $data->image->getImageNewUrl(400, 400, true, null,'file'); ?>">

                    <img src="<?= $data->image->getImageNewUrl(0, 0, true, null,'file'); ?>" alt="<?= $data->image->alt; ?>">
                </picture>
            </div>
        <?php endforeach; ?>
    </div>
</div>


