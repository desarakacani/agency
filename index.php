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
    <link rel="stylesheet" href="css/tabbed.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
    .test2
    {
        top: 12%;
        left: 24%;
    }
    .carousel-caption {
        top: 12%;
        color: #000;
    }
    #languages {
        position: relative;
        z-index:999999;
    }
    .right2
    {
        right: 2%;
    }
    .carousel-caption h1 {
        font-family: 'Code Pro Bold';
        text-shadow: none;
        font-size: 28px;
        margin: 0;
        text-transform: none;
        line-height: 29px;
        color: white;
    }

    .flag-img
    {
        width: 10%;
    }
    #languages img {
        margin: 24px;
        border: 0px;
    }

    #footer {
        background-color: black;
        color: #333333;
        font-family: 'Code Pro LC';
        font-size: 12px;
        position: absolute;
        bottom: 0px;
        width: 100%;
    }
    .img-overlay
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: url(img/work/overlays.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: rgb(20, 25, 29);
        opacity: 0.88;
    }
    body {
        background: url(img/work/img1-small.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>
<body>
<section id="home">
    <div class="container">
        <div class="row">
            <div class="carousel-caption">
                <div class="row col-md-6 col-md-offset-3 right2">
                    <a href="index.php"><img src="img/logo.png" alt="" class="img-responsive"></a>
                </div>
                <div class="row col-md-6 col-md-offset-3 right2" style="padding: 40px 0;">
                    <h1 class="" style=""><?php echo $lang['HEADER_TITLE']; ?></h1>
                </div>
                <div class="row col-md-6 col-md-offset-3 right2" id="languages">
                    <a href="about.php?lang=it"><img src="img/languages/it-1.png" class="flag-img" /></a>
                    <a href="about.php?lang=en"><img src="img/languages/en-1.png" class="flag-img" /></a>
                    <a href="about.php?lang=es"><img src="img/languages/es-1.png" class="flag-img" /></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ******************** Start Section Copyright *********************** -->

<section id="footer">
    <div class="container">
        <div class="row padding-top-25 padding-bottom-10">
            <p>
            <div class="col-md-11 social nopadding">
                <ul>
                    <li><a href=""><img src="img/icons/facebook.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/pinterest.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/linkedin.png" class="img-responsive" alt=""></a></li>
                    <li><a href=""><img src="img/icons/instagram.png" class="img-responsive" alt=""></a></li>
                </ul>
            </div>
            </p>
        </div>
    </div>
</section>
<div class="img-overlay"></div>

<!-- ******************** End Section Copyright *********************** -->

</body>
</html>
