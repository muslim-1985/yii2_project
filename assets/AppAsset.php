<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
            'css/bootstrap.css',
            'css/style.css',
            'css/font-awesome.min.css',
    ];
    public $js = [
        'js/retina-1.1.0.js',
        'js/jquery.hoverdir.js',
        'js/jquery.hoverex.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.isotope.min.js',
        'js/custom.js',
        'js/modernizr.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
