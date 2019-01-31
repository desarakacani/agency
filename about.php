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
    <link rel="stylesheet" href="css/animate.min.css">
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
                <li class="menu__item menu__item--current">
                    <a href="about.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['ABOUT']; ?></span></a>
                </li>
                <li class="menu__item">
                    <a href="work.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['WORK']; ?></span></a>
                </li>
                <li class="menu__item">
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
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/work/img1-small.jpg " class="img-responsive img-1"  alt="Slide 1">
            <div class="carousel-caption" style="top: 8px;">
                <h1 class="wow fadeInUp"><?php echo $lang['HEADER_TITLE']; ?></h1>
            </div>
        </div>
    </div>
</div>
<!-- ******************** End Carousel *********************** -->
<!-- ******************** Start Section Creativity *********************** -->
<section id="creativity">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row padding-top-40">
            <div class="col-md-12">
                <div class="border-top-creativity"></div>
                <h1 class="h1-creativity"><?php echo $lang['HEADING1']?></h1>
                <h1 class="h1-creativity2"><?php echo $lang['HEADING2'] ?></h1>
                <div class="col-md-12 padding-bottom-20" style="padding-left: 25px; padding-right: 25px;">
                    <p class="text-creativity"><?php echo $lang['DESCRIPTION']?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 service-sec">
                <div class="border-top-creativity"></div>
                <h1 class="h1-creativity3"><?php echo $lang['HEADING3']?></h1>
                <div class="col-md-12 our-service margin-top-20 margin-bottom-20">
                    <div class="col-md-4 service">
                        <p><?php echo $lang['SERVICE_1_P1']?></p>
                        <p><?php echo $lang['SERVICE_1_P2']?></p>
                        <p><?php echo $lang['SERVICE_1_P3']?></p>
                        <p><?php echo $lang['SERVICE_1_P4']?></p>
                    </div>
                    <div class="col-md-4 service">
                        <p><?php echo $lang['SERVICE_2_P1']?></p>
                        <p><?php echo $lang['SERVICE_2_P2']?></p>
                        <p><?php echo $lang['SERVICE_2_P3']?></p>
                        <p><?php echo $lang['SERVICE_2_P4']?></p>
                    </div>
                    <div class="col-md-4 service">
                        <p><?php echo $lang['SERVICE_3_P1']?></p>
                        <p><?php echo $lang['SERVICE_3_P2']?></p>
                        <p><?php echo $lang['SERVICE_3_P3']?></p>
                        <p><?php echo $lang['SERVICE_3_P4']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ******************** End Section Skills *********************** -->
<!-- ******************** Start Section Img *********************** -->
<section id="img-work">
    <div class="container coffee-fade">
        <img src="img/service/coffe.jpg" class="img-responsive" alt="">
    </div>
</section>
<!-- ******************** End Section Img *********************** -->
<!--******************** Start Work Section ***********************-->
<section id="work">
    <div class="container width-100">
        <div class="row">
            <div class="col-md-3 col-sm-6 nopadding">
                <img src="img/work/work1-small.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-6 nopadding">
                <img src="img/work/work2-small.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-6 nopadding">
                <img src="img/work/work3-small.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-6 nopadding">
                <img src="img/work/work4-small.jpg" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</section>
<!--******************** End Section Work ***********************-->
<!-- ******************** Start Section Img *********************** -->
<section id="effective">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row padding-top-20 padding-bottom-20">
            <div class="border-top-client"></div>
            <h1 class="border-bottom-clients h1-effective wow fadeInLeft">
                <span><?php echo $lang['EFFECTIVE_HEADING']?></span></h1>
            <div class="col-md-10 col-md-offset-1 wow fadeInRight">
                <p class="text-clients">
                    <?php echo $lang['EFFECTIVE_P']?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ******************** End Section Img *********************** -->
<!-- ******************** Start Section Clients *********************** -->
<section id="clients">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row margin-top-70">
            <h1 class="border-bottom-clients wow swing">
                <span><?php echo $lang['CLIENT_HEADING1']?></span>
                <br>
                <small><?php echo $lang['CLIENT_HEADING2']?></small>
            </h1>
        </div>
        <div class="row clients-img padding-bottom-20 padding-top-20 margin-bottom-80">
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/at.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/verri.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/triumph.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/W.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/versace.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/vespa.png" alt="" class="img-responsive"></div>
            <div class="clearfix"></div> <!-- Clear both -->
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/sony.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/curae.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/mondadori.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/samsung.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/enterprise.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/sixis.png" alt="" class="img-responsive"></div>
            <div class="clearfix"></div> <!-- Clear both -->
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/nhotels.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/btime.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/blauer.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/exellences.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/cuneo.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-6 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img src="img/logo/jeep.png" alt="" class="img-responsive"></div>
        </div>
        <div class="container">
            <div class="col-md-2 col-md-offset-4 nopadding">
                <p class=" client-p"> info@theagency.one</p>
            </div>
            <div class="col-md-3 social nopadding social-margin">
                <ul>
                    <li><a href=""><img src="img/icons/facebook.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/pinterest.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/linkedin.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/instagram.png" class="img-responsive" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ******************** End Section Clients *********************** -->
<!-- ******************** Start Section Copyright *********************** -->

<section id="copyright">
    <div class="container">
        <div class="row padding-top-25 padding-bottom-20">
            <p class="copy-p margin-top-15">
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
<script src="js/vendor/scrollreveal.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
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
//    window.sr = ScrollReveal();
//    sr.reveal('.h1-creativity');
//    sr.reveal('.h1-creativity2');
//    sr.reveal('.text-creativity',{
//            duration: 500,
//            delay: 100,
//            easing: 'cubic-bezier(1, 0.8, 1, 1)',
//        });
//    sr.reveal('.h1-creativity3');
////    services block
//    sr.reveal('.service',{ duration: 800 }, 100);
//
//    sr.reveal('.img-work',{ duration: 800 }, 100);
//    sr.reveal('.elementium',{
//        duration: 100,
//        distance : '90px',
//        easing   : 'ease-in-out',
//        rotate   : { z: 10 },
//        scale    : 1.1
//    }, 50);
//
//    new WOW().init();

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
