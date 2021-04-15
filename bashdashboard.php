<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Bash - Servey Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/survey-dashboard/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/survey-dashboard/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
    <link href="assets/survey-dashboard/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/survey-dashboard/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/survey-dashboard/plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen">
    <link href="assets/survey-dashboard/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/survey-dashboard/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/survey-dashboard/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/survey-dashboard/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/survey-dashboard/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/survey-dashboard/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/survey-dashboard/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/survey-dashboard/webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="<?php echo base_url() ?>index.php?admin/surveydashboard" >
            <img src="assets/survey-dashboard/img/logo.png" class="logo" alt="" data-src="assets/survey-dashboard/img/logo.png" data-src-retina="assets/survey-dashboard/img/logo2x.png" width="89" height="40" />
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown hidden-xs hidden-sm">
              <a href="<?php echo base_url() ?>index.php?admin/surveydashboard" class="dropdown-toggle active" data-toggle="">
                <i class="material-icons">home</i>
              </a>
            </li>
           
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
              <li class="quicklinks  m-r-10">
                <a href="#" class="">
                  <i class="material-icons">refresh</i>
                </a>
              </li>
              <li class="quicklinks">
                <a href="#" class="">
                  <i class="material-icons">apps</i>
                </a>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
              <li class="m-r-10 input-prepend inside search-form no-boarder">
                <span class="add-on"> <i class="material-icons">search</i></span>
                <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
              </li>
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    David Nester - Commented on your wall
                  </div>
                  <div class="description">
                    Meeting postponed to tomorrow
                  </div>
                  <div class="date pull-left">
                    A min ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages danger">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Server load limited
                  </div>
                  <div class="description">
                    Database server has reached its daily capicity
                  </div>
                  <div class="date pull-left">
                    2 mins ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages success">
                <div class="user-profile">
                  <img src="assets/survey-dashboard/img/profiles/h.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/h.jpg" data-src-retina="assets/survey-dashboard/img/profiles/h2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    You haveve got 150 messages
                  </div>
                  <div class="description">
                    150 newly unread messages in your inbox
                  </div>
                  <div class="date pull-left">
                    An hour ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- END TOP NAVIGATION MENU -->
          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <div class="chat-toggler sm">
              <div class="profile-pic">
                <img src="assets/survey-dashboard/img/profiles/avatar_small.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/avatar_small.jpg" data-src-retina="assets/survey-dashboard/img/profiles/avatar_small2x.jpg" width="35" height="35" />
                <div class="availability-bubble online"></div>
              </div>
            </div>
            <ul class="nav quick-section ">
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li>
                    <a href="#"> My Account</a>
                  </li>
                 
                 
                  <li class="divider"></li>
                  <li>
                    <a href="#"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                  </li>
                </ul>
              </li>
              
             
            </ul>
          </div>
          <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/survey-dashboard/img/profiles/avatar.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/avatar.jpg" data-src-retina="assets/survey-dashboard/img/profiles/avatar2x.jpg" width="69" height="69" />
              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username">Barkha <span class="semi-bold">Sharma</span></div>
              <div class="status">Life goes on...</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li class="start  open active "> <a href="<?php echo base_url() ?>index.php?admin/surveydashboard"><i class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow  open "></span> </a>
              <ul class="sub-menu">
                <li> <a href="<?php echo base_url() ?>index.php?admin/surveydashboard"> Dashboard </a> </li>
                
              </ul>
            </li>
            <!-- <li>
              <a href="widgets.html"> <i class="material-icons">panorama_horizontal</i> <span class="title">Widgets</span> <span class="label label-important bubble-only pull-right "></span></a>
            </li> -->
         
            
           <!--  <li>
              <a href="<?php echo base_url() ?>index.php?admin/surveydashboard"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span class="title">Reports</span> </a>
            </li> -->
            
            <li class="open active">
              <a href="<?php echo base_url() ?>index.php?admin/surveycharts"> <i class="material-icons">timeline</i> <span class="title">Reports</span> </a>
            </li>
            
            
          </ul>
          
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <a href="#" class="scrollup">Scroll</a>
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
        </div>
        <div class="pull-right">
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <a href="#"><i class="material-icons">power_settings_new</i></a></div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content ">
          <div class="page-title">
            <h3>Dashboard </h3>
          </div>
          <div id="container">
            <div class="row 2col">
              <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles blue added-margin">
                  <div class="tiles-body">
                    <div class="controller">
                      <a href="javascript:;" class="reload"></a>
                      <a href="javascript:;" class="remove"></a>
                    </div>
                    <div class="tiles-title"> TODAY’S SURVEY</div>
                    <div class="heading"> <span class="animate-number" data-value="26.8" data-animation-duration="1200">6 </span>% </div>
                    <div class="progress transparent progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles green added-margin">
                  <div class="tiles-body">
                    <div class="controller">
                      <a href="javascript:;" class="reload"></a>
                      <a href="javascript:;" class="remove"></a>
                    </div>
                    <div class="tiles-title"> TOTAL USER </div>
                    <div class="heading"> <span class="animate-number" data-value="2545665" data-animation-duration="1000">0</span> </div>
                    <div class="progress transparent progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%"></div>
                    </div>
                    <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 2% higher <span class="blend">than last month</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 spacing-bottom">
                <div class="tiles red added-margin">
                  <div class="tiles-body">
                    <div class="controller">
                      <a href="javascript:;" class="reload"></a>
                      <a href="javascript:;" class="remove"></a>
                    </div>
                    <div class="tiles-title"> TODAY’S SALES </div>
                    <div class="heading"> $ <span class="animate-number" data-value="14500" data-animation-duration="1200">0</span> </div>
                    <div class="progress transparent progress-white progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%"></div>
                    </div>
                    <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="tiles purple added-margin">
                  <div class="tiles-body">
                    <div class="controller">
                      <a href="javascript:;" class="reload"></a>
                      <a href="javascript:;" class="remove"></a>
                    </div>
                    <div class="tiles-title"> TODAY’S FEEDBACKS </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="animate-number" data-value="1600" data-animation-duration="700">0</span> </div>
                      <div class="progress transparent progress-white progress-small no-radius">
                        <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                      </div>
                    </div>
                    <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 spacing-bottom">
                <div class="row tiles-container tiles white spacing-bottom">
                  <div class="tile-more-content col-md-4 col-sm-4 no-padding">
                    <div class="tiles green">
                      <div class="tiles-body">
                        <div class="heading"> Statistical </div>
                        <p>Status : live</p>
                      </div>
                      <div class="tile-footer">
                        <div class="iconplaceholder"><i class="fa fa-map-marker"></i></div>
                        258 Countries, 4835 Cities </div>
                    </div>
                    <div class="tiles-body">
                      <ul class="progress-list">
                        <li>
                          <div class="details-wrapper">
                            <div class="name">Foreign Visits</div>
                            <div class="description">Our Overseas visits</div>
                          </div>
                          <div class="details-status pull-right"> <span class="animate-number" data-value="89" data-animation-duration="800">0</span>% </div>
                          <div class="clearfix"></div>
                          <div class="progress progress-small no-radius">
                            <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="89%"></div>
                          </div>
                        </li>
                        <li>
                          <div class="details-wrapper">
                            <div class="name">Local Visits</div>
                            <div class="description">Our Overseas visits</div>
                          </div>
                          <div class="details-status pull-right"> <span class="animate-number" data-value="45" data-animation-duration="600">0</span>% </div>
                          <div class="clearfix"></div>
                          <div class="progress progress-small no-radius ">
                            <div class="progress-bar progress-bar-warning animate-progress-bar" data-percentage="45%"></div>
                          </div>
                        </li>
                        <li>
                          <div class="details-wrapper">
                            <div class="name">Other Visits</div>
                            <div class="description">Our Overseas visits</div>
                          </div>
                          <div class="details-status pull-right"> <span class="animate-number" data-value="12" data-animation-duration="200">0</span>% </div>
                          <div class="clearfix"></div>
                          <div class="progress progress-small no-radius">
                            <div class="progress-bar progress-bar-danger animate-progress-bar" data-percentage="12%"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tiles white col-md-8 col-sm-8 no-padding">
                    <div class="tiles-chart">
                      <div class="controller">
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                      <div class="tiles-body">
                        <div class="tiles-title">GEO-LOCATIONS</div>
                        <div class="heading"> 8,545,654 <i class="fa fa-map-marker"></i> </div>
                      </div>
                      <div id="world-map" style="height:405px"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="row tiles-container spacing-bottom tiles grey">
                  <div class="tiles white col-md-8 col-sm-8 no-padding">
                    <div class="tiles-body">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="mini-chart-wrapper">
                            <div class="chart-details-wrapper">
                              <div class="chartname"> New Orders </div>
                              <div class="chart-value"> 17,555 </div>
                            </div>
                            <div class="mini-chart">
                              <div id="mini-chart-orders"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="mini-chart-wrapper">
                            <div class="chart-details-wrapper">
                              <div class="chartname"> My Balance </div>
                              <div class="chart-value"> $17,555 </div>
                            </div>
                            <div class="mini-chart">
                              <div id="mini-chart-other"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div id="ricksaw"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-4 col-sm-4 no-padding">
                    <div class="tiles grey ">
                      <div class="tiles white no-margin">
                        <div class="tiles-body">
                          <div class="tiles-title blend"> OVERALL VIEWS </div>
                          <div class="heading"> <span data-animation-duration="1000" data-value="432852" class="animate-number">0</span> </div>
                          44% higher <span class="blend">than last month</span> </div>
                      </div>
                      <div id="legend"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8">
                    <div class="tiles white">
                      <div class="tiles-body">
                        <div class="controller">
                          <a href="javascript:;" class="reload"></a>
                          <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> NOTIFICATIONS </div>
                        <br>
                        <div class="notification-messages info">
                          <div class="user-profile"> <img src="assets/survey-dashboard/img/profiles/c.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/c.jpg" data-src-retina="assets/survey-dashboard/img/profiles/c2x.jpg" width="35" height="35"> </div>
                          <div class="message-wrapper">
                            <div class="heading"> David Nester - Commented on your wall </div>
                            <div class="description"> Meeting postponed to tomorrow </div>
                          </div>
                          <div class="date pull-right"> Just now </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="notification-messages danger">
                          <div class="iconholder"> <i class="icon-warning-sign"></i> </div>
                          <div class="message-wrapper">
                            <div class="heading"> Server load limited </div>
                            <div class="description"> Database server has reached its daily capicity </div>
                          </div>
                          <div class="date pull-right"> Yesterday </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="notification-messages success">
                          <div class="user-profile"> <img src="assets/survey-dashboard/img/profiles/h.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/h.jpg" data-src-retina="assets/survey-dashboard/img/profiles/h2x.jpg" width="35" height="35"> </div>
                          <div class="message-wrapper">
                            <div class="heading"> You have've got 150 messages </div>
                            <div class="description"> 150 newly unread messages in your inbox </div>
                          </div>
                          <div class="date pull-right"> Yesterday </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 no-padding">
                    <div class="tiles red weather-widget ">
                      <div class="tiles-body">
                        <div class="controller">
                          <a href="javascript:;" class="reload"></a>
                          <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> TODAY’S WEATHER </div>
                        <div class="heading">
                          <div class="pull-left"> Tuesday </div>
                          <div class="pull-right"> 55 </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="big-icon">
                          <canvas id="partly-cloudy-day" width="120" height="120"></canvas>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="tile-footer">
                        <div class="pull-left">
                          <canvas id="wind" width="32" height="32"></canvas>
                          <span class="text-white small-text-description">Windy</span> </div>
                        <div class="pull-right">
                          <canvas id="rain" width="32" height="32"></canvas>
                          <span class="text-white small-text-description">Humidity</span> </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row spacing-bottom ">
                  <div class="col-md-12">
                    <div class="tiles white added-margin">
                      <div class="tiles-body">
                        <div class="controller">
                          <a href="javascript:;" class="reload"></a>
                          <a href="javascript:;" class="remove"></a>
                        </div>
                        <div class="tiles-title"> SERVER LOAD </div>
                        <div class="heading text-black "> 250 GB </div>
                        <div class="progress  progress-small no-radius">
                          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="25%"></div>
                        </div>
                        <div class="description"> <span class="mini-description"><span class="text-black">250GB</span> of <span class="text-black">1,024GB</span> used</span>
                        </div>
                      </div>
                    </div>
                    <div class="tiles white added-margin">
                      <div id="chart"> </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-6 spacing-bottom">
                    <div class="widget">
                      <div class="widget-title dark">
                        <div class="pull-left ">
                          <button class="btn  btn-dark  btn-small" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                        Todo list
                        <div class="controller">
                          <a href="javascript:;" class="reload"></a>
                          <a href="javascript:;" class="remove"></a>
                        </div>
                      </div>
                      <div class="widget-body">
                        <div class="col-md-12">
                          <input type="text" class="form-control dark m-b-25" id="date">
                        </div>
                        <br>
                        <div class="row-fluid">
                          <div class="checkbox check-success 	">
                            <input type="checkbox" value="1" id="chk_todo01" class="todo-list">
                            <label for="chk_todo01">Send email to David, new signups</label>
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="checkbox check-success 	">
                            <input type="checkbox" checked="checked" value="1" id="chk_todo02" class="todo-list">
                            <label for="chk_todo02" class="done">Call Jane!!</label>
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="checkbox check-success 	">
                            <input type="checkbox" value="1" id="chk_todo03" class="todo-list">
                            <label for="chk_todo03">Server upgrades ASAP</label>
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="checkbox check-success 	">
                            <input type="checkbox" value="1" id="chk_todo04" class="todo-list">
                            <label for="chk_todo04">Hello, new task</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 white col-sm-6">
                    <div class="tiles purple added-margin" style="max-height:345px">
                      <div class="tiles-body">
                        <div class="controller">
                          <a href="javascript:;" class="reload"></a>
                          <a href="javascript:;" class="remove"></a>
                        </div>
                        <h3 class="text-white "> <br>
                      <br>
                      <br>
                      <span class="semi-bold">Steve Jobs</span> Time Capsule` is 
                      Finally Unearthed on <span class="semi-bold">Skyace News</span> </h3>
                        <div class="blog-post-controls-wrapper">
                          <div class="blog-post-control"> <a class="text-white" href="#"><i class="icon-heart"></i> 47k</a> </div>
                          <div class="blog-post-control"> <a class="text-white" href="#"><i class="icon-comment"></i> 1584</a> </div>
                        </div>
                        <br>
                      </div>
                    </div>
                    <div class="tiles white added-margin">
                      <div class="tiles-body">
                        <div class="row">
                          <div class="user-comment-wrapper col-mid-12">
                            <div class="profile-wrapper"> <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35"> </div>
                            <div class="comment">
                              <div class="user-name"> David <span class="semi-bold">Cooper</span> </div>
                              <div class="preview-wrapper"> What's the progress on the new project? </div>
                              <div class="more-details-wrapper">
                                <div class="more-details"> <i class="icon-time"></i> 12 mins ago </div>
                                <div class="more-details"> <i class="icon-map-marker"></i> Near Florida </div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE -->
        </div>
      </div>
      <!-- BEGIN CHAT -->
      <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
          <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">group chats</div>
              <div class="side-widget-content">
                <div id="groups-list">
                  <ul class="groups">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Office work</a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Personal vibes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="side-widget fadeIn">
              <div class="side-widget-title">favourites</div>
              <div id="favourites-list">
                <div class="side-widget-content">
                  <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                    <div class="user-profile">
                      <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        Jane Smith
                      </div>
                      <div class="user-more">
                        Hello you there?
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <span class="badge badge-important">3</span>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon green"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="David Nester">
                    <div class="user-profile">
                      <img src="assets/survey-dashboard/img/profiles/c.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/c.jpg" data-src-retina="assets/survey-dashboard/img/profiles/c2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        David Nester
                      </div>
                      <div class="user-more">
                        Busy, Do not disturb
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <div class="clearfix"></div>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon red"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">more friends</div>
              <div class="side-widget-content" id="friends-list">
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/h.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/h.jpg" data-src-retina="assets/survey-dashboard/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/c.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/c.jpg" data-src-retina="assets/survey-dashboard/img/profiles/c2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/survey-dashboard/img/profiles/d.jpg" data-chat-user-pic-retina="assets/survey-dashboard/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/h.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/h.jpg" data-src-retina="assets/survey-dashboard/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="chat-messages-header">
              <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
              <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
            </div>
            <div class="chat-messages scrollbar-dynamic clearfix">
              <div class="inner-scroll-content clearfix">
                <div class="sent_time">Yesterday 11:25pm</div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Hello, You there?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      How was the meeting?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/survey-dashboard/img/profiles/d.jpg" alt="" data-src="assets/survey-dashboard/img/profiles/d.jpg" data-src-retina="assets/survey-dashboard/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="sent_time ">Today 11:25pm</div>
                <div class="user-details-wrapper pull-right">
                  <div class="user-details">
                    <div class="bubble sender">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Sent On Tue, 2:45pm</div>
                </div>
              </div>
            </div>
            <div class="chat-input-wrapper" style="display:none">
              <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END CHAT -->
      <!-- END CONTAINER -->
    </div>
    <script src="assets/survey-dashboard/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/survey-dashboard/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="assets/survey-dashboard/webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/survey-dashboard/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-morris-chart/js/morris.min.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script>
    <script src="assets/survey-dashboard/plugins/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-flot/jquery.flot.min.js"></script>
    <script src="assets/survey-dashboard/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/survey-dashboard/plugins/skycons/skycons.js"></script>
    <!-- END PAGE LEVEL PLUGINS   -->
    <!-- PAGE JS -->
    <script src="assets/survey-dashboard/js/dashboard.js" type="text/javascript"></script>
  </body>
</html>