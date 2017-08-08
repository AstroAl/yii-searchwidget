<?php
namespace bibldev\searchwidget;
use yii\web\AssetBundle;

class SearchAssets extends AssetBundle
{

    public $sourcePath = '@bibldev/searchwidget/assets';

    public $js = [
        'js/main.js'
    ];

    public $css = [
        'css/main.css'
    ];
}
