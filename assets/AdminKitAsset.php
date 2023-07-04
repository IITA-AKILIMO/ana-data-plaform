<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AdminKitAsset extends AssetBundle
{
    public $baseUrl = '@web/theme';

    public $css = [
        'vendors/iconfonts/mdi/css/materialdesignicons.min.css',
        'vendors/css/vendor.bundle.base.css',
        'css/style.css',
//        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap'
    ];

    public $js = [
//        'js/hoverable-collapse.js',
        'vendors/js/vendor.bundle.base.js',
//        'vendors/js/vendor.bundle.addons.js',
        'js/off-canvas.js',
        'js/misc.js',
//        'js/dashboard.js',
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'app\assets\YarnAsset',
    ];
}