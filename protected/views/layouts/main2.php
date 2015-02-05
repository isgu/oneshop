<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"><\/script>')</script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/radio.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/checkbox.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/selectBox.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.carouFredSel-5.2.2-packed.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jqzoom-core.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.transit.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.2.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.anythingslider.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.anythingslider.fx.js"></script>
</head>
<body>
    <div id="top">
        <div class="container_12">
            <div class="grid_3">
                <div class="lang">
                    <ul>
                        <li class="current"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">GM</a></li>
                    </ul>
                </div><!-- .lang -->

                <div class="currency">
                    <ul>
                        <li class="current"><a href="#">$</a></li>
                        <li><a href="#">&#8364;</a></li>
                        <li><a href="#">&#163;</a></li>
                    </ul>
                </div><!-- .currency -->
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <nav>
                    <ul>
                        <li class="current"><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="login.html">Sign Up</a></li>
                    </ul>
                </nav>
            </div><!-- .grid_9 -->
        </div>
    </div><!-- #top -->

    <header>
        <div class="container_12">
            <div class="grid_3">
                <hgroup>
                    <h1 id="site_logo"><a href="index.html" title=""><img src="img/logo.png" alt="Online Store Theme Logo"></a></h1>
                    <h2 id="site_description">Online Store Theme</h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <div class="top_header">
                    <div class="welcome">
                        Welcome visitor you can <a href="login.html">login</a> or <a href="login.html">create an account</a>.
                    </div><!-- .welcome -->

                    <ul id="cart_nav">
                        <li>
                            <a class="cart_li" href="#">
                                <div class="cart_ico"></div>
                                Cart
                                <span>$0.00</span>
                            </a>
                            <ul class="cart_cont">
                                <li class="no_border recently">Recently added item(s)</li>
                                <li>
                                    <a href="product_page.html" class="prev_cart"><div class="cart_vert"><img src="img/content/cart_img.png" alt="Product 1" title=""></div></a>
                                    <div class="cont_cart">
                                        <h4>Faddywax Fragrance Diffuser Set <br>Gardenia</h4>
                                        <div class="price">1 x <span>$399.00</span></div>
                                    </div>
                                    <a title="close" class="close" href="#"></a>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <a href="product_page.html" class="prev_cart"><div class="cart_vert"><img src="img/content/cart_img2.png" alt="Product 2" title=""></div></a>
                                    <div class="cont_cart">
                                        <h4>Caldrea Linen and Room Spray</h4>
                                        <div class="price">1 x <span>$123.00</span></div>
                                    </div>
                                    <a title="close" class="close" href="#"></a>
                                    <div class="clear"></div>
                                </li>
                                <li class="no_border">
                                    <a href="shopping_cart.html" class="view_cart">View shopping cart</a>
                                    <a href="checkout.html" class="checkout">Procced to Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->

                    <form class="search">
                        <input type="submit" class="search_button" value="">
                        <input type="text" name="search" class="search_form" value="" placeholder="Search entire store here...">
                    </form><!-- .search -->
                </div><!-- .top_header -->

                <nav class="primary">
                    <ul>
                        <li class="curent"><a href="index.html">Home</a></li>
                        <li><a href="catalog_grid.html">Solids</a></li>
                        <li><a href="catalog_grid.html">Liquids</a></li>
                        <li class="parent">
                            <a href="catalog_grid.html">Spray</a>
                            <ul class="sub">
                                <li><a href="catalog_grid.html">For home</a></li>
                                <li><a href="catalog_grid.html">For Garden</a></li>
                                <li><a href="catalog_grid.html">For Car</a></li>
                                <li><a href="catalog_grid.html">Other spray</a></li>
                            </ul>
                        </li>
                        <li><a href="catalog_grid.html">Electric</a></li>
                        <li><a href="catalog_grid.html">For cars</a></li>
                        <li class="parent">
                            <a href="#">All pages</a>
                            <ul class="sub">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="typography_page.html">Typography and basic styles</a></li>
                                <li><a href="catalog_grid.html">Catalog (grid view)</a></li>
                                <li><a href="catalog_list.html">Catalog (list type view)</a></li>
                                <li><a href="product_page.html">Product view</a></li>
                                <li><a href="shopping_cart.html">Shoping cart</a></li>
                                <li><a href="checkout.html">Proceed to checkout</a></li>
                                <li><a href="compare.html">Products comparison</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="contact_us.html">Contact us</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="blog.html">Blog posts</a></li>
                                <li><a href="blog_post.html">Blog post view</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- .primary -->
            </div><!-- .grid_9 -->
        </div>
    </header>

    

    <footer>
        <div class="footer_navigation">
            <div class="container_12">
                <div class="grid_3">
                     <h3>Contact Us</h3>
                    <ul class="f_contact">
                        <li>49 Archdale, 2B Charlestone</li>
                        <li>+777 (100) 1234</li>
                        <li>mail@example.com</li>
                    </ul><!-- .f_contact -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Information</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">About As</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Secure payment</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Costumer Servise</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">Contact As</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>My Account</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_12 newsletter-payments">
                    <div class="newsletter">
                        <div class="icon-mail">Newsletter</div>
                        <p>Subscribe to notifications about discounts from our store</p>
                        <form>
                            <input type="submit" value="">
                            <input type="email" name="newsletter" value="" placeholder="Enter your email address...">
                        </form>
                    </div><!-- .newsletter -->

                    <div class="payments">
                        <img src="img/payments.png" alt="Payments">
                    </div><!-- .payments -->
                </div><!-- .grid_12.newsletter-payments -->

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_navigation -->

        <div class="footer_info">
            <div class="container_12">
                <div class="grid_6">
                    <p class="copyright">© Diamond Store Theme, 2013.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
                </div><!-- .grid_6 -->

                <div class="grid_6">
                    <div class="soc">
                        <a class="google" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="facebook" href="#"></a>
                    </div><!-- .soc -->
                </div><!-- .grid_6 -->

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_info -->
    </footer>
</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html>