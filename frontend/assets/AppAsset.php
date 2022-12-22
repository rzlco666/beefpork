<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap',
        'vendor/bootstrap-icons/font/bootstrap-icons.css',
    ];
    public $js = [
        'vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js',
        'vendor/hs-form-search/dist/hs-form-search.min.js',
        'js/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
