<footer class="footer-404">
    <div class="content-site">
        <div class="footer-panel fl fl-jc-sb">
            <div class="footer-404__info footer-404__item"> 
                © <?= date('Y'); ?> <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'legal-info']); ?>
                <?php endif; ?>
            </div>
             <div class="footer-404__contacts footer-404__item fl fl-d-c">
                <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                <?php endif; ?>
                <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-404__dc56 dc56 footer-404__item">
                <p><?= Yii::t("default", "Made in"); ?></p>
                <a href="https://dcmedia.ru/"></a>
            </div>
        </div>
    </div>
</footer>
