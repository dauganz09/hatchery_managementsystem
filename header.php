<?php require_once 'class/init.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title> <?php echo  isset($user_level) ? $user_level: "User";  ?> : Online Hatchery Monitoring and Feeding Monitoring  </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="assets/css/lib/bootstrap.css" rel="stylesheet">
<link href="assets/css/lib/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/boo-extension.css" rel="stylesheet">
<link href="assets/css/boo.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/boo-coloring.css" rel="stylesheet">
<link href="assets/css/boo-utility.css" rel="stylesheet">
<link href="assets/plugins/pl-table/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
<link href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">

<link href="assets/css/pnotify.custom.min.css" rel="stylesheet">

<link href="assets/css/animate.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body class="sidebar-left ">
<div class="page-container">
    <div id="header-container">
        <div id="header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="brand" href="javascript:void(0);"><img src="assets/img/demo/logo_system.png"></a>
                        <div class="search-global">
                            <input id="globalSearch" class="search search-query input-medium" type="search">
                            <a class="search-button" href="javascript:void(0);"><i class="fontello-icon-search-5"></i></a> </div>
                        <div class="nav-collapse collapse">

                            <ul class="nav">
                                <li class="active"> <a href="#">Dashboard</a> </li>

                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span lass="fontello-icon-users"></span> User Accounts <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">View User List</a></li>

                                        <li><a  href="#register" data-toggle="modal">Add User</a>

                                        </li>
                                        <li class="divider"></li>
                                        <li class="nav-header">My Account</li>
                                        <li><a tabindex="-1" href="javascript:void(0);">Edit Account</a></li>
                                        <li><a tabindex="-1" href="index.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // navbar -->

            <div class="header-drawer">
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Components</a> </div>
                <!-- // Resposive navigation -->
                <div class="breadcrumbs-nav hidden-phone">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i> Dashboard</a></li>
                        <!-- <li class="dropdown"><a href="javascript:void(0);">Table </a> <span class="divider">/</span>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Table</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="active"> </li> -->
                    </ul>
                </div>
                <!-- // breadcrumbs -->
            </div>
            <!-- // drawer -->
        </div>
    </div>
    <!-- // header-container -->

    <div id="main-container">
        <div id="main-sidebar" class="sidebar sidebar-inverse">
            <div class="sidebar-item">
                <div class="media profile">
                    <div class="media-thumb media-left thumb-bordereb"> <a class="img-shadow" href="javascript:void(0);"><img class="thumb" src="assets/img/demo/avatar.png"></a> </div>
                    <div class="media-body">
                        <h5 class="media-heading">Rustom Clemente<small>as Administrator</small></h5>
                        <p class="data">Last Access: 16 March 15:30</p>
                    </div>
                </div>
            </div>
            <!-- // sidebar item - profile -->

            <ul id="mainSideMenu" class="nav nav-list nav-side">

                <!-- // item accordionMenu Dashboard -->
                <li class="accordion-group">
                    <div class="accordion-heading"> <a href="#accForms" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon aweso-icon-list-alt"></span><i class="chevron fontello-icon-right-open-3"></i> Hatchery </a> </div>
                    <ul class="accordion-content nav nav-list collapse" id="accForms">
                      
                        
                        <li> <a href="mainpage.php"> <i class="fontello-icon-right-dir"></i>Monitoring</a> </li>
                        <li> <a href="events.php"> <i class="fontello-icon-right-dir"></i> Events</a> </li>
                         </ul>
                </li>
                <!-- // item accordionMenu Forms -->
                
                <!-- // item accordionMenu Components -->
                <li class="accordion-group">
                    <div class="accordion-heading"> <a href="tanks.php" data-parent=""  class="accordion-toggle"> <span class="item-icon fontello-icon-align-justify"></span> <i class="chevron fontello-icon-right-open-3"></i> Tanks </a> </div>
                    <ul class="accordion-content nav nav-list collapse" id="accTables">
                       <!--  <li> <a href="tanks.php"> <i class="fontello-icon-right-dir"></i> View Tanks</a> </li>
                          -->
                    </ul>
                </li>
                <!-- // item accordionMenu Tables -->
                <li class="accordion-group">
                    <div class="accordion-heading"> <a href="species.php" data-parent=""  class="accordion-toggle"> <span class="item-icon fontello-icon-chart"></span> <i class="chevron fontello-icon-right-open-3"></i> Species </a> </div>
                   <!--  <ul class="accordion-content nav nav-list collapse" id="accStatistics">
                        <li> <a href="#"> <i class="fontello-icon-right-dir"></i> View Specieds</a> </li>
                        <li> <a href="#"> <i class="fontello-icon-right-dir"></i> Add New Species </a> </li>

                    </ul> -->
                </li>
                <li class="accordion-group">
                    <div class="accordion-heading"> <a href="#settings" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-cog-4"></span> <i class="chevron fontello-icon-right-open-3"></i> Feeds </a> </div>
                    <ul class="accordion-content nav nav-list collapse" id="settings">
                        
                        <li> <a href="feeds.php"> <i class="fontello-icon-magic"></i> View Feeds </a> </li>
                        

                    </ul>
                </li>

                <!-- // item accordionMenu UI Elements -->

            </ul>
            <!-- // sidebar menu -->

            <div class="sidebar-item"></div>
            <!-- // sidebar item -->

        </div>
        <!-- // sidebar -->
<div id="register" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4><i class=" fontello-icon-user" ></i>Register User</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" id="form_register">
            <ul class="form-list label-left list-bordered dotted">
                                                  <li class="control-group">
                                <label for="fname" class="control-label">Firstname:</label>
                                    
                                        <input  id="fname" size="16" type="text" name="fname">

                                     </li>
                                       <li class="control-group">
                                <label for="lname" class="control-label">Lastname:</label>
                                    
                                        <input  id="lname" size="16" type="text" name="lname">

                                     </li>
                                                 <li class="control-group">
                                <label for="username" class="control-label">Username:</label>
                                    
                                        <input  id="uname" size="16" type="text" name="uname">

                                     </li>
                                      <li class="control-group">
                                <label for="username" class="control-label">Password:</label>
                                    
                                        <input  id="pass" size="16" type="password" name="pass">

                                     </li>
                                    <li class="control-group">
                                <label for="cp" class="control-label">Cellphone Number:</label>
                                    
                                        <input  id="cp" size="16" type="text" name="cp">

                                     </li>
                                        <li class="control-group">
                                <label for="user_type" class="control-label">User Type:</label>
                                    
                                        <select name="user_type" id="user_type">
                                                <option value="1">Admin</option>
                                                <option value="2">Farm Worker/ OJT</option> 

                                        </select>
                                     </li>
                                        

                                            </ul>
                                                </form>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green" id="registerUser">Register</button>
        </div>
    </div>