<?php  

if (isset($_POST['signin'])) :
    $username = trim($_POST['id_login_email']);
    $password = trim($_POST['id_login_password']);

    if($username==="admin@localhost"):
        $access_level = 'Administrator';
    else:
        $access_level = 'Staff';
    endif;
endif;    
?>
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
<title>Online Hatchery Monitoring and Feeding Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Custom styles -->
<style type="text/css">
.signin-content {
  max-width: 360px;
  margin: 0 auto 20px;
}
</style>

<!-- Le styles -->
<link href="assets/css/lib/bootstrap.css" rel="stylesheet">
<link href="assets/css/lib/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/boo-extension.css" rel="stylesheet">
<link href="assets/css/boo.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/boo-coloring.css" rel="stylesheet">
<link href="assets/css/boo-utility.css" rel="stylesheet">

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

<body class="signin signin-vertical">
<div class="page-container">
    <div id="header-container">
        <div id="header">
            <div class="navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container"> </div>
                </div>
            </div>
            <!-- // navbar -->
            
            <div class="header-drawer" style="height:3px"> </div>
            <!-- // breadcrumbs --> 
        </div>
        <!-- // drawer --> 
    </div>
    <!-- // header-container -->
    
    <div id="main-container">
        <div id="main-content" class="main-content container">
            <div class="signin-content">
               
                <div class="well well-nice form-dark">
                    <div class="tab-content overflow">
                        <div class="tab-pane fade in active" id="login">
                            <div style="padding: 0px 0px 0px 0px">
                                <img src="assets/img/demo/logo_system_2.png" alt="" >
                            </div>
                            <hr class="margin-xm">    
                            <form class="form-tied margin-00" method="post" action="mainpage.php" name="login_form">
                                <fieldset>
                                    <legend class="two"><span>Please Sign In with your ID</span></legend>
                                    <input type="hidden" name="access_level" value="<?php echo isset($access) ? $access : "" ?> "></input>
                                    <ul>
                                        <li>
                                            <input id="idLogin" class="input-block-level" type="text" name="id_login_email" placeholder="your ID or email">
                                        </li>
                                        <li>
                                            <input id="idPassword" class="input-block-level" type="password" name="id_login_password" placeholder="password">
                                        </li>
                                    </ul>
                                    <button type="submit" name="signin" class="btn btn-envato btn-block btn-large">SIGN IN</button>
                                    <hr class="margin-xm">
                                    <label class="checkbox pull-left">
                                        <input id="remember" class="checkbox" type="checkbox">
                                        Remember me </label>
                                    <a href="#forgot" class="link pull-right" data-toggle="tab">Forgot Password?</a>
                                </fieldset>
                            </form>
                            <!-- // form --> 
                            
                        </div>
                        <!-- // Tab Login -->
                        
                        <div class="tab-pane fade" id="forgot">
                            <h3 class="no-margin-top">Forgot your password?</h3>
                            <form class="margin-00" method="post" action="dashboard-one.html" name="forgot_password">
                                <p class="note">Enter your e-mail address, we will send you an e-mail code for password reset.</p>
                                <input id="email" class="input-block-level" type="email" name="id_email_forgot" placeholder="your email">
                                <p class="text-center">or</p>
                                <input id="email" class="input-block-level" type="tel" name="id_phone_forgot" placeholder="number phone">
                                <hr class="margin-xm">
                                <button type="submit" class="btn btn-envato">Submit</button>
                                <p>Have you remembered? <a href="#login" class="link pull-right" data-toggle="tab">Try to log in again.</a></p>
                            </form>
                            <!-- // form --> 
                            
                        </div>
                        <!-- // Tab Forgot -->
                        
                        <div class="tab-pane fade" id="register">
                            <h3 class="no-margin-top"><i class="fontello-icon-users"></i> New User Registration</h3>
                            <form class="form-tied margin-00" method="post" action="dashboard-one.html" name="login_form">
                                <fieldset>
                                    <legend class="two"><span>Account information</span></legend>
                                    <ul>
                                        <li>
                                            <input id="idLogin" class="input-block-level" type="text" name="id_name" placeholder="name">
                                        </li>
                                        <li>
                                            <input id="idLogin" class="input-block-level" type="text" name="id_username" placeholder="username">
                                        </li>
                                        <li>
                                            <input id="idLogin" class="input-block-level" type="text" name="id_email_address" placeholder="Cellphone Number">
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <legend class="two"><span>Password</span></legend>
                                    <ul>
                                        <li>
                                            <input id="idPassw" class="input-block-level" type="password" name="password" placeholder="password">
                                        </li>
                                        <li>
                                            <input id="idPassw" class="input-block-level" type="password" name="confirm_password" placeholder="confirm password">
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-green btn-block btn-large">REGISTER TO OHMFM</button>
                                    <hr class="margin-xm">
                                    <p>Have you remembered? <a href="#login" class="link pull-right" data-toggle="tab">Try to log in again.</a></p>
                                </fieldset>
                            </form>
                            <!-- // form --> 
                            
                        </div>
                        <!-- // Tab Forgot --> 
                        
                    </div>
                </div>
                <!-- // Well-Nice --> 
                
                <a href="#register" class="btn btn-block btn-yellow btn-large f12" data-toggle="tab">No account yet? Register now!</a>
                <div class="web-description">
                    <h5>Copyright &copy; 2016 Online Hatchery Monitoring & Feeding Management</h5>
                </div>
               
            </div>
            <!-- // sign-content --> 
            
        </div>
        <!-- // main-content --> 
        
    </div>
    <!-- // main-container  --> 
    
