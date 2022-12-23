<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var LoginForm $model */

use common\models\LoginForm;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
            <!-- Logo & Language -->
            <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
                <div class="d-none d-lg-flex justify-content-between">
                    <a href="<?= Url::home() ?>">
                        <img class="w-100" src="<?= Url::home() ?>svg/logos/logo.svg" alt="Image Description"
                             data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
                        <img class="w-100" src="<?= Url::home() ?>svg/logos-light/logo.svg" alt="Image Description"
                             data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
                    </a>

                    <!-- Select -->
                    <div class="tom-select-custom tom-select-custom-end tom-select-custom-bg-transparent zi-2">
                        <select class="js-select form-select form-select-sm form-select-borderless"
                                data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true,
                          "dropdownWidth": "12rem",
                          "placeholder": "Select language"
                        }'>
                            <option label="empty"></option>
                            <option value="language1"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>
                                English (US)
                            </option>
                            <option value="language2" selected
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>
                                English (UK)
                            </option>
                            <option value="language3"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>
                                Deutsch
                            </option>
                            <option value="language4"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>
                                Dansk
                            </option>
                            <option value="language5"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>
                                Español
                            </option>
                            <option value="language6"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>
                                Nederlands
                            </option>
                            <option value="language7"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>
                                Italiano
                            </option>
                            <option value="language8"
                                    data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="<?= Url::home() ?>vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>
                                中文 (繁體)
                            </option>
                        </select>
                    </div>
                    <!-- End Select -->
                </div>
            </div>
            <!-- End Logo & Language -->

            <div style="max-width: 23rem;">
                <div class="text-center mb-5">
                    <img class="img-fluid" src="<?= Url::home() ?>svg/illustrations/oc-chatting.svg"
                         alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
                    <img class="img-fluid" src="<?= Url::home() ?>svg/illustrations-light/oc-chatting.svg"
                         alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
                </div>

                <div class="mb-5">
                    <h2 class="display-5">Build digital products with:</h2>
                </div>

                <!-- List Checked -->
                <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
                    <li class="list-checked-item">
                        <span class="d-block fw-semibold mb-1">All-in-one tool</span>
                        Build, run, and scale your apps - end to end
                    </li>

                    <li class="list-checked-item">
                        <span class="d-block fw-semibold mb-1">Easily add &amp; manage your services</span>
                        It brings together your tasks, projects, timelines, files and more
                    </li>
                </ul>
                <!-- End List Checked -->

                <div class="row justify-content-between mt-5 gx-3">
                    <div class="col">
                        <img class="img-fluid" src="<?= Url::home() ?>svg/brands/gitlab-gray.svg" alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <img class="img-fluid" src="<?= Url::home() ?>svg/brands/fitbit-gray.svg" alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <img class="img-fluid" src="<?= Url::home() ?>svg/brands/flow-xo-gray.svg" alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <img class="img-fluid" src="<?= Url::home() ?>svg/brands/layar-gray.svg" alt="Logo">
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
            <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
                <!-- Form -->
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="text-center">
                    <div class="mb-5">
                        <h1 class="display-5">Sign in</h1>
                        <p>Don't have an account yet? <a class="link" href="<?= Url::to(['/site/signup']) ?>">Sign
                                up here</a></p>
                    </div>

                    <div class="d-grid mb-4">
                        <a class="btn btn-white btn-lg" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss me-2" src="<?= Url::home() ?>svg/brands/google-icon.svg"
                           alt="Image Description">
                      Sign in with Google
                    </span>
                        </a>
                    </div>

                    <span class="divider-center text-muted mb-4">OR</span>
                </div>

                <!-- Form -->
                <div class="mb-4">
                    <?= $form->field($model, 'username')->textInput(['class' => 'form-control form-control-lg', 'autofocus' => true, 'placeholder' => 'Your Username']) ?>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    <span>Password</span>
                    <a class="form-label-link mb-0" href="<?= Url::to(['site/request-password-reset']) ?>">Forgot Password?</a>
                  </span>
                    </label>

                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg', 'placeholder' => '********'])->label(false) ?>
                </div>
                <!-- End Form -->

                <!-- Form Check -->
                <div class="form-check mb-4">
                    <input type="hidden" name="LoginForm[rememberMe]" value="0">
                    <input type="checkbox" id="loginform-rememberme" class="form-check-input"
                           name="LoginForm[rememberMe]" value="1" checked>
                    <label class="form-check-label" for="termsCheckbox">
                        Remember me
                    </label>
                </div>
                <!-- End Form Check -->

                <div class="d-grid">
                    <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
