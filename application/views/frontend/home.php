<?php $this->layout->block('title'); ?>Home Page<?php $this->layout->block(); ?>

<?php $this->layout->block('meta_tags'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="Home Page">
<meta property="og:description" content="">
<meta property="og:image" content="<?php echo base_url('assets/img/main_photo.jpg'); ?>">
<meta property="og:url" content="<?php echo site_url(''); ?>">
<?php $this->layout->block(); ?>

<?php $this->layout->block('extra_css'); ?> <?php $this->layout->block(); ?>
<?php $this->layout->block('extra_js'); ?> <?php $this->layout->block(); ?>

<!-- About block BEGIN -->
<div class="about-block content content-center" id="about">
    <div class="">
        <!-- BEGIN SLIDER -->
        <div class="page-slider" style="margin-top: -50px;">
            <div class="fullwidthbanner-container revolution-slider">
                <div class="fullwidthabnner">
                    <ul id="revolutionul">
                        <?php foreach ($sliders as $slider) : ?>
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url(); ?>assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img src="<?php echo base_url('assets/uploads/' . $slider->image); ?>" alt="">                        
                                <div class="caption lft slide_subtitle"
                                     data-x="30"
                                     data-y="105"
                                     data-speed="400"
                                     data-start="1500"
                                     data-easing="easeOutExpo">
                                         <?php echo $slider->title; ?>
                                </div>
                                <div class="caption lft slide_subtitle"
                                     data-x="30"
                                     data-y="160"
                                     data-speed="400"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                         <?php echo $slider->message; ?>
                                </div>                       
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </div>
        <!-- END SLIDER -->
    </div>
</div>

<div class="services-block content content-center" style="margin-top: -40px;" id="services">
    <div class="container">
        <h2>Easy <strong>Steps</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-user"></i>
                <h3>Free Register</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-gift"></i>
                <h3>Get your Gift</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-shopping-cart"></i>
                <h3>Shop with Points</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-block content content-center margin-bottom-65">
    <div class="container">
        <h2>Register <strong>Now</strong></h2>
        <div>&nbsp;</div>
        <div class="col-md-6">
            <a href="#" class="btn btn-lg blue pull-right" style="background-color: #4b6e99;padding: 15px;width: 50%;">
                <i class="fa fa-facebook pull-left" style="font-size: 30px;margin-top:3px;"></i>  
                <span style="font-size: 18px;text-transform:capitalize;">Login With Facebook</span>
            </a>              
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-lg blue pull-left" style="background-color: #3bc2e9;padding: 15px;width: 50%;">
                <i class="fa fa-twitter pull-left" style="font-size: 30px;margin-top:3px;"></i>  
                <span style="font-size: 18px;text-transform:capitalize;">Login With Twitter</span>
            </a>              
        </div> 
        <div>&nbsp;</div>
        <div class="col-md-6">
            <a href="#" class="btn btn-lg blue pull-right" style="background-color: #db4a37;padding: 15px;width: 50%;">
                <i class="fa fa-google-plus pull-left" style="font-size: 30px;margin-top:3px;"></i>  
                <span style="font-size: 18px;text-transform:capitalize;">Login With Google+</span>
            </a>              
        </div> 
        <div class="col-md-6">
            <a href="<?php echo site_url('auth/create_user'); ?>" class="btn btn-primary pull-left" style="padding: 15px;width: 50%;">
                <i class="fa fa-user pull-left" style="font-size: 30px;margin-top:3px;"></i>  
                <span style="font-size: 18px;text-transform:capitalize;">Register Now &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </a>              
        </div>         
        
      
    </div>
</div>
