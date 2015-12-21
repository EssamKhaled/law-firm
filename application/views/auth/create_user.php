<div class="container">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40" style="min-height: 700px;">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('frontend/ads_left'); ?>
        </div>
        <div class="col-md-8 col-sm-8 well" >
            
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
                            <a class="btn btn-circle btn-icon-only btn-default" style="border: 1px solid #CFCCCC;">
                                2
                            </a>   
                             <span style="padding-left: 10px;">Additional Details</span>
                        </div> 
                        <div class="col-md-4">
                            <a class="btn btn-circle btn-icon-only btn-default" style="border: 1px solid #CFCCCC;">
                                3
                            </a>   
                             <span style="padding-left: 10px;">Interests</span>
                        </div>                                                               
                    </div>
                    <br>
                    
                    
                    
                    <?php echo form_open("auth/create_user", array('class' => 'form-horizontal form-without-legend', 'role' => 'form')); ?>
                    <?php if($message) : ?>
                    <div class="note note-danger" style="margin-top: 50px;"><?php echo $message; ?></div>                        
                    <?php endif; ?>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">First name <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($first_name); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>                                    
                                </div>                                                                
                            </div>                         
                        </div>  
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Last name <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($last_name); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>                                    
                                </div>                                                                
                            </div>   
                        </div>  
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Email <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($email); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>                                    
                                </div>                                                                   
                            </div>
                        </div>                      
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Company <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($company); ?> 
                                    <span class="input-group-addon">
                                        <i class="fa fa-building"></i>
                                    </span>                                    
                                </div>                                                                       
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Mobile <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($phone); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>                                    
                                </div>                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Password <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($password); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>                                    
                                </div>                                                                   
                            </div>
                        </div>           
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Confirm Password <span class="require">*</span></label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <?php echo form_input($password_confirm); ?>
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>                                    
                                </div>                                                                   
                            </div>
                        </div>                               
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                <button type="submit" class="btn btn-primary">Next</button>
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



