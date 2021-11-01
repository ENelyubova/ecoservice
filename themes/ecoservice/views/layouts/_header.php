<header class="header <?= ($this->action->id=='index' && $this->id=='hp') ? 'header-home' : 'header-page'; ?>">
  <div class="content-site">
    <div class="header-content fl fl-ai-c fl-jc-sb">
      <div class="header-logo">
        <a href="/" class="logo fl fl-ai-c fl-jc-c">
          <img src="<?= $this->mainAssets . '/images/logo.svg' ?>" alt="Экосервис-нефтегаз">
          <span><?= Yii::t("default", "ECOservice <br> NEFTEGAZ"); ?></span>
        </a>
      </div><!-- logo --> 

      <div class="header-menu fl fl-ai-c">
        <!-- <div class="header-menu__main"> -->
          <?php if (Yii::app()->hasModule('menu')) : ?>
            <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
          <?php endif; ?>
        <!-- </div> -->
      </div><!-- menu -->

      <div class="header-nav fl fl-ai-c fl-jc-e">
        <div class="header-search header-search-top">
          <?php $this->widget('application.modules.store.widgets.SearchProductWidget', ['view' => 'search-product-form']); ?>

          <div class="header-search-mobile">
            <a class="fl fl-ai-c fl-jc-c" data-toggle="modal" data-target="#search-form-Modal" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="white">
              <path d="M19.3359 18.2109L14.7344 13.6094C15.875 12.2188 16.5625 10.4375 16.5625 8.49609C16.5625 4.04297 12.9492 0.429688 8.49609 0.429688C4.03906 0.429688 0.429688 4.04297 0.429688 8.49609C0.429688 12.9492 4.03906 16.5625 8.49609 16.5625C10.4375 16.5625 12.2148 15.8789 13.6055 14.7383L18.207 19.3359C18.5195 19.6484 19.0234 19.6484 19.3359 19.3359C19.6484 19.0273 19.6484 18.5195 19.3359 18.2109ZM8.49609 14.957C4.92969 14.957 2.03125 12.0586 2.03125 8.49609C2.03125 4.93359 4.92969 2.03125 8.49609 2.03125C12.0586 2.03125 14.9609 4.93359 14.9609 8.49609C14.9609 12.0586 12.0586 14.957 8.49609 14.957Z" fill=""/>
              </svg>
            </a>
          </div><!-- header-search-mobile -->
        </div><!-- search -->

        <div class="header-lang fl fl-jc-c">
          En
        </div><!-- lang -->

        <div class="header-burger">
          <a href="#menuModal" data-toggle="modal" class="mobile-panel-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="22" viewBox="0 0 47 37" fill="white">
              <rect y="0.536133" width="47" height="2" fill=""/>
              <rect y="17.3547" width="33.5714" height="2" fill=""/>
              <rect y="34.1724" width="47" height="2" fill=""/>
            </svg>
          </a>
        </div>
      </div><!-- nav -->
    </div>
  </div> 
</header>
