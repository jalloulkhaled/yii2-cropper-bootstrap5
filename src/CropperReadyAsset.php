<?php

namespace jalloulkhaled\cropper;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Ercan Bilgin <bilginnet@gmail.com>
 */
class CropperReadyAsset extends AssetBundle
{
    public $sourcePath = '@bilginnet/cropper/assets';
    public $jsOptions = ['position' => View::POS_READY];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}