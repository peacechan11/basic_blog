<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'vendor/bootstrap/css/bootstrap.min.css',
//        'vendor/font-awesome/css/font-awesome.min.css',
//        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
//        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
//        'css/clean-blog.min.css'
    ];
    public $js = [
        'js/clean-blog.min.js',
        'vendor/bootstrap/js/bootstrap.min.js',
        'vendor/popper/popper.min.js',
        'vendor/jquery/jquery.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
