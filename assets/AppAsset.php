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
        'css/boostrap.min.css',
        'css/adminlte.min.css',
        'plugins/jqvmap/jqvmap.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'plugins/summernote/summernote-bs4.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'plugins/fontawesome-free/css/all.min.css',
        'css/site.css',
    ];
    public $js = [
        'plugins/jquery-ui/jquery-ui.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/chart.js/Chart.min.js',
        'plugins/sparklines/sparkline.js',
        'plugins/jqvmap/jquery.vmap.min.js',
        'plugins/jqvmap/maps/jquery.vmap.world.js',
        'plugins/jquery-knob/jquery.knob.min.js',
        'plugins/moment/moment.min.js',
        'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'plugins/summernote/summernote-bs4.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'js/adminlte.js',
        'js/pages/dashboard.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
