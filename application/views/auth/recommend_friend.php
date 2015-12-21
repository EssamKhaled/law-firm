<div class="container">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_left'); ?>
        </div>
        <div class="col-md-8 col-sm-8" >

            <div class="content-form-page">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-primary">
                                1
                            </a>   
                            <span style="padding-left: 10px;">Account Details</span>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-primary">
                                2
                            </a>   
                            <span style="padding-left: 10px;">Personal Details</span>
                        </div> 
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-primary">
                                3
                            </a>   
                            <span style="padding-left: 10px;">Recommend Friend</span>
                        </div>                         
                    </div>
                    <br>

                    <?php echo form_open("auth/create_user", array('class' => 'form-horizontal form-without-legend', 'role' => 'form')); ?>
                    <?php if ($message) : ?>
                        <div class="note note-danger" style="margin-top: 50px;"><?php echo $message; ?></div>                        
                    <?php endif; ?>
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Friend Name </label>
                        <div class="col-lg-9">
                            <?php echo form_input($friend_name); ?>
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label  class="col-lg-3 control-label">Friend Email </label>
                        <div class="col-lg-9">
                            <?php echo form_input($friend_email); ?>     
                        </div>
                    </div>                                             
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                            <button type="submit" class="btn btn-primary">Finish</button>
                            <a href="<?php echo site_url(''); ?>" class="btn btn-default">back</a>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_right'); ?>
        </div>
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>



