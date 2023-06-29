<?php

use yii\bootstrap5\Breadcrumbs;


$active_tpl = <<<ACTIVE_TPL
<li class="breadcrumb-item active" aria-current="page">
    <span></span>{link}
    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
</li>
ACTIVE_TPL;

?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
        </span>
        <?= Yii::$app->view->title ?>
    </h3>

    <?=
    Breadcrumbs::widget(
        [
            'links' => $this->params['breadcrumbs'] ?? [],
            'activeItemTemplate' => $active_tpl
        ]
    ) ?>
</div>


