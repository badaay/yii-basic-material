<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$controller = '';
$view = '';
if ($this->context instanceof \yii\base\Controller) {
    $controller = $this->context->id;
    $view = $controller . '-' . $this->context->action->id;
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <?= $content ?>
            </div>
        </div>

    </div>
</div>
