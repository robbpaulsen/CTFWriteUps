<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
  <head>
    <title>qdPM | Login</title>
    
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>  
    <meta name="MobileOptimized" content="320">  
                        
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" media="screen" href="/template/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/plugins/uniform/css/uniform.default.css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/style-conquer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/style-responsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" type="text/css" media="screen" href="/template/css/pages/login.css" />
     
    <!-- END THEME STYLES -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/skins/default/default.css" />
    
    <script type="text/javascript" src="/template/plugins/jquery-1.10.2.min.js"></script>
    

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/favicon.png" />
    
        
    
  </head>
  <body class="login">
  
  <div class="login-fade-in"></div>
    
  <div class="login-page-logo">
	 
   DoubleTrouble    
  </div>  
  <!-- BEGIN LOGIN -->
  <div class="content">
    
    

<form class="login-form" name="loginForm" id="loginForm" action="http://192.168.1.90/index.php/login" method="POST">

<input type="hidden" name="login[_csrf_token]" value="ed3323ab17296ce54804e4b9ff1963cc" id="login__csrf_token" />
<h3 class="form-title">Welcome to qdPM</h3>

<div></div>


<div class="form-group">
  <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
  <label class="control-label visible-ie8 visible-ie9">Email</label>
  <div class="input-icon">
  	<i class="fa fa-envelope"></i>
  	<input class="form-control placeholder-no-fix required email" type="text" autocomplete="off" placeholder="Email" name="login[email]"/>
  </div>
</div>

<div class="form-group">
	<label class="control-label visible-ie8 visible-ie9">Password</label>
	<div class="input-icon">
		<i class="fa fa-lock"></i>
		<input class="form-control placeholder-no-fix required" type="password" autocomplete="off" placeholder="Password" name="login[password]"/>
	</div>
</div>

<div class="form-actions">			
      
     <label class="checkbox"> <input type="checkbox" name="remember_me" value="1" id="remember_me" />Remember Me</label>
      
			<button type="submit" class="btn btn-info pull-right">Login </button>
</div>

<div class="forget-password">	
	<p><a href="/index.php/login/restorePassword">Password forgotten?</a></p>
</div>


  <input type="hidden" name="http_referer" value="http://192.168.1.90/index.php" id="http_referer" />  
</form>

<script type="text/javascript">
$(document).ready(function(){  
  $.extend($.validator.messages, {required: 'This field is required!',email: 'Please enter a valid email address.'});
  
  $("#loginForm").validate({ignore:''});
}); 		
</script>

  </div>
  
  <div class="copyright">
	 <a href="http://qdpm.net" target="_blank">qdPM 9.1</a> <br> Copyright &copy; 2022 <a href="http://qdpm.net" target="_blank">qdpm.net</a>
  </div>
            
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script type="text/javascript" src="/template/plugins/respond.min.js"></script>
<script type="text/javascript" src="/template/plugins/excanvas.min.js"></script>
<![endif]-->

<script type="text/javascript" src="/template/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/template/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/template/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/template/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/template/plugins/jquery.blockui.min.js"></script>
<script type="text/javascript" src="/template/plugins/jquery.cokie.min.js"></script>
<script type="text/javascript" src="/template/plugins/uniform/jquery.uniform.min.js"></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="/template/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="/template/plugins/jquery-validation/dist/additional-methods.min.js"></script>

<script type="text/javascript" src="/template/scripts/app.js"></script>

<script>
jQuery(document).ready(function() {    
   App.init();
   
});

</script>

<script type="text/javascript" src="/js/app.js"></script>
<!-- END JAVASCRIPTS -->    
           
  </body>
</html>