</div>
<!-- // page-container --> 

<!-- <div class="modal hide fade" id="myModal">
    <div class="modal-header">
    	<h4>Welcome</h4>
    </div>
    <div class="modal-body">
    	<h3 class="margin-0s">Hi,</h3>
    	<p>This template has been updated, but the update is not yet available for download on ThemeForest.The package is awaiting approval. <br>Once the new version to download you will see in the icon template version number 1.2.0. <br>After the purchase are all updates, including this one, free.</p>
    </div>
    <div class="modal-footer">
    	<a href="#" data-dismiss="modal" class="btn btn-red">Close</a>
    </div>
</div> -->

<!-- Le javascript --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/lib/jquery.js"></script> 
<script src="assets/js/lib/jquery-ui.js"></script>
<script src="assets/js/lib/jquery.cookie.js"></script> 
<script src="assets/js/lib/jquery.date.js"></script> 
<script src="assets/js/lib/jquery.mousewheel.js"></script> 
<script src="assets/js/lib/jquery.load-image.min.js"></script>
<script src="assets/js/lib/bootstrap/bootstrap.js"></script> 

<!-- Plugins Bootstrap -->
<script src="assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script> 
<script src="assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="assets/plugins/bootstrap-fuelux/all-fuelux.min.js"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/js/bootstrap-daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-toggle-button/js/bootstrap-toggle-button.js"></script> 
<script src="assets/plugins/bootstrap-fileupload/js/bootstrap-fileupload.js"></script> 
<script src="assets/plugins/bootstrap-rowlink/js/bootstrap-rowlink.js"></script> 
<script src="assets/plugins/bootstrap-progressbar/js/bootstrap-progressbar.js"></script> 
<script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script> 
<script src="assets/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js"></script> 
<script src="assets/plugins/bootstrap-bootbox/bootbox.min.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> 
<script src="assets/plugins/bootstrap-wizard/js/bootstrap-wizard.min.js"></script>
<script src="assets/plugins/bootstrap-wizard-2/js/bwizard-only.min.js"></script>
<script src="assets/plugins/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js"></script>
 

<!-- Plugins Custom - Only example --> 
<script src="assets/plugins/pl-extension/google-code-prettify/prettify.js"></script>

<!-- Plugins Custom - System --> 
<script src="assets/plugins/pl-system/nicescroll/jquery.nicescroll.min.js"></script> 
<script src="assets/plugins/pl-system/xbreadcrumbs/xbreadcrumbs.js"></script> 

<!-- Plugins Custom - System info -->
<script src="assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script> 
<script src="assets/plugins/pl-system-info/gritter/js/jquery.gritter.min.js"></script> 
<script src="assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

<!-- Plugins Custom - Content -->
<script src="assets/plugins/pl-content/list/js/list.min.js"></script> 
<script src="assets/plugins/pl-content/list/plugins/list.paging.min.js"></script>
<script src="assets/plugins/pl-content/jpages/js/jPages.js"></script> 

<!-- Plugins Custom - Component -->
<script src="assets/plugins/pl-component/fullcalendar/fullcalendar.min.js"></script> 
<script src="assets/plugins/pl-component/rangeslider/jqallrangesliders.min.js"></script>

<!-- Plugins Custom - Form -->
<script src="assets/plugins/pl-form/uniform/jquery.uniform.min.js"></script> 
<script src="assets/plugins/pl-form/select2/select2.min.js"></script>
<script src="assets/plugins/pl-form/counter/jquery.counter.js"></script> 
<script src="assets/plugins/pl-form/elastic/jquery.elastic.js"></script> 
<script src="assets/plugins/pl-form/inputmask/jquery.inputmask.js"></script> 
<script src="assets/plugins/pl-form/inputmask/jquery.inputmask.extensions.js"></script> 
<script src="assets/plugins/pl-form/validate/js/jquery.validate.min.js"></script> 
<script src="assets/plugins/pl-form/duallistbox/jquery.duallistbox.min.js"></script>

<!-- Plugins Custom - Gallery --> 
<script src="assets/plugins/pl-gallery/nailthumb/jquery.nailthumb.1.1.min.js"></script> 
<script src="assets/plugins/pl-gallery/nailthumb/showLoading/js/jquery.showLoading.min.js"></script>
<script src="assets/plugins/pl-gallery/wookmark/jquery.imagesloaded.js"></script>
<script src="assets/plugins/pl-gallery/wookmark/jquery.wookmark.min.js"></script>
 
<!-- Plugins Tables --> 
<script src="assets/plugins/pl-table/datatables/media/js/jquery.dataTables.js"></script> 
<script src="assets/plugins/pl-table/datatables/plugin/jquery.dataTables.plugins.js"></script> 
<script src="assets/plugins/pl-table/datatables/plugin/jquery.dataTables.columnFilter.js"></script> 

<!-- Plugins data visualization --> 
<script src="assets/plugins/pl-visualization/sparkline/jquery.sparkline.min.js"></script> 
<script src="assets/plugins/pl-visualization/easy-pie-chart/jquery.easy-pie-chart.js"></script> 
<script src="assets/plugins/pl-visualization/percentageloader/percentageloader.min.js"></script>
<script src="assets/plugins/pl-visualization/knob/knob.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.categories.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.grow.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.orderBars.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.pie.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.resize.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.selection.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.stackpercent.js"></script> 
<script src="assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script> 

<!-- main js --> 
<script src="assets/js/core.js"></script> 
<script src="assets/js/application.js"></script> 

<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script> 

<script>
$(document).ready(function() {

	
});

</script>
</body>
</html>
