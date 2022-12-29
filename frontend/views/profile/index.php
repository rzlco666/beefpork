<?php

use common\models\AppsCountries;
use denkorolkov\ajaxcrud\CrudAsset;
use FrosyaLabs\Lang\IdDateFormatter;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Modal;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
    <div class="row justify-content-lg-center">
        <div class="col-lg-10">
            <!-- Profile Cover -->
            <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                    <img class="profile-cover-img" src="<?= Url::home() ?>img/1920x400/img1.jpg"
                         alt="Image Description">
                </div>
            </div>
            <!-- End Profile Cover -->

            <!-- Profile Header -->
            <div class="text-center mb-5">
                <!-- Avatar -->
                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar"
                       for="editAvatarUploaderModal">
                    <?php if (!empty($model->foto) || $model->foto != null) : ?>
                        <img id="editAvatarImgModal" class="avatar-img"
                             src="<?= Url::home() ?>img/profile/<?= $model->foto ?>"
                             alt="Image Description">
                    <?php else : ?>
                        <span class="avatar-initials"><?= substr($model->nama, 0, 1) ?></span>
                    <?php endif; ?>
                </label>
                <!-- End Avatar -->

                <h1 class="page-header-title"><?= ucwords(strtolower($model->nama)) ?> <i
                            class="bi-patch-check-fill fs-2 text-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Verified"></i></h1>

                <!-- List -->
                <ul class="list-inline list-px-2">
                    <li class="list-inline-item">
                        <i class="bi-building me-1"></i>
                        <span><?= $model->organisasi == null ? '-' : ucwords(strtolower($model->organisasi)) ?></span>
                    </li>

                    <li class="list-inline-item">
                        <i class="bi-geo-alt me-1"></i>
                        <a href="#"><?= ucwords(strtolower($model->kota)) ?><?php if ($model->kota != null || !empty($model->kota)) : echo ', '; endif; ?></a>
                        <a href="#"><?= ucwords(strtolower($model->provinsi)) ?><?php if ($model->provinsi != null || !empty($model->provinsi)) : echo ', '; endif; ?></a>
                        <a href="#"><?= ucwords(strtolower($model->negara)) ?></a>
                    </li>

                    <li class="list-inline-item">
                        <i class="bi-calendar-week me-1"></i>
                        <span>Joined <?= IdDateFormatter::format($model->date_join, IdDateFormatter::LONG) ?></span>
                    </li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Profile Header -->

            <!-- Nav -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

                <ul class="nav nav-tabs align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= Url::to(['/profile']) ?>">Profile</a>
                    </li>

                    <li class="nav-item ms-auto">
                        <div class="d-flex gap-2">
                            <?= Html::a('<i class="bi-person-plus-fill me-1"></i> Update photo', ['update'],
                                ['role' => 'modal-remote', 'title' => 'Create new Tes', 'class' => 'btn btn-white btn-sm']) ?>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <div class="row">
                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
                     "parentSelector": "#accountSidebarNav",
                     "breakpoint": "lg",
                     "startPoint": "#accountSidebarNav",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 20
                   }'>
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Profile</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <ul class="list-unstyled list-py-2 text-dark mb-0">
                                <li class="pb-0"><span class="card-subtitle">About</span></li>
                                <li>
                                    <i class="bi-person dropdown-item-icon"></i> <?= ucwords(strtolower($model->nama)) ?>
                                </li>
                                <li>
                                    <i class="bi-building dropdown-item-icon"></i> <?= $model->organisasi == null ? '-' : ucwords(strtolower($model->organisasi)) ?>
                                </li>
                                <li>
                                    <i class="bi-geo-alt dropdown-item-icon"></i> <?= ucwords(strtolower($model->kota)) ?><?php if ($model->kota != null || !empty($model->kota)) : echo ', '; endif; ?><?= ucwords(strtolower($model->provinsi)) ?><?php if ($model->provinsi != null || !empty($model->provinsi)) : echo ', '; endif; ?><?= ucwords(strtolower($model->negara)) ?>
                                </li>

                                <li class="pt-4 pb-0"><span class="card-subtitle">Contacts</span></li>
                                <li><i class="bi-at dropdown-item-icon"></i> <?= Yii::$app->user->identity->email ?>
                                </li>
                                <li><i class="bi-phone dropdown-item-icon"></i> <?= $model->no_hp ?></li>
                            </ul>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>

                <div class="col-lg-8">
                    <div class="d-grid gap-3 gap-lg-5">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title h4">Basic information</h2>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form -->
                                <?php $form = ActiveForm::begin(); ?>
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full name <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <?= $form->field($model, 'nama')->textInput(['maxlength' => true])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="emailLabel" placeholder="Email"
                                               aria-label="Email" value="<?= Yii::$app->user->identity->email ?>"
                                               disabled readonly>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <span
                                                class="form-label-secondary">(Optional)</span></label>

                                    <div class="col-sm-9">
                                        <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="organizationLabel" class="col-sm-3 col-form-label form-label">Organization</label>

                                    <div class="col-sm-9">
                                        <?= $form->field($model, 'organisasi')->textInput(['maxlength' => true])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label form-label">Gender</label>

                                    <div class="col-sm-9">
                                        <?= $form->field($model, 'jk')->inline(false)->radioList(['L' => 'Male', 'P' => 'Female'])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="locationLabel"
                                           class="col-sm-3 col-form-label form-label">Location</label>

                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="mb-4">
                                            <?= $form->field($model, 'negara')->widget(Select2::classname(), [
                                                'data' => ArrayHelper::map(AppsCountries::find()->all(), 'country_name', 'country_name'),
                                                'options' => ['placeholder' => 'Select Country'],
                                                'pluginOptions' => [
                                                    'allowClear' => false
                                                ],
                                            ])->label(false); ?>
                                        </div>
                                        <!-- End Select -->

                                        <div class="mb-3">
                                            <?= $form->field($model, 'kota')->textInput(['maxlength' => true, 'placeholder' => 'City'])->label(false) ?>
                                        </div>

                                        <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true, 'placeholder' => 'State'])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Address</label>

                                    <div class="col-sm-9">
                                        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Address'])->label(false) ?>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <?php ActiveForm::end(); ?>
                                <!-- End Form -->
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Col -->
    </div>
<?php Modal::begin([
    "id" => "ajaxCrudModal",
    "title" => '<h4 class="modal-title">Modal title</h4>',
    "options" => [
        "tabindex" => -1, // important for Select2 to work properly,
        "class" => "modal fade",
    ],
    "centerVertical" => true,
    "footer" => "",// always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>