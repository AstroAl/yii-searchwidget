<?php

use bibldev\searchwidget\SearchAssets;
use yii\helpers\Url;
SearchAssets::register($this);
?>

<form class="form-inline my-2 my-lg-0" action="<?= $actionUrl ?>" method="get">
    <input class="form-control mr-sm-2" type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken()?>" />
    <input class="form-control mr-sm-2 search-query" type="text" name="query" placeholder="Search for...">
    <input class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit" value="Искать!"/>
</form>
