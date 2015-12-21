<h3 class="page-title">
    Dashboard <small>reports & statistics</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS -->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue-madison">
            <div class="visual">
                <i class="fa fa-files-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    321,321                   
                </div>
                <div class="desc">
                    Total Activities
                </div>
            </div>
            <a class="more" href="javascript:;">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red-intense">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    12,390
                </div>
                <div class="desc">
                    Total Visits
                </div>
            </div>
            <a class="more" href="javascript:;">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green-haze">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    5,912
                </div>
                <div class="desc">
                    New Customers
                </div>
            </div>
            <a class="more" href="javascript:;">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple-plum">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    23,521
                </div>
                <div class="desc">
                    Total Customers
                </div>
            </div>
            <a class="more" href="javascript:;">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class='row'>
        <div class="col-md-6 col-sm-6">
            <div class="portlet solid bordered grey-cararra">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-bar-chart-o"></i>
                        Customer Registration
                    </div>
                    <div class="actions">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn grey-steel btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">New</label>
                            <label class="btn grey-steel btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics_loading">
                        <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                    </div>
                    <div id="site_statistics_content" class="display-none">
                        <div id="site_statistics" class="chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <!-- BEGIN PORTLET-->
            <div class="portlet solid grey-cararra bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-bullhorn"></i>
                        Customer Activity
                    </div>
                    <div class="actions">
                        <div class="btn-group pull-right">
                            <a href="" class="btn grey-steel btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                Filter <span class="fa fa-angle-down">
                                </span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        Q1 2015 <span class="label label-sm label-default">
                                            past </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Q2 2015 <span class="label label-sm label-default">
                                            past </span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:;">
                                        Q3 2015 <span class="label label-sm label-success">
                                            current </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Q4 2015 <span class="label label-sm label-warning">
                                            upcoming </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading">
                        <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                    </div>
                    <div id="site_activities_content" class="display-none">
                        <div id="site_activities" style="height: 228px;">
                        </div>
                    </div>
                    <div style="margin: 20px 0 10px 30px">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-success">
                                    Male: </span>
                                <h3>13,234</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-info">
                                    Female: </span>
                                <h3>134,900</h3>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>        
    </div>
    
    <div class="clearfix"></div>
    
    <div class="row ">
        <div class="col-md-12 col-sm-12">
            <div class="portlet solid grey-cararra bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Industry Stats
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-sm btn-default easy-pie-chart-reload">
                            <i class="fa fa-repeat"></i> Reload </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="23">
                                    <span>
                                        +23 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Engineers <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number visits" data-percent="17">
                                    <span>
                                        +17 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Doctors <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>  
                        
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number bounce" data-percent="20">
                                    <span>
                                        +20 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Banking <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="25">
                                    <span>
                                        +25 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Insurance <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number visits" data-percent="15">
                                    <span>
                                        +15 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Customer Service <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="easy-pie-chart">
                                <div class="number bounce" data-percent="12">
                                    <span>
                                        +12 </span>
                                    %
                                </div>
                                <a class="title" href="#">
                                    Human Resources <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- END DASHBOARD STATS -->
<div class="clearfix"></div>
