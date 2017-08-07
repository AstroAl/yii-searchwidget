<?php

namespace bibldev\SearchWidget;
use app\models\Category;
use yii\base\Widget;
use yii\helpers\Html;

class SearchWidget extends Widget
{

    public $actionUrl;
    public $viewType;

    public function init()
    {
        parent::init();
        if($this->actionUrl === null) {
            $this->actionUrl = '/article/search';
        }
        if($this->viewType === null) {
            $this->viewType = 'block-search';
        }
    }

    public function run()
    {
        return $this->render($this->viewType, ['actionUrl' => $this->actionUrl]);
    }

}