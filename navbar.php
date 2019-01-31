<?php include_once 'common.php'; ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="css/tabbed.css">-->
<!--    <link rel="stylesheet" href="css/normalize.css">-->
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
    </style>
</head>
<body>
<section class="section section--menu background-black-image" id="Shylock">
    <div class="container">
        <div class="section__title pull-left"><img src="img/logo-small.png" class="img-responsive" alt="" style="margin-top: 5%;"></div>
        <span class="link-copy pull-right" style="">
            <?php if ($_GET['lang']=="it"): ?>
            <img src="img/languages/en.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
            <img src="img/languages/es.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php elseif ($_GET['lang']=="en"): ?>
            <img src="img/languages/it.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
            <img src="img/languages/es.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php elseif ($_GET['lang']=="es"): ?>
            <img src="img/languages/it.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
            <img src="img/languages/en.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
            <?php else: ?>
            <img src="img/languages/it.png" id="it" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=it" />
            <img src="img/languages/en.png" id="en" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=en" />
            <img src="img/languages/es.png" id="es" class="img-responsive link-language" height="45px" width="45px" data-redirect="about.php?lang=es" />
            <?php endif; ?>
        </span>
        <nav class="menu menu--shylock " style="margin: 10% auto;">
            <ul class="menu__list pull-right">
                <li class="menu__item menu__item--current"><a href="#" class="menu__link"><span class="menu__helper">Home</span></a></li>
                <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">About</span></a></li>
                <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">Stories</span></a></li>
                <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">Shop</span></a></li>
            </ul>
        </nav>
    </div>

</section>

<div class="row demo-2">

    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                    <h2>A bene placito.</h2>
                    <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <h2>Regula aurea.</h2>
                    <blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <h2>Dum spiro, spero.</h2>
                    <blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                    <h2>Donna nobis pacem.</h2>
                    <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-5"></div>
                    <h2>Acta Non Verba.</h2>
                    <blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
                </div>
            </div>
        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->

    <div class="content-wrapper">
        <h2>About this slider</h2>
        <p>The Slit Slider is a slideshow with a twist: the idea is to slice open the current slide when navigating to the next or previous one. Using jQuery and CSS animations we can create unique slide transitions for the content elements. </p>
    </div>

</div>

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

//        [].slice.call(document.querySelectorAll('.link-copy')).on('click', function(link) {
//            link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
////            new Clipboard(link);
//            link.addEventListener('click', function() {
////                classie.add(link, 'link-copy--animate');
//                setTimeout(function() {
//                    classie.remove(link, 'link-copy--animate');
//                }, 300);
//            });
//        });
        [].slice.call(document.querySelectorAll('.link-copy img')).forEach(function(link) {
            link.addEventListener('click', function() {
                window.location = this.dataset.redirect;
            });//window.location = this.dataset.redirect;
        });
//        $('#it').on('click', function () {
//
//        })
//        $('#en').on('click', function () {
//            window.location = this.dataset.redirect;
//        })
//        $('#es').on('click', function () {
//            window.location = this.dataset.redirect;
//        })
    })(window);
</script>
</body>
</html>




