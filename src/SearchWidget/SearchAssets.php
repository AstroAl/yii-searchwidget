<?php
namespace bibldev\searchwidget;
use yii\web\AssetBundle;

class SearchAssets extends AssetBundle
{

    public $sourcePath = '@bibldev/assets';

    public $js = [
        'js/main.js'
    ];

    public $css = [
        'css/main.css'
    ];
}
