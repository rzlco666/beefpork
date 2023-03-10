<?php

/** @var yii\web\View $this */

use common\components\Breadcrumb;
use yii\helpers\Url;

$this->title = 'Dashboard';
?>
<div class="page-header">
    <?= Breadcrumb::levelDua($this->title, 'General', Url::to(['/#'])) ?>
</div>
<div class="row justify-content-sm-center text-center py-10">
    <div class="col-sm-7 col-md-5">
        <img class="img-fluid mb-5" src="<?= Url::home() ?>svg/illustrations/oc-collaboration.svg"
             alt="Image Description" data-hs-theme-appearance="default">
        <img class="img-fluid mb-5" src="<?= Url::home() ?>svg/illustrations-light/oc-collaboration.svg"
             alt="Image Description" data-hs-theme-appearance="dark">

        <h1>Hello, nice to see you!</h1>
        <p>You are now minutes away from creativity than ever before. Enjoy!</p>

        <a class="btn btn-primary" href="./layouts/index.html">Create my first campaign</a>
    </div>
</div>
<!-- End Row -->
