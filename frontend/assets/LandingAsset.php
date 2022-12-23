<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap',
        'vendor/bootstrap-icons/font/bootstrap-icons.css',
        'vendor/hs-img-compare/hs-img-compare.css',
    ];
    public $js = [
        'vendor/hs-header/dist/hs-header.min.js',
        'vendor/hs-img-compare/hs-img-compare.js',
        'vendor/hs-go-to/dist/hs-go-to.min.js',
        'js/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
