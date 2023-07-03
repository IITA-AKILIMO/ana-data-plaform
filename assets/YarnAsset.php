<?php

namespace app\assets;

use yii\web\View;

class YarnAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower';
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
    public $publishOptions = [
        //'forceCopy'=>true,
    ];
    public $css = [
    ];

    public $js = [
        'perfect-scrollbar/dist/perfect-scrollbar.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}