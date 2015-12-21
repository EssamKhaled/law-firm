<div class="container">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <img src="http://pagead2.googlesyndication.com/simgad/9935985462421392984" class="responsive" style="width: 100%;margin-top: 20px;" />
        </div>
        <div class="col-md-8 col-sm-8" >
            <div class="margin-top-20">
                <!-- Pricing item BEGIN -->
                <?php foreach ($subscriptions as $subscription) : ?>
                    <div class="col-md-4">
                        <div class="pricing hover-effect">
                            <div class="pricing-head">
                                <h3>
                                    <?php echo $subscription->subscription_name; ?>
                                </h3>
                                <h4><i>€</i><?php echo $subscription->price; ?><i></i>
                                    <span>
                                        <?php echo $subscription->period; ?>
                                    </span>
                                </h4>
                            </div>
                            <div class="pricing-footer">
                                <div style="height: 150px;">
                                    <?php echo $subscription->subscribe_description; ?>
                                </div>
                                <a href="#" class="btn btn-primary">
                                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>            

                    <!-- Pricing item END -->
                <?php endforeach; ?>
            </div>            
        </div>
        <div class="col-md-2 col-sm-2">
            <img src="http://pagead2.googlesyndication.com/simgad/15014435257038187581" class="responsive" style="width: 100%;margin-top: 20px;" />
        </div>
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>


