<?php

use yii\bootstrap5\Html;

$identity = Yii::$app->user->identity;
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <?php if (!Yii::$app->user->isGuest): ?>
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <?= Html::img('@web/theme/images/faces/face1.jpg') ?>
                        <span class="login-status busy"></span> <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2"><?= $identity != null ? $identity->username : 'Guest' ?></span>
                        <span class="text-secondary text-small"><?= $identity != null ? $identity->id : 'Guest' ?></span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
        <?php endif; ?>
        <li class="nav-item">
            <?= Html::a('<span class="menu-title">Dissemination events</span><i class="mdi mdi-database-search menu-icon"></i>',
                ['/dissemination-events'], [
                    'class' => 'nav-link'
                ]
            ) ?>
        </li>
    </ul>
</nav>
