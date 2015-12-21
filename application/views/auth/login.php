<div class="container">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_left'); ?>
        </div>
        <div class="col-md-8 col-sm-8 well">
            <div class="content-form-page">
                <div class="row">
                    <div id="infoMessage"><?php echo $message; ?></div>                    
                    <?php echo form_open("auth/login", array('class' => 'form-horizontal form-without-legend', 'role' => 'form')); ?>
                        
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">
                                <strong style="display: block;width: 100%;padding: 0;padding-bottom: 5px;line-height: inherit;color: #939393;border: 0;border-bottom: 1px solid #ccc;">
                                    Login to your account
                                </strong>
                            </label>                                             
                        </div>                       
                        <div class="form-group">
                            <label for="email" class="col-lg-3 control-label">Email Address <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($identity);?>  
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>                                    
                                </div>
                                
                            </div>
                        </div>                   
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Password <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($password);?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Remember Me <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="form-control"');?>    
                            </div>
                        </div>                                   
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                <button type="submit" class="btn btn-primary">Login</button>
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