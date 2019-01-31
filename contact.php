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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
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
                <li class="menu__item">
                    <a href="<?php  if(langSet() == 'es') echo '#'; else echo 'careers.php?lang='.langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['CAREERS']; ?></span></a>
                </li>
                <li class="menu__item menu__item--current">
                    <a href="<?php  if(langSet() == 'es') echo '#'; else echo 'contact.php?lang='.langSet(); ?>" onclick="window.location = this.href;" class="menu__link"><span class="menu__helper"><?php echo $lang['CONTACT']; ?></span></a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/contact/contact.jpg" class="img-responsive img-slider" alt="Slide 1">
        </div>
    </div>
</div>

<section id="contact-page">
    <div class="container padding-top-20 padding-bottom-20">
        <div class="row margin-top-80">
            <?php if (langSet() == 'it'): ?>
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-6 text-center">
                <div class="padding-bottom-40">
                    <h1 class="h1-milan">Milan</h1>
                    <p class="p-milan">
                        Galleria dell’Unione, 4 <br>
                        20122 Milano <br>
                        info@theagency.one
                    </p>
                    <br>
                    <p class="p-milan">
                    </p>
                    <img src="img/map_contact.jpg" class="img-responsive" alt="">
<!--                    <div id="map" style="width: 500px; height: 400px;"></div>-->
                </div>
            </div>
            <?php elseif (langSet() == 'en'): ?>
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-6 text-center">
                    <div class="padding-bottom-40">
                        <h1 class="h1-milan">London</h1>
                        <p class="p-milan">
                            48 Chilton Grove <br>
                            London, SE8 5 DY <br>
                            info@theagency.one
                        </p>
                        <br>
                        <p class="p-milan">
                        </p>
                        <img src="img/map_contact_en.jpg" class="img-responsive" alt="">
                        <!--                    <div id="map" style="width: 500px; height: 400px;"></div>-->
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                    <div class="padding-bottom-40">
                        <h1 class="h1-milan">Milan</h1>
                        <p class="p-milan">
                            Galleria dell’Unione, 4 <br>
                            20122 Milano <br>
                            info@theagency.one
                        </p>
                        <br>
                        <p class="p-milan">
                        </p>
                        <img src="img/map_contact.jpg" class="img-responsive" alt="">
                        <!--                    <div id="map" style="width: 500px; height: 400px;"></div>-->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                    <div class="padding-bottom-40">
                        <h1 class="h1-milan">London</h1>
                        <p class="p-milan">
                            48 Chilton Grove <br>
                            London, SE8 5 DY <br>
                            info@theagency.one
                        </p>
                        <br>
                        <p class="p-milan">
                        </p>
                        <img src="img/map_contact_en.jpg" class="img-responsive" alt="">
                        <!--                    <div id="map" style="width: 500px; height: 400px;"></div>-->
                    </div>
                </div>
            <?php endif; ?>
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
<section id="copyright-footer">
    <div class="container">
        <div class="row padding-top-25 padding-bottom-10">
            <p>
                &nbsp;<?php if(langSet() == 'it'): ?>©2017 THE AGENCY SRLS - P.IVA 09593020960<?php  endif; ?>
            </p>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="LineMenuStyles/js/classie.js"></script>
<script src="LineMenuStyles/js/clipboard.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"
        type="text/javascript"></script>
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
<script type="text/javascript">
//    var locations = [
//        ['Gallerie dell\'Unione', 45.462045, 9.187476]
//    ];
//
//    var map = new google.maps.Map(document.getElementById('map'), {
//        zoom: 17,
//        center: new google.maps.LatLng(45.462045, 9.187476),
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    });
//
//    var infowindow = new google.maps.InfoWindow();
//
//    var marker, i;
//
//    for (i = 0; i < locations.length; i++) {
//        marker = new google.maps.Marker({
//            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
//            map: map
//        });
//
//        google.maps.event.addListener(marker, 'click', (function(marker, i) {
//            return function() {
//                infowindow.setContent(locations[i][0]);
//                infowindow.open(map, marker);
//            }
//        })(marker, i));
//    }
</script>

</body>
</html>
