<?php

use bibldev\searchwidget\SearchAssets;
SearchAssets::register($this);
?>

<div class="card my-4">
    <h5 id="search-cart-header" class="card-header"><?= $blockTitle ?></h5>
    <div class="card-block">
        <form action="<?= $actionUrl ?>" method="get">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken()?>" />
            <input id="block-field" type="text" class="search-query form-control" name="query" placeholder="<?= $placeHolder ?>">
            <input id="block-search-btn" type="submit" class="btn btn-secondary btn-search search-btn" value="<?= $btnText ?>"/>
        </form>
    </div>
</div>
