<?php

use common\models\Profile;
use FrosyaLabs\Lang\IdDateFormatter;
use kartik\detail\DetailView;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/* @var $this yii\web\View */
/* @var $model common\models\Dataset */
$profile = Profile::find()->where(['id_user' => $model->id_user])->one();
?>
<div class="dataset-view">

    <?= DetailView::widget([
        'model' => $model,
        'condensed' => true,
        'hover' => true,
        'mode' => DetailView::MODE_VIEW,
        'attributes' => [
            'nama',
            'file:ntext',
            'ekstensi',
            [
                'attribute' => 'size',
                'value' => ByteUnits\bytes($model->size)->format(),
            ],
            [
                'attribute' => 'upload_date',
                'value' => IdDateFormatter::format($model->upload_date, IdDateFormatter::COMPLETE_WITH_TIME),
            ],
            [
                'attribute' => 'id_user',
                'label' => 'Uploader',
                'value' => $profile->nama,
            ],
        ],
    ]) ?>

    <?php
    $spreadsheet = IOFactory::load('datasetfile/9 - A - BeefPork_Test.xlsx');
    $writer = new Xlsx($spreadsheet);

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="file.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    ?>

</div>
