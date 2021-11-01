<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />

    <link rel="apple-touch-icon" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-180x180.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

    <?php if ($this->canonical) : ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <?php
        Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
        Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/main.min.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/modernizr.js', CClientScript::POS_END);
    ?>

    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>


<!-- content -->
    <?= $content; ?>
<!-- content end-->


<?php /*$this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
   'id' => 'productModal',
   'formClassName' => 'LightForm',
   'buttonModal' => false,
   'titleModal' => 'Узнать <span>стоимость</span>',
   // 'subTitleModal' => 'Оставьте заявку, и мы Вам перезвоним!',
   'showCloseButton' => false,
   'isRefresh' => true,
   'showAttributeBody' => false,
   'eventCode' => 'uznat-stoimost',
   'successKey' => 'uznat-stoimost',
   'modalHtmlOptions' => [
       'class' => 'modal-my modal-my-xs',
   ],
   'formOptions' => [
       'htmlOptions' => [
           'class' => 'form-my',
       ]
   ],
   'modelAttributes' => [
       'theme' => "",
   ],
   'view' => 'light-feedback-widget'
]) */?>
<!-- Написать -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'writeUsModal',
    'formClassName' => 'StandartForm',
    'buttonModal' => false,
    'titleModal' => 'Напишите нам',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'showAttributeEmail' => false,
    'showAttributeBody' => true,
    'eventCode' => 'napisat-nam',
    'successKey' => 'napisat-nam',
    'modalHtmlOptions' => [
        'class' => 'modal-my modal-my-xs',
    ],
    'formOptions' => [
        'htmlOptions' => [
            'class' => 'form-my',
        ]
    ],
    'modelAttributes' => [
        'theme' => 'Написать нам',
    ],
]) ?>

<div id="messageModal" class="modal modal-my modal-my-xs fade" role="dialog">
    <div class="modal-dialog modal-dialog-msg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-header">
                        <div data-dismiss="modal" class="modal-close modal-close-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.5607 2.56066C20.1464 1.97487 20.1464 1.02513 19.5607 0.43934C18.9749 -0.146447 18.0251 -0.146447 17.4393 0.43934L10 7.87868L2.56066 0.43934C1.97487 -0.146447 1.02513 -0.146447 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L7.87868 10L0.43934 17.4393C-0.146447 18.0251 -0.146447 18.9749 0.43934 19.5607C1.02513 20.1464 1.97487 20.1464 2.56066 19.5607L10 12.1213L17.4393 19.5607C18.0251 20.1464 18.9749 20.1464 19.5607 19.5607C20.1464 18.9749 20.1464 18.0251 19.5607 17.4393L12.1213 10L19.5607 2.56066Z" fill="black"/></svg>
                        </div>
                        <div class="modal-my-heading">
                            <h3><?= Yii::t("default", "Notification"); ?></h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <?= Yii::t("default", "Your application has been successfully sent."); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Модалка меню -->
<div id="menuModal" class="modal modal-my modal-my-xs fade" role="dialog">
    <div class="modal-dialog modal-dialog-menu" role="document">
        <div class="modal-menu fl">
            <div class="modal-menu__img"></div>
            <div class="modal-menu__content fl fl-d-c fl-jc-sb">
                <div class="modal-menu__header fl fl-ai-c fl-jc-sb">
                    <div class="modal-menu-link fl fl-ai-c">
                        <div class="modal-menu__logo">
                            <a href="/" class="logo modal-logo fl fl-ai-c fl-jc-c">
                              <img src="<?= $this->mainAssets . '/images/logo.svg' ?>" alt="Экосервис-нефтегаз">
                              <span><?= Yii::t("default", "ECOservice <br> NEFTEGAZ"); ?></span>
                            </a>
                        </div><!-- logo --> 
                        <div class="modal-menu__phone">
                            <?php if (Yii::app()->hasModule('contentblock')): ?>
                                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                            <?php endif; ?>
                        </div>
                        <div class="modal-menu__email">
                            <?php if (Yii::app()->hasModule('contentblock')): ?>
                                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="fl fl-ai-c">
                        <div class="header-search">
                            <?php $this->widget('application.modules.store.widgets.SearchProductWidget', ['view' => 'search-product-form']); ?>
                        </div><!-- search -->
                        
                        <div class="header-lang fl fl-jc-c">
                            En
                        </div><!-- lang -->
                        
                        <div class="header-burger">
                            <div data-dismiss="modal" class="modal-close fl fl-ai-c fl-jc-c">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 37 37" fill="none">
                                <path d="M1 35.5L18.25 18.25M35.5 1L18.25 18.25M18.25 18.25L1 1M18.25 18.25L35.5 35.5" stroke="#333333" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-menu__nav menu-nav fl fl-d-c">
                    <?php if (Yii::app()->hasModule('menu')) : ?>
                        <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                    <?php endif; ?>
                </div>
                <div class="modal-menu__footer">
                    <ul>
                        <li><a href="/politika-konfidencialnosti"><?= Yii::t("default", "Privacy policy"); ?></a></li>
                        <li><a href="#">English version</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //Модалка для поиска ?>
<?php $this->widget('application.modules.store.widgets.SearchProductWidget', [
    'view' => 'search-product-form-modal'
]); ?>

<?php $fancybox = $this->widget(
    'gallery.extensions.fancybox3.AlFancybox', [
        'target' => '[data-fancybox]',
        'lang'   => 'ru',
        'config' => [
            'animationEffect' => "fade",
            'buttons' => [
                "zoom",
                "close",
            ]
        ],
    ]
); ?>

<div class="ajax-loading"></div>
<!-- container end -->

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>
</body>
</html>