<?php

use yii\helpers\Html;

?>
<footer class="container-lg text-center py-10">
    <!-- Socials -->
    <ul class="list-inline mb-3">
        <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle"
               href="https://www.facebook.com/">
                <i class="bi-facebook"></i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://twitter.com/">
                <i class="bi-twitter"></i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle"
               href="https://github.com/">
                <i class="bi-github"></i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle"
               href="https://www.instagram.com//">
                <i class="bi-instagram"></i>
            </a>
        </li>
    </ul>
    <!-- End Socials -->

    <p class="mb-0">&copy; <?= Html::encode(Yii::$app->name) ?>. <?= date('Y') ?> <?= Html::encode(Yii::$app->name) ?>.
        All rights reserved.</p>
</footer>