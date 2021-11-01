
<?php $this->beginContent('//layouts/yupe'); ?>
<body class="page_fix">

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

    <div class="container-site">
        <div class="wrapper">
            <div class="wrap1">
                <?php $this->renderPartial('//layouts/_header'); ?>
                <?= $this->decodeWidgets($content); ?>
            </div>
            
            <div class="wrap2">
                <?php $this->renderPartial('//layouts/_footer'); ?>
            </div>
        </div>
    </div>

<?php $this->endContent(); ?>