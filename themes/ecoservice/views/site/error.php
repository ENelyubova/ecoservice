<?php 
$this->title = Yii::t('default', 'Error') . ' ' . $error['code'];

$this->layout = "//layouts/404";

?>

<div class="page-error">
    <div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
        <div class="page-error-wrap fl fl-ai-c">
            <div class="page-error__img">
                <img src="/uploads/image/404.svg" alt="error_404">
            </div>
            <div class="page-error__text">
                <p><?= Yii::t("default", "Sorry, this page could not be found or is no longer available. Use the menu button or go to the main page."); ?></p>
                <a href="/"><?= Yii::t("default", "To the main"); ?></a>
            </div>
        </div>
    </div>
</div>