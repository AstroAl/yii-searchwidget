<?php

namespace bibldev\searchwidget;
use app\models\Category;
use yii\base\Widget;
use yii\helpers\Html;

class SearchWidget extends Widget
{
    public $viewType;
    public $actionUrl = '';
    public $placeHolder = '';
    public $btnText = '';
    public $blockTitle = '';

    public function init()
    {
        parent::init();
        if($this->viewType === null) {
            $this->viewType = 'block-search';
        }
    }

    public function run()
    {
        return $this->render($this->viewType, [
            'actionUrl' => $this->actionUrl,
            'placeHolder' => $this->placeHolder,
            'btnText' => $this->btnText,
            'blockTitle' => $this->blockTitle
        ]);
    }

}
