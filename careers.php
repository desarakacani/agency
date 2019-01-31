<?php include_once 'common.php'; ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tabbed.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/component.css" />
    <style>
        .background-black-image {
            background: url('img/black.jpg') no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .link-language {
            padding: 5px;
        }
    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section class="section section--menu background-black-image" id="Shylock">
    <div class="container">
        <div class="section__title pull-left"><a href="about.php?lang=<?php echo langSet(); ?>"><img src="img/logo-small.png" class="img-responsive" alt="" style="margin-top: 5%;"></a></div>
        <span class="link-copy pull-right" style="">
            <?php if (isset($_GET['lang']) && $_GET['lang']=="it"): ?>
                <img src="img/languages/en-1.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
                <img src="img/languages/es-1.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php elseif (isset($_GET['lang']) && $_GET['lang']=="en"): ?>
                <img src="img/languages/it-1.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
                <img src="img/languages/es-1.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php elseif (isset($_GET['lang']) && $_GET['lang']=="es"): ?>
                <img src="img/languages/en-1.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
                <img src="img/languages/it-1.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
            <?php else: ?>
                <img src="img/languages/it-1.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
                <img src="img/languages/en-1.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
                <img src="img/languages/es-1.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php endif; ?>
        </span>
        <nav class="menu menu--shylock " style="margin: 10% auto;">
            <ul class="menu__list pull-right">
                <li class="menu__item">
                    <a href="about.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['ABOUT']; ?></span></a>
                </li>
                <li class="menu__item">
                    <a href="work.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['WORK']; ?></span></a>
                </li>
                <li class="menu__item menu__item--current">
                    <a href="<?php  if(langSet() == 'es') echo '#'; else echo 'careers.php?lang='.langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['CAREERS']; ?></span></a>
                </li>
                <li class="menu__item">
                    <a href="<?php  if(langSet() == 'es') echo '#'; else echo 'contact.php?lang='.langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['CONTACT']; ?></span></a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<!-- ******************** End Header *********************** -->

<!-- ******************** Start Carousel *********************** -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/careers/img.jpg" class="img-responsive img-slider" alt="TheAgengy Careers">
        </div>
    </div>
</div>

<!-- ******************** End Carousel *********************** -->

<!-- ******************** Start Section Careers *********************** -->

<section id="contact-page">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row margin-top-45">
            <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                <img src="img/careers/1.jpg" class="img-responsive img-careers" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 text-left margin-bottom-70">
                <form id="defaultForm" method="post" class="form-horizontal" action="">
                    <div class="form-group form-text">
                        <label for="inputName" class="col-md-3 control-label"><?php echo $lang['Form_el_1']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputName" name="firstName" required >
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputSurname" class="col-md-3 control-label"><?php echo $lang['Form_el_2']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputSurname" name="surname" required >
                        </div>
                    </div>

                    <div class="form-group form-text">
                        <label for="inputAddress" class="col-md-3 control-label"><?php echo $lang['Form_el_3']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputAddress" name="address" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputZip" class="col-md-3 control-label"><?php echo $lang['Form_el_4']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputZip" name="zip" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputCity" class="col-md-3 control-label"><?php echo $lang['Form_el_5']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputCity" name="city" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputProvince" class="col-md-3 control-label"><?php echo $lang['Form_el_6']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputProvince" name="province" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputTelephone" class="col-md-3 control-label"><?php echo $lang['Form_el_7']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputTelephone" name="telephone" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputEmail" class="col-md-3 control-label"><?php echo $lang['Form_el_8']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputEmail" name="email" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputJob" class="col-md-3 control-label"><?php echo $lang['Form_el_9']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputJob" name="job" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="inputZip2" class="col-md-3 control-label"><?php echo $lang['Form_el_10']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="inputZip2" name="zip2" required>
                        </div>
                    </div>
                    <div class="form-group form-text">
                        <label for="location" class="col-md-3"><?php echo $lang['Form_el_11']?></label>
                        <div class="col-md-8 nopadding">
                            <input type="text" class="form-control" id="location" name="zip2" required>
                        </div>
                    </div>
                    <div class="form-group margin-top-25">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <span class="col-md-6 col-sm-12 col-xs-12 nopadding">
                            <label class="btn btn-default btn-file form-text box-shadow text-label">
                            <?php echo $lang['Button_el_1']?>
                            <input type="file" style="display: none;" required>
                            </label>
                            </span>
                            <span class="form-text2 margin-top-6 pull-left margin-left-7" id='button'><?php echo $lang['Button_el_2']?></span>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <span class="help-block form-text2 margin-top-6"><?php echo $lang['Button_el_3']?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-12 col-xs-12 margin-top-20">
                            <button type="submit" id="submit" name="submit" class="btn lg form-text3"><?php echo $lang['Button_el_4']?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="col-md-3 col-md-offset-4 nopadding">
                    <p class=" client-p careers-p"> info@theagency.one</p>
                </div>
                <div class="col-md-3 social social2 nopadding social-margin2">
                    <ul>
                        <li><a href=""><img src="img/icons/facebook.png" class="img-responsive" alt=""></a></li>
                        <li><a href=""><img src="img/icons/pinterest.png" class="img-responsive" alt=""></a></li>
                        <li><a href=""><img src="img/icons/linkedin.png" class="img-responsive" alt=""></a></li>
                        <li><a href=""><img src="img/icons/instagram.png" class="img-responsive" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ******************** End Section Careers *********************** -->

<!-- ******************** Start Section Copyright *********************** -->

<section id="copyright-footer">
    <div class="container">
        <div class="row padding-top-25 padding-bottom-10">
            <p>
                &nbsp;<?php if(langSet() == 'it'): ?>©2017 THE AGENCY SRLS - P.IVA 09593020960<?php  endif; ?>
            </p>
        </div>
    </div>
</section>

<!-- ******************** End Section Copyright *********************** -->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="LineMenuStyles/js/classie.js"></script>
<script src="LineMenuStyles/js/clipboard.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script>
    (function() {
        [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
            var menuItems = menu.querySelectorAll('.menu__link'),
                setCurrent = function(ev) {
                    ev.preventDefault();

                    var item = ev.target.parentNode; // li

                    // return if already current
                    if (classie.has(item, 'menu__item--current')) {
                        return false;
                    }
                    // remove current
                    classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
                    // set current
                    classie.add(item, 'menu__item--current');
                };

            [].slice.call(menuItems).forEach(function(el) {
                el.addEventListener('click', setCurrent);
            });
        });

        [].slice.call(document.querySelectorAll('.link-copy img')).forEach(function(link) {
            link.addEventListener('click', function() {
                window.location = this.dataset.redirect;
            });//window.location = this.dataset.redirect;
        });
    })(window);
</script>
</body>
</html>