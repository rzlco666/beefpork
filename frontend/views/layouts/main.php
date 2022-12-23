<?php

/** @var View $this */

/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="<?= Html::encode(Yii::$app->name) ?>" name="description"/>
        <meta content="<?= Html::encode(Yii::$app->name) ?>" name="author"/>
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?> | <?= Html::encode(Yii::$app->name) ?></title>
        <link rel="shortcut icon" href="<?= Url::home() ?>favicon.ico">
        <?php $this->head() ?>
        <link rel="preload" href="<?= Url::home() ?>css/theme.min.css" data-hs-appearance="default" as="style">
        <link rel="preload" href="<?= Url::home() ?>css/theme-dark.min.css" data-hs-appearance="dark" as="style">
        <style data-hs-appearance-onload-styles>
            * {
                transition: unset !important;
            }

            body {
                opacity: 0;
            }
        </style>
        <script>
            window.hs_config = {
                "autopath": "@@autopath",
                "deleteLine": "hs-builder:delete",
                "deleteLine:build": "hs-builder:build-delete",
                "deleteLine:dist": "hs-builder:dist-delete",
                "previewMode": false,
                "startPath": "/index.html",
                "vars": {
                    "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                    "version": "?v=1.0"
                },
                "layoutBuilder": {
                    "extend": {"switcherSupport": true},
                    "header": {"layoutMode": "default", "containerMode": "container-fluid"},
                    "sidebarLayout": "default"
                },
                "themeAppearance": {
                    "layoutSkin": "default",
                    "sidebarSkin": "default",
                    "styles": {
                        "colors": {
                            "primary": "#377dff",
                            "transparent": "transparent",
                            "white": "#fff",
                            "dark": "132144",
                            "gray": {"100": "#f9fafc", "900": "#1e2022"}
                        }, "font": "Inter"
                    }
                },
                "languageDirection": {"lang": "en"},
                "skipFilesFromBundle": {
                    "dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"],
                    "build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.css", "assets/css/docs.css", "assets/vendor/icon-set/style.css", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js", "assets/js/demo.js"]
                },
                "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
                "copyDependencies": {
                    "dist": {"*assets/js/theme-custom.js": ""},
                    "build": {
                        "*assets/js/theme-custom.js": "",
                        "node_modules/bootstrap-icons/font/*fonts/**": "assets/css"
                    }
                },
                "buildFolder": "",
                "replacePathsToCDN": {},
                "directoryNames": {"src": "./src", "dist": "./dist", "build": "./build"},
                "fileNames": {
                    "dist": {"js": "theme.min.js", "css": "theme.min.css"},
                    "build": {
                        "css": "theme.min.css",
                        "js": "theme.min.js",
                        "vendorCSS": "vendor.min.css",
                        "vendorJS": "vendor.min.js"
                    }
                },
                "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
            }
            window.hs_config.gulpRGBA = (p1) => {
                const options = p1.split(',')
                const hex = options[0].toString()
                const transparent = options[1].toString()

                var c;
                if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                    c = hex.substring(1).split('');
                    if (c.length == 3) {
                        c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                    }
                    c = '0x' + c.join('');
                    return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
                }
                throw new Error('Bad Hex');
            }
            window.hs_config.gulpDarken = (p1) => {
                const options = p1.split(',')

                let col = options[0].toString()
                let amt = -parseInt(options[1])
                var usePound = false

                if (col[0] == "#") {
                    col = col.slice(1)
                    usePound = true
                }
                var num = parseInt(col, 16)
                var r = (num >> 16) + amt
                if (r > 255) {
                    r = 255
                } else if (r < 0) {
                    r = 0
                }
                var b = ((num >> 8) & 0x00FF) + amt
                if (b > 255) {
                    b = 255
                } else if (b < 0) {
                    b = 0
                }
                var g = (num & 0x0000FF) + amt
                if (g > 255) {
                    g = 255
                } else if (g < 0) {
                    g = 0
                }
                return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
            }
            window.hs_config.gulpLighten = (p1) => {
                const options = p1.split(',')

                let col = options[0].toString()
                let amt = parseInt(options[1])
                var usePound = false

                if (col[0] == "#") {
                    col = col.slice(1)
                    usePound = true
                }
                var num = parseInt(col, 16)
                var r = (num >> 16) + amt
                if (r > 255) {
                    r = 255
                } else if (r < 0) {
                    r = 0
                }
                var b = ((num >> 8) & 0x00FF) + amt
                if (b > 255) {
                    b = 255
                } else if (b < 0) {
                    b = 0
                }
                var g = (num & 0x0000FF) + amt
                if (g > 255) {
                    g = 255
                } else if (g < 0) {
                    g = 0
                }
                return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
            }
        </script>
    </head>
    <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    <script src="<?= Url::home() ?>js/hs.theme-appearance.js"></script>
    <script src="<?= Url::home() ?>vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>
    <?php $this->beginBody() ?>
    <!-- ========== HEADER ========== -->
    <?php echo $this->render('partials/header'); ?>
    <!-- ========== END HEADER ========== -->
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    <?php echo $this->render('partials/navbar'); ?>
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <?= $content ?>
        </div>
        <!-- End Content -->
        <!-- Footer -->
        <?php echo $this->render('partials/footer'); ?>
        <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php echo $this->render('partials/keyboard-shortcuts'); ?>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <?php echo $this->render('partials/activity'); ?>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <?php echo $this->render('partials/welcome'); ?>
    <!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
    <?php echo $this->render('partials/notify'); ?>
    <?php $this->endBody() ?>
    <!-- JS Plugins Init. -->
    <script>
        (function () {
            window.onload = function () {


                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav('.js-navbar-vertical-aside').init()


                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                new HSFormSearch('.js-form-search')


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()
            }
        })()
    </script>
    <!-- Style Switcher JS -->
    <script>
        (function () {
            // STYLE SWITCHER
            // =======================================================
            const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
            const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

            // Function to set active style in the dorpdown menu and set icon for dropdown trigger
            const setActiveStyle = function () {
                $variants.forEach($item => {
                    if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                        $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                        return $item.classList.add('active')
                    }

                    $item.classList.remove('active')
                })
            }

            // Add a click event to all items of the dropdown to set the style
            $variants.forEach(function ($item) {
                $item.addEventListener('click', function () {
                    HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
                })
            })

            // Call the setActiveStyle on load page
            setActiveStyle()

            // Add event listener on change style to call the setActiveStyle function
            window.addEventListener('on-hs-appearance-change', function () {
                setActiveStyle()
            })
        })()
    </script>
    <!-- End Style Switcher JS -->
    </body>
    </html>
<?php $this->endPage();
