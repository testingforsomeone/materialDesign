<?php
namespace material\design\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseMaterialAsset;

/**
 * Material AssetBundle
 * @since 0.1
 */
class MaterialAsset extends BaseMaterialAsset
{
    public $sourcePath = '@vendor/irrahub/materaildesign/assets';


    public $css = [
        'css/bootstrap.min.css',
        'css/material-dashboard.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons',
    ];

    public $js = [
        'core/jquery.min.js',
        'core/popper.min.js',
        'core/bootstrap-material-design.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        'js/plugins/chartist.min.js',
        'js/plugins/bootstrap-notify.js',
        'js/material-dashboard.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
