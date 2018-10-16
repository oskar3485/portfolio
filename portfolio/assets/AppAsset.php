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
        "css/bootstrap.min.css" ,
        "css/font-awesome.min.css" ,
        "css/templatemo_style.css",
        "css/circle.css",
         "css/jquery.bxslider.css",
        "css/nivo-slider.css",
        'http://fonts.googleapis.com/css?family=Raleway:400,100,600',
    ];
    public $js = [
      // "js/jquery-1.10.2.min.js",
      //  "js/bootstrap.min.js",
        "js/jquery.cycle2.min.js",
        "js/jquery.cycle2.carousel.min.js",
        "js/jquery.nivo.slider.pack.js",
        "js/jquery.cookie.js",
        "js/modernizr.custom.js",
        "js/lib/jquery.mousewheel-3.0.6.pack.js",
        'js/stickUp.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',

    ];
}
