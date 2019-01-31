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
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="LineMenuStyles/css/component.css"/>
    <style>

        @media screen and (min-width: 1024px) {
            .slider1 {
                display: block;
            }

            /* show it on small screens */
            .slider2 {
                display: block;
            }

            /* show it on small screens */
            .slider3 {
                display: block;
            }

            /* show it on small screens */
            .slider4 {
                display: block;
            }

            /* show it on small screens */
            .slider5 {
                display: block;
            }

            /* show it on small screens */
            .slider6 {
                display: block;
            }

            /* show it on small screens */
        }

        @media screen and (min-width: 0px) and (max-width: 1023px) {
            .slider1 {
                display: none;
            }

            /* hide it elsewhere */
            .slider2 {
                display: none;
            }

            /* hide it elsewhere */
            .slider3 {
                display: none;
            }

            /* hide it elsewhere */
            .slider4 {
                display: none;
            }

            /* hide it elsewhere */
            .slider5 {
                display: none;
            }

            /* hide it elsewhere */
            .slider6 {
                display: none;
            }

            /* hide it elsewhere */
        }

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

        .carousel-indicators {
            bottom: -60px;
            left: 75%;
            margin-left: 0;
            width: auto;
        }

        .carousel-indicators li {
            width: 15px;
            height: 15px;
            background-color: #6c6d70;
            border: 1px solid #6c6d70;
        }

        .carousel-indicators .active {
            width: 17px;
            height: 17px;
        }

        @media screen and (max-width: 574px) {
            .carousel-indicators {
                bottom: -60px;
                left: 25%;
                margin-left: 0;
                width: auto;
            }
        }
    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<section class="section section--menu background-black-image" id="Shylock">
    <div class="container">
        <div class="section__title pull-left"><a href="about.php?lang=<?php echo langSet(); ?>"><img
                        src="img/logo-small.png" class="img-responsive" alt="" style="margin-top: 5%;"></a></div>
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
                    <a href="about.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;"
                       class="menu__link"><span class="menu__helper"><?php echo $lang['ABOUT']; ?></span></a>
                </li>
                <li class="menu__item menu__item--current">
                    <a href="work.php?lang=<?php echo langSet(); ?>" onclick="window.location = this.href;"
                       class="menu__link"><span class="menu__helper"><?php echo $lang['WORK']; ?></span></a>
                </li>
                <li class="menu__item">
                    <a href="<?php  if(langSet() == 'es') echo '#'; else echo 'careers.php?lang='.langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['CAREERS']; ?></span></a>
                </li>
                <li class="menu__item">
                    <a href="<?php if (langSet() == 'es') echo '#'; else echo 'contact.php?lang=' . langSet(); ?>"
                       onclick="window.location = this.href;" class="menu__link"><span
                                class="menu__helper"><?php echo $lang['CONTACT']; ?></span></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- ******************** End Header *********************** -->

<!-- ******************** Start Carousel *********************** -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--    <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>-->
    <!--        <span class='glyphicon glyphicon-chevron-left'></span>-->
    <!--    </a>-->
    <!--    <ol class="carousel-control">-->
    <!--        <li href="#carousel-example-generic" data-slide="prev" class='left carousel-control'><i class='glyphicon glyphicon-chevron-left'></i></li>-->
    <!--    </ol>-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    </ol>
    <!--    <ol class="carousel-control">-->
    <!--        <li href="#carousel-example-generic" data-slide="next" class='right carousel-control' ><i class='glyphicon glyphicon-chevron-right'></i></li>-->
    <!--    </ol>-->
    <!--    <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>-->
    <!--        <span class='glyphicon glyphicon-chevron-right'></span>-->
    <!--    </a>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <!--            <div class="slider-1 img-slider img-responsive"></div>-->
            <img src="img/slider/works-1.jpg" class="img-responsive img-slider" alt="Slide 1">
            <!--            <div class="carousel-caption slider1" style="bottom: 0px;">-->
            <!--                <p>--><?php //echo $lang['Slider_paragraph_1']?><!--</p>-->
            <!--                <p class="border-bottom-slider1"></p>-->
            <!--                <h1 style="color: white">--><?php //echo $lang['Slider_heading_1']?><!--</h1>-->
            <!--            </div>-->
        </div>
        <div class="item">
            <img src="img/slider/works-2.jpg" class="img-responsive img-slider" alt="Slide 2">
        </div>
        <div class="item">
            <img src="img/slider/works-3.jpg" class="img-responsive img-slider" alt="Slide 3">
        </div>
        <div class="item">
            <img src="img/slider/works-4.jpg" class="img-responsive img-slider" alt="Slide 4">
        </div>
        <div class="item">
            <img src="img/slider/works-5.jpg" class="img-responsive img-slider" alt="Slide 5">
        </div>
        <div class="item">
            <img src="img/slider/works-6.jpg" class="img-responsive img-slider" alt="Slide 5">
        </div>
        <div class="item">
            <img src="img/slider/works-7.jpg" class="img-responsive img-slider" alt="Slide 6">
        </div>
        <div class="item">
            <img src="img/slider/works-8.jpg" class="img-responsive img-slider" alt="Slide 7">
        </div>
    </div>
