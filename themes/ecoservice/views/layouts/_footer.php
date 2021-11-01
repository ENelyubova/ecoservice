<footer class="footer <?= ($this->action->id=='index' && $this->id=='hp') ? 'footer-home' : 'footer-page'; ?>">
    <div class="content-site">
        <div class="footer-panel fl fl-jc-sb">
            <div class="footer-menu footer-menu-product footer-item">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-menu footer-menu-sub footer-item">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-menu footer-menu-all footer-item">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
                <ul>
                    <li><a href="#">English version</a></li>
                </ul>
            </div>
            
            <div class="footer-contacts footer-item">
                <div class="footer-contacts-item">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                    <?php endif; ?>
                </div>

                <div class="footer-contacts-item footer-contacts-email">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                    <?php endif; ?>
                </div>

                <div class="footer-contacts-item">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'address']); ?>
                    <?php endif; ?>
                </div>

                <div class="dc56">
                    <p><?= Yii::t("default", "Made in"); ?></p>
                    <a href="https://dcmedia.ru/"></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom fl fl-ai-c fl-jc-sb">
            <div class="footer-logo">
                <a href="/" class="logo fl fl-ai-c">
                    <img src="<?= $this->mainAssets . '/images/logo.svg' ?>" alt="Экосервис-нефтегаз">
                    <span><?= Yii::t("default", "ECOservice <br> NEFTEGAZ"); ?></span>
                </a>
            </div>
            <div class="footer-info"> 
                © <?= date('Y'); ?> <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'legal-info']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
