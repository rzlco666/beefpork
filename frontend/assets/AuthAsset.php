<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap',
        'vendor/bootstrap-icons/font/bootstrap-icons.css',
        'vendor/tom-select/dist/css/tom-select.bootstrap5.css',
    ];
    public $js = [
        'vendor/hs-toggle-password/dist/js/hs-toggle-password.js',
        'vendor/tom-select/dist/js/tom-select.complete.min.js',
        'js/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
