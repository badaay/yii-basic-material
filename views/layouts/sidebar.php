<?php
use yii\helpers\Html;
use yii\widgets\Menu;
?>
 <div class="sidebar" data-color="purple" data-image="<?= $directoryAsset ?>/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
                <?= Html::a( Yii::$app->name , Yii::$app->homeUrl, ['class' => 'simple-text']) ?>
			</div>

	    	<div class="sidebar-wrapper">
                <?php 
                    echo Menu::widget([
                        'items' => [
                            // Important: you need to specify url as 'controller/action',
                            // not just as 'controller' even if default action is used.
                            ['label' => '<i class="material-icons">dashboard</i> Home', 'url' => ['site/index']],
                            // 'Products' menu item will be selected as long as the route is 'product/index'
                            ['label' => '<i class="material-icons">library_books</i> Products', 'url' => ['product/index']],
                            ['label' => '<i class="material-icons">person</i> Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            [
                                'label' => '<i class="material-icons">library_books</i> Products',
                                'url' => ['product/index'],
                                'options'=>['class'=>'dropdown'],
                                'template' => '<a href="{url}" class="href_class">{label}</a>',
                                'items' => [
                                    ['label' => 'New Arrivals', 'url' => ['product/new']],
                                    ['label' => 'Most Popular', 'url' => ['product/popular']],
                                ]
                            ],
                        ],
                        'encodeLabels' => false,
                        'activateParents'=>true,
                        'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>",
                        'linkTemplate' => '<a href="{url}" class="nav-link"><p>{label}</p></a>',
                        'activeCssClass'=>'active',
                        'options' => [
                            'class' => 'nav',
                            // 'id'=>'navbar-id',
                            // 'style'=>'font-size: 14px;',
                            // 'data-tag'=>'yii2-menu',
                        ],

                    ]);
                ?>
	           
	    	</div>
	    </div>