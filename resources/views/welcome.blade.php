<!DOCTYPE html>
<html lang="en" class="">
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>Metronic | #1 Selling Ultimate Bootstrap Admin Dashboard Template</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="Metronic Launcher"/>
		<meta content="" name="KeenThemes"/>

		<meta name="keywords" content="bootstrap admin, bootstrap angularjs theme, bootstrap material design, metronic admin theme, bootstrap admin theme, bootstrap admin panel, bootstrap admin themes, bootstrap dashboard, bootstrap dashboard template, bootstrap dashboard theme, admin dashboard, bootstrap admin dashboard, bootstrap admin theme, admin template, responsive admin template, responsive dashboard, responsive dashboard template, dashboard designs" />

		<meta name="description" content="Metronic - #1 Selling Premium Bootstrap Admin Theme of All Time. Build with Twitter Bootstrap, SASS, AngularJS, Material Design. Trusted By Tens of Thousands Users."/>
		<link rel="canonical" href="http://keenthemes.com/" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Premium Bootstrap Admin Themes" />
		<meta property="og:description" content="Metronic - #1 Selling Premium Bootstrap Admin Theme of All Time. Build with Twitter Bootstrap, SASS, AngularJS, Material Design. Trusted By Tens of Thousands Users." />
		<meta property="og:url" content="http://keenthemes.com/" />
		<meta property="og:site_name" content="Keenthemes" />
		<meta property="article:publisher" content="https://www.facebook.com/keenthemes" />
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:description" content="Metronic - #1 Selling Premium Bootstrap Admin Theme of All Time. Build with Twitter Bootstrap, SASS, AngularJS, Material Design. Trusted By Tens of Thousands Users."/>
		<meta name="twitter:title" content="Premium Bootstrap Admin Themes"/>
		<meta name="twitter:domain" content="Keenthemes"/>

		<!--End of Zopim Live Chat Script-->
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
		<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>-->
		<link href="_start/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="_start/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="_start/style.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
	</head>
	<!-- END HEAD -->
	<!-- BEGIN BODY -->
	<body quick-markup_injected="true">
		<!-- BEGIN TOPBAR -->
        @if (Route::has('login'))
		<div class="topbar navbar-fixed-top">
			<a class="topbar-logo" target="_blank" href="http://www.keenthemes.com">
			<img src="_start/img/logo.png" alt="Logo">
			</a>
            @auth
            <a class="topbar-purchase" data-placement="bottom" href="{{ url('/home') }}" >Home</a>
            @else
			<a class="topbar-purchase" data-placement="bottom" href="{{ route('login') }}" >Login</a>
            @if (Route::has('register'))
			<a class="topbar-purchase"  data-placement="bottom" href="{{ route('register') }}" >Register</a>
            @endif
        @endauth
		</div>
        @endif  
		<!-- END TOPBAR -->
		<!-- BEGIN BANNER -->
		<div class="banner">
			<div class="container">
				<h1 class="banner-title-main" style="font-size: 62px; font-weight: 300; margin-bottom: 50px;">Tổng đài  <span style="color: #eb6d6d;">106x</span></h1>
				<h1 class="banner-title-main">Chuyên đặt lịch khám Online <span class="banner-title-bold">nhanh chóng &amp; tiện lợi</span></h1>
				<p class="banner-title-paragraph">Hãy gọi ngay cho chúng tôi để được tư vấn và hướng dẫn</b>
				</p>
				
				
			</div>
			<div class="container" style="margin-top: 30px;">
				<center><h3 style="font-weight: 300">Sản phẩm của công ty bellhoasao24</h3></center>
				
			</div>
		</div>
		<!-- END BANNER -->
		
	
	
		<footer class="footer">
			<img class="footer-logo" src="_start/img/logo.png" alt="Logo">
			<ul class="list-inline social-icons">
				<li><a href="http://www.twitter.com/keenthemes" target="_blank" class="c-icon-link"><i class="icon-social-twitter"></i></a></li>
				<li><a href="http://dribbble.com/keenthemes" target="_blank" class="c-icon-link"><i class="icon-social-dribbble"></i></a></li>
				<li><a href="http://www.facebook.com/keenthemes" target="_blank" class="c-icon-link"><i class="icon-social-facebook"></i></a></li>
				<li><a href="http://themeforest.net/user/keenthemes/portfolio?ref=keenthemes" target="_blank" class="c-icon-link"><i class="icon-handbag"></i></a></li>
			</ul>
			<p class="copyright">Copyright &#64; Keenthemes.</p>
		</footer>
		<!-- END FOOTER -->
		<!-- BEGIN JAVASCRIPTS -->
		<!-- BEGIN CORE PLUGINS -->
		<script src="_start/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
		<script src="_start/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="_start/plugins/jquery.youtube.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				$('[data-hint="tooltip"]').tooltip({
					container: 'body'
				})
			});
		</script>
	</body>
	<!-- END BODY -->
</html>