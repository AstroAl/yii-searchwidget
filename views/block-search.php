<?php

use bibldev\searchwidget\SearchAssets;
use yii\helpers\Url;
SearchAssets::register($this);
?>

<div class="card my-4">
    <h5 id="search-cart-header" class="card-header">Поиск по сайту</h5>
    <div class="card-block">
        <form action="<?= $actionUrl ?>" method="get">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken()?>" />
            <input type="text" class="search-query form-control" name="query" placeholder="Search for...">
            <input type="submit" class="btn btn-secondary btn-search search-btn" value="Искать!"/>
        </form>
    </div>
</div>
