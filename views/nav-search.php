<?php

use bibldev\searchwidget\SearchAssets;
SearchAssets::register($this);
?>

<form class="form-inline my-2 my-lg-0" action="<?= $actionUrl ?>" method="get">
    <input class="form-control mr-sm-2" type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken()?>" />
    <input id="nav-field" class="form-control mr-sm-2 search-query" type="text" name="query" placeholder="<?= $placeHolder ?>">
    <input id="nav-search-btn" class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit" value="<?= $btnText ?>"/>
</form>
