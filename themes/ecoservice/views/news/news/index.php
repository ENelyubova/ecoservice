<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>

<div class="page-news pb">
	<div class="content-site">
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
		            'links' => $this->breadcrumbs,
		    ]); ?>
	<!-- </div> -->
		<h1 class="heading heading-block"><?= Yii::t('NewsModule.news', 'News') ?></h1>
		<?php $this->widget('application.components.FtListView', [
			'id'=> 'news-box',
		    'dataProvider' => $dataProvider,
	        'itemView' => '_item',
	        'summaryText' => '',
	        'template'=>'{items} {pager}',
	        'itemsCssClass' => 'news-block',
		    'htmlOptions' => [
		        // "class" => ""
		    ],
		    'pagerCssClass' => 'pagination-box',
		    // 'emptyText' => '',
		    // 'emptyTagName' => 'div',
		    'pager' => [
		        'class' => 'application.components.ShowMorePager',
		        'buttonText' => 'Показать еще',
		        'wrapTag' => 'div',
		        'htmlOptions' => [
		            'class' => 'btn btn-green'
		        ],
		        'wrapOptions' => [
		            'class' => 'news-btn-all'
		        ],
		    ]
		]); ?>
	</div>
</div>

