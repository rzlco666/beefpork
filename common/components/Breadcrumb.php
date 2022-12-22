<?php

namespace common\components;

use yii\base\Widget;
use yii\helpers\Url;

class Breadcrumb extends Widget
{
    public static function levelSatu($title)
    {
        ?>
        <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol>
            </nav>

            <h1 class="page-header-title"><?= $title ?></h1>
        </div>

        <?php
    }

    public static function levelDua($title, $title2, $link2)
    {
        ?>
        <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= $link2 ?>"><?= $title2 ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol>
            </nav>

            <h1 class="page-header-title"><?= $title ?></h1>
        </div>
        <?php
    }

    public static function levelTiga($title, $title2, $link2, $title3, $link3)
    {
        ?>
        <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= $link3 ?>"><?= $title3 ?></a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= $link2 ?>"><?= $title2 ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol>
            </nav>

            <h1 class="page-header-title"><?= $title ?></h1>
        </div>
        <?php
    }

}
