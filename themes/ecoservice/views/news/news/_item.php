<div class="news-block__item">
    <div class="news-block__img">
        <?php if ($data->image): ?>
            <picture class="absolute-img-picture">
                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(340, 300, true, null,'image'); ?>" type="image/webp">
                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(340, 300, true, null,'image'); ?>">

                <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
                </picture>
        <?php else : ?>
            <?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg','', ['class' => 'absolute-img-picture']); ?>
        <?php endif; ?>
    </div>
    <a href="<?= Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug]); ?>">
        <div class="news-block__body fl fl-d-c fl-jc-e">
            <div class="news-block__date"><?= date("d.m.Y", strtotime($data->date)); ?></div>
            <div class="news-block__title">
                <?= $data->title; ?>
            </div>
        </div>
    </a>
</div>





