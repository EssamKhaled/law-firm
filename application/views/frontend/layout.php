<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>City Stars</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/global/css/components.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/onepage/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/onepage/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/onepage/css/themes/green.css" rel="stylesheet" id="style-color">
    <link href="<?php echo base_url(); ?>assets/frontend/onepage/css/custom.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->    
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class="menu-always-on-top">
    <?php if($this->ion_auth->is_admin()) : ?>
    <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>Admin Mini-Panel</p>
            <p><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></p>
            <p><a href="<?php echo site_url('admin/users'); ?>">Customers</a></p>
            <p><a href="<?php echo site_url('admin/reports'); ?>">Reports</a></p>
            
        </div>
    </div>
    <?php endif; ?>
    
<!-- Header BEGIN -->
<div class="header header-mobi-ext" style="background-color: #313030;">
    <div class="container">
        <div class="row">
            <!-- Logo BEGIN -->
            <div class="col-md-2 col-sm-2">
                <a class="scroll site-logo" href="#promo-block"><img src="<?php echo base_url(); ?>assets/frontend/onepage/img/logo/green.png" alt="Metronic One Page"></a>
            </div>
            <!-- Logo END -->
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Navigation BEGIN -->
            <div class="col-md-10 pull-right">
                <ul class="header-navigation">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                    <li>&nbsp;</li>
                    <?php if (!$this->session->userdata('user_id')) : ?>
                        <li><a href="<?php echo site_url('auth/create_user'); ?>">Register Now</a></li>
                        <li><a href="<?php echo site_url('auth/login'); ?>">Login</a></li>
                    <?php else : ?>
                        <li><a href="<?php echo site_url('auth/logout'); ?>">Logout</a></li>
                    <?php endif; ?>                    

                </ul>
            </div>
            <!-- Navigation END -->
        </div>
    </div>
</div>
<!-- Header END -->

<!-- Content START -->
<div class="main_content">
    <div class="container" style="margin-top: 90px;">

    </div>
    <?php echo $content; ?>
</div>
<!-- Content END -->

<div class="pre-footer" id="contact">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2>City Stars</h2>
                <p>
Building on our previous achievements and unique position in the Egyptian market, as an icon and pioneer in the world of premium quality mixed-use real estate developments in Egypt through our mega real estate integrated project of Citystars Heliopolis in Cairo.
                </p>
                <p>
Citystars Properties will continue to create, manage and maintain living landmarks with cosmopolitan experience and Egyptian flair, with expansion in the new costal and urban destinations that will be launched soon: Citystars Sharm El Sheikh, Citystars North Coast, Citystars Red Sea Riviera, Citystars Katameyah and Citystars 6th of October.
                </p>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->
            <!-- BEGIN TWITTER BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2 class="margin-bottom-0">Latest Tweets</h2>
                <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
            </div>
            <!-- END TWITTER BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <!-- BEGIN BOTTOM CONTACTS -->
                <h2>Our Contacts</h2>
                <address class="margin-bottom-20">
                    Omar Ibn El Khattab St., Stars Centre<br>
                    Heliopolis, Cairo, Egypt<br>
                    Phone: 16478<br>
                    Email: <a href="mailto:info@citystars.com.eg">info@citystars.com.eg</a><br>
                </address>
                <!-- END BOTTOM CONTACTS -->
                <div class="pre-footer-subscribe-box">
                    <h2>Newsletter</h2>
                    <form action="javascript:void(0);">
                        <div class="input-group">
                            <input type="text" placeholder="youremail@mail.com" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Subscribe</button>
                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6">
                <div class="copyright"><?php echo date('Y'); ?> © City Stars. ALL Rights Reserved.</div>
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-6 col-sm-6 pull-right">
                <ul class="social-icons">
                    <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
                    <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
                    <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
                    <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
                    <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
                    <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
                </ul>
            </div>
            <!-- END SOCIAL ICONS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->
<a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<![endif]-->
<!-- Load JavaScripts at the bottom, because it will reduce page load time -->
<!-- Core plugins BEGIN (For ALL pages) -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Core plugins END (For ALL pages) -->
<!-- BEGIN RevolutionSlider -->
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script>
<!-- END RevolutionSlider -->
<!-- Core plugins BEGIN (required only for current page) -->
<script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.parallax.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/onepage/scripts/jquery.nav.js"></script>

<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- Core plugins END (required only for current page) -->
<!-- Global js BEGIN -->
<script src="<?php echo base_url(); ?>assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        Layout.init();
        RevosliderInit.initRevoSlider();
    });
</script>
<!-- Global js END -->
</body>
</html>