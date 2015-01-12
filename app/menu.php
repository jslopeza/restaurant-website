<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE 8]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu - Kati Roll &amp; Platter</title>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap 3.0.3-->
    <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">

    <!--Icons Fonts-->
    <link href="styles/font-awesome.min.css" rel="stylesheet" media="screen">

    <!--Animations-->
    <link href="styles/animate-custom.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <!-- Cart Styling -->
    <link href="styles/shopping-cart.css" rel="stylesheet" type="text/css">

    <!--Modernizr-->
    <script src="scripts/libs/modernizr.custom.js"></script>

    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
    <script src="js/plugins/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <img class="svg" src="img/logo_big.png" height="82" width="133" alt="SpiceEnd" />
            <img class="png" src="img/logo_big.png" height="82" width="133" alt="SpiceEnd" />
            <div id="fountainG">
                <div id="fountainG_1" class="fountainG"></div>
                <div id="fountainG_2" class="fountainG"></div>
                <div id="fountainG_3" class="fountainG"></div>
                <div id="fountainG_4" class="fountainG"></div>
                <div id="fountainG_5" class="fountainG"></div>
                <div id="fountainG_6" class="fountainG"></div>
                <div id="fountainG_7" class="fountainG"></div>
                <div id="fountainG_8" class="fountainG"></div>
            </div>
        </div>
    </div>
    <!--Wrapper-->


    <!--Header-->
    <header class="pinned">
        <!--By adding "stiky" class to header we enable stiky functionality, header will be pinned to the top, when it meets the top of the window-->
        <div class="container">
            <a class="logo" href="index.html"></a>

            <!--Navigation-->
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navi-collapse">
                    <ul class="nav navbar-nav nav-left">
                        <li><a href="index.html">home</a>
                        </li>
                        <li><a href="index.html#about">about</a>
                        </li>
                        <li><a href="index.html#serv-reservation">catering</a>
                        </li>
                        <li><a href="#">menu</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav nav-right">
                        <li><a id="yelp" href="index.html#yelp">reviews</a>
                        </li>
                        <li><a href="index.html#order">order online</a>
                        </li>
                        <li class="last"><a class="scroll" href="index.html#contacts">contacts</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!--Close Navigation -->
        </div>
    </header>
    <!-- Cart -->


    <!--Menu (2 columns layout)-->
    <section class="block menu2">
        <div class="heading">
            <h2>Menu</h2><span class="triangle"></span>
        </div>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <h3>Kati Rolls</h3>
                        <span>Mint-Coriander Chutney and Onions</span>
                        <br>
                        <div class="menu-block">
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chiken Tikka Roll</h4>
                                <p>freshly grilled chicken, marinated in indian spices</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Achari Chicken Roll</h4>
                                <p>marinated chicken with a hint of pickle</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Lamb Kabab Roll</h4>
                                <p>tender lamb cooken in indian spices</p>
                                <span class="price item_price">6 .25</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chicken & Egg Roll</h4>
                                <p>marinated chicken & eggs blended to perfection in spices</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Paneer Tikka Roll</h4>
                                <p>freshly grilled cottage cheese, marinated in indian spices</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Achari Paneer Roll</h4>
                                <p>marinated cottage cheese with a hint of pickle</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Aloo Paneer Roll</h4>
                                <p>a perfect combination of marinated cottage cheese and spicy potatoes</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Aloo (Potato) Roll</h4>
                                <p>mashed potatoes cooked to perfection in indian spices</p>
                                <span class="price item_price">5 .50</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Mix Veggie Roll</h4>
                                <p>a healthy mixture of all veggies cooked in indian spices</p>
                                <span class="price item_price">5 .95</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Egg Roll</h4>
                                <p>freshly beaten eggs mixed with spices</p>
                                <span class="price item_price"> .  </span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-lg-offset-2 col-md-offset-2">
                        <h3>Platters</h3>
                        <p>Served with Pita Bread and Lettuce</p>
                        <br>
                        <div class="menu-block">
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chicken-N-Rice Platter</h4>
                                <p>all time favorite, chicken over rice</p>
                                <span class="price item_price">8 .75</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chicken-N-Lamb Platter</h4>
                                <p>chicken and lamb combined to make the perfect platter</p>
                                <span class="price item_price">9 .90</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chicken Biryani</h4>
                                <p>commonly known as the king of biryani, marinated chicken and basmati rice cooked to perfection</p>
                                <span class="price item_price">8 .75</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Spice End Platter (Chicken)</h4>
                                <p>all-time favorite chicken & rice taken to a new level by our chef</p>
                                <span class="price item_price">9 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Falafel Platter</h4>
                                <p>classic middle eastern falafel tikkis served with rice</p>
                                <span class="price item_price">8 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Veg Biryani</h4>
                                <p>exotic rice dish cooked in indian spices and seasoned veggies</p>
                                <span class="price item_price">8 .50</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Paneer Platter</h4>
                                <p>freshly grilled cottage cheese, marinated in indian spices, served with rice</p>
                                <span class="price item_price">8 .75</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <h3>Drinks</h3>
                        <div class="menu-block">
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Mango Lassi</h4>
                                <p>tangy mango mixed with blended yogurt</p>
                                <span class="price item_price">4 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Sweet Lassi</h4>
                                <p>sweet yogurt smoothie</p>
                                <span class="price item_price">4 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Chhaas</h4>
                                <p>classic indian buttermilk</p>
                                <span class="price item_price">3 .50</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Bottle Beverages</h4>
                                <span class="price item_price">1 .50</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Canned Beverages</h4>
                                <span class="price item_price">1 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                            <div class="item simpleCart_shelfItem">
                                <h4 class="item_name">Thumbs and Limca Bottles</h4>
                                <span class="price item_price">2 .00</span>
                                <a href="javascript:;" class="item_add"> Add to Cart </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-offset-3 col-md-offset-3 total">
                        <form id="checkoutForm" method="POST" action="payment.php">
                            <span class="clear">Total : </span><span class="simpleCart_grandTotal"></span>
                            <input type="hidden" name="grandTotal">
                            <button class="btn btn-primary submit-form">Checkout</button>
                       </form>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-lg-offset-2 col-md-offset-2 cart">
                        <div class="simpleCart_items col-md-8 col-lg-5"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="footer-logo"></div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="footer-contacts">
                        <h3>Contacts</h3>
                        <div class="group">
                            <i class="fa fa-map-marker"></i>
                            <p>2004 Chestnut Street
                                <br>Philadelphia, Pennsylvania 19103</p>
                        </div>
                        <div class="group">
                            <i class="fa fa-mobile"></i>
                            <p>267-639-9405</p>
                        </div>
                        <div class="group">
                            <i class="fa fa-envelope"></i>
                            <p>info@spiceend.com</p>
                        </div>
                        <div class="group">
                            <i class="fa fa-fax"></i>
                            <p>267-639-9408</p>
                        </div>
                        <div class="group last">
                            <i class="fa fa-clock-o"></i>
                            <p>Open 11am-12am Mon-Thur; 11am-3am Fri-Sat;
                                <br/>11am-12am Sun</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <h3>find us on social networks</h3>
                    <div class="social-bar">
                        <a href="https://twitter.com/spiceend" class="fa fa-twitter tooltipped" title="Twitter"></a>
                        <a href="http://www.yelp.com/biz/spice-end-philadelphia-3" class="fa fa-yelp tooltipped" title="Yelp"></a>
                        <a href="https://foursquare.com/spiceend" class="fa fa-foursquare tooltipped" title="Foursquare"></a>
                        <a href="https://www.facebook.com/spiceendphilly" class="fa fa-facebook-square tooltipped" title="Yelp"></a>
                    </div>
                </div>
            </div>
            <div class="copyright row">
                <div class="col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2">
                    <p>&copy; SpiceEnd. All Rights Reserved. Developed by <a href="http://five-tech.com/" target="_blank">Five-Tech</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--Javascript (jQuery)-->
    <script src="scripts/libs/jquery-1.10.2.min.js"></script>
    <script src="scripts/plugins/bootstrap.min.js"></script>
    <script src="scripts/plugins/jquery.validate.min.js"></script>
    <script src="scripts/simpleCart.js"></script>
    <script src="scripts/scripts-secondary.js"></script>
    <script src="scripts/cart.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
</body>

</html>