</div>


<!-- ******************** End Carousel *********************** -->
<!-- ******************** Start Section Clients *********************** -->
<section id="clients">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row margin-top-70">
            <h1 class="border-bottom-clients wow swing">
                <span><?php echo $lang['CLIENT_HEADING1'] ?></span>
                <br>
                <small><?php echo $lang['CLIENT_HEADING2'] ?></small>
            </h1>
        </div>
        <div class="row clients-img padding-bottom-20 padding-top-20 margin-bottom-80">
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/at.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/verri.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/triumph.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/W.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/versace.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/vespa.png" alt="" class="img-responsive"></div>
            <div class="clearfix"></div> <!-- Clear both -->
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/sony.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/curae.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/mondadori.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/samsung.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/enterprise.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/sixis.png" alt="" class="img-responsive"></div>
            <div class="clearfix"></div> <!-- Clear both -->
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/nhotels.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/btime.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/blauer.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/exellences.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/cuneo.png" alt="" class="img-responsive"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 nopadding elementium" data-sr="spin 60deg, roll 10deg"><img
                        src="img/logo/jeep.png" alt="" class="img-responsive"></div>
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
            <p class="margin-top-15">
                &nbsp;<?php if (langSet() == 'it'): ?>©2017 THE AGENCY SRLS - P.IVA 09593020960<?php endif; ?>
            </p>
        </div>
    </div>
</section>

<!-- ******************** End Section Copyright *********************** -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>-->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="LineMenuStyles/js/classie.js"></script>
<script src="LineMenuStyles/js/clipboard.min.js"></script>
<!--<script src="js/plugins.js"></script>-->
<script src="js/main.js"></script>
<script src="js/vendor/scrollreveal.min.js"></script>
<script src="js/vendor/wow.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
<script>
    window.sr = ScrollReveal();
    sr.reveal('.h1-creativity');
    sr.reveal('.h1-creativity2');
    sr.reveal('.text-creativity', {
        duration: 500,
        delay: 100,
        easing: 'cubic-bezier(1, 0.8, 1, 1)',
    });
    sr.reveal('.h1-creativity3');
    //    services block
    sr.reveal('.service', {duration: 800}, 100);

    sr.reveal('.img-work', {duration: 800}, 100);
    sr.reveal('.elementium', {
        duration: 100,
        easing: 'ease-in-out',
        rotate: {z: 10},
        scale: 1.1
    }, 50);

    new WOW().init();

    (function () {
        [].slice.call(document.querySelectorAll('.menu')).forEach(function (menu) {
            var menuItems = menu.querySelectorAll('.menu__link'),
                setCurrent = function (ev) {
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

            [].slice.call(menuItems).forEach(function (el) {
                el.addEventListener('click', setCurrent);
            });
        });

        [].slice.call(document.querySelectorAll('.link-copy img')).forEach(function (link) {
            link.addEventListener('click', function () {
                window.location = this.dataset.redirect;
            });//window.location = this.dataset.redirect;
        });
    })(window);

    $('#carousel-example-generic').carousel({
        interval: 3000
    });
</script>
</body>
</html>
