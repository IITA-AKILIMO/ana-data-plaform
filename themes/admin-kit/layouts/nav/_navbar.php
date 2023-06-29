<?php

use yii\helpers\Html;

$identity = Yii::$app->user->identity;

?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= Yii::$app->homeUrl ?>">
            <?= Html::img('@web/theme/images/logo.svg') ?>
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?= Yii::$app->homeUrl ?>">
            <?= Html::img('@web/theme/images/logo-mini.svg') ?>
        </a>
    </div>


    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <?php if (!Yii::$app->user->isGuest): ?>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="nav-profile-img">
                            <?= Html::img('@web/theme/images/faces/face1.jpg') ?>
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"><?= $identity != null ? $identity->username : 'Guest' ?></p>
                        </div>
                    </a>

                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-face-profile mr-2 text-success"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <?= Html::a(
                            '<i class="mdi mdi-logout mr-2 text-primary"></i> Log out',
                            ['/site/logout'],
                            ['data-method' => 'post', 'class' => 'dropdown-item']
                        ) ?>
                    </div>
                </li>
            </ul>
        <?php endif; ?>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>